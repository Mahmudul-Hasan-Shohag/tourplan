<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryview(){
        $category=Category::all();
        return view('backend.layouts.category.categories',compact('category'));
    }
    public function categoryform(){
        return view('backend.layouts.category.categoryform');
    }
    public function categorycreate(Request $request){
        Category::create([

            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description
            
            ]);
            return redirect()->route('category.view')->with('message','category added successfully');
        

    }
}
