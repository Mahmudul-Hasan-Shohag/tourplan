<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
class OrderController extends Controller
{
    public function addToCart($id){
        $product=Product::find($id);

        Cart::add([
        'id' => $product->product_id, 
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
}
