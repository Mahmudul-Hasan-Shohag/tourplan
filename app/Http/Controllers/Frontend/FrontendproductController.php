<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendproductController extends Controller
{
   public function products(){
       $category=Category::all();
       $products=Product::all();
       return view('frontend.layouts.products',compact('products','category'));
   }
   public function frontendproductcategories($id){
    $category=Category::all();   
    $products=Product::where('product_category',$id)->get();
    return view('frontend.layouts.productcategories',compact('products','category'));
   }
}
