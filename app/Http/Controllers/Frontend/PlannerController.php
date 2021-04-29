<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    public function plannerregistration(){
        return view('frontend.layouts.registration.planner');
    }
    public function plannerlogin(){
        return view('frontend.layouts.login.planner');
    }

}
