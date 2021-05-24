<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productview(){
$category=Category::all();
        $products=Product::with('productCategory')->paginate(5);
       
return view('backend.layouts.products.productview',compact('products','category'));
    }
    public function productform(){
        $category=Category::all();
        return view('backend.layouts.products.productform',compact('category'));
            }
            public function productcreate(Request $request){

                $filename='';
                if($request->hasFile('product_image'))
                {
                   
                        $file = $request->file('product_image');
        
                        if ($file->isValid()) {
                            $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
        
                            $file->storeAs('product', $filename);
                        }
        }
        
             Product::create([
                'product_name'=>$request->product_name,
                'product_category'=>$request->product_category,
                'quantity'=>$request->quantity,
                'size'=>$request->size,
                'color'=>$request->color,
                'price'=>$request->price,
                'product_image'=>$filename
        
        
             ]); 
             return redirect()->route('product.view')->with('message','product added successfully'); 
            }

            public function productcategories($id){
                $categories=Category::all();   
            $products=Product::where('product_category',$id)->get();
            return view('backend.layouts.products.productcategories',compact('products','categories'));
            }
}
