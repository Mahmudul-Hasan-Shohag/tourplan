<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Spot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website(){
        $spot=Spot::all();
        return view('frontend.master',compact('spot'));
    }
}
