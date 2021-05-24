<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Orderdetail;
use Gloudemans\Shoppingcart\Facades\Cart;
class OrderController extends Controller
{
    public function addToCart($id){
        $product=Product::find($id);

        Cart::add([
        'id' => $product->id, 
        'name' => $product->product_name, 
        'qty' => 1,
        'price' =>$product->price,
        'weight' =>0,
        'options' => ['size'=>$product->product_image]
        
        ]);
        return redirect()->back()->with('message','product added to cart');
    }
    public function cartview(){
        $cart=Cart::content();
        return view('frontend.layouts.cartview',compact('cart'));
    }
    public function removecart($rowId)
{
    $remove=Cart::remove($rowId);
    
    return redirect()->back()->with('message', 'Item removed from cart successfully',compact('remove'));
}
public function updatecart(Request $request,$rowId)
{
   $cart=$request->qty;
    
   Cart::update($rowId,$cart);
   return redirect()->back();
}
public function orderconfirm(Request $request){
$carts=Cart::content();
$order=Order::create([
    'customer_id'=>$request->customer_id,
    'cus_name'=>$request->cus_name,
    'cus_mobile'=>$request->cus_mobile,
    'cus_email'=>$request->cus_email,
    'cus_address'=>$request->cus_address,
    'order_date'=>$request->order_date,
    'order_status'=>$request->order_status,
    'total_products'=>$request->total_products,
    'subtotal'=>$request->subtotal,
    'totalprice'=>$request->totalprice,

    ]);
    foreach( $carts as $cart){
        OrderDetail::create([
            'product_id'=>$cart->id,
            'order_id' => $order->id,
            'product_name' => $cart->name,
            'quantity' => $cart->qty,
            'unit_price' => $cart->price,
        ]);
       


     }
     return redirect()->route('payment.form')->with(Cart::destroy());
}

public function ordershow(){
    $order=Order::all();
    return view('backend.layouts.orders.ordershow',compact('order'));
}
public function orderview($id){
    $orderview=Order::find($id);
    return view('backend.layouts.orders.orderview',compact('orderview'));
}
 public function orderdetails(){
    $orderdetails=Orderdetail::all();
    return view('backend.layouts.orders.orderdetails',compact('orderdetails'));
 }

 public function orderdeliver($id){
$deliver=Order::find($id);
$deliver->order_status='Delivered';
$deliver->save();
$orderdetails=Orderdetail::where('order_id',$id)->get();
foreach($orderdetails as $data){
    $products=Product::where('id',$data->product_id)->first();
    $products_quantity=$products->quantity;
    
    $order=Order::find($id);
    $order_quantity=$order->total_products;
    $update_quantity=$products_quantity-$order_quantity;
       Product::where('id',$data->product_id)->update(['quantity'=> $update_quantity]);
    }


return redirect()->back()->with('message','product has been delivered');
 }
 public function invoice($id){
    $order=Orderdetail::with('orderOrderdetails')->first();
     //dd($order);
   
     
     
     return view('backend.layouts.orders.invoice',compact('order'));
 }

}