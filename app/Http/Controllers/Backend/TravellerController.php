<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Traveller;
use App\Models\PlannerTraveller;
use App\Models\Spot;
use Illuminate\Http\Request;

class TravellerController extends Controller
{
   public function travellerlist(){
       $spot=Spot::all();
       $travellers=Traveller::paginate(10);
       return view('backend.layouts.travellers.travellerlist',compact('travellers','spot'));
   } 
   public function selectid($id){
   
    $spot=Spot::all();
    $travellers=Traveller::where('spot_id',$id)->paginate(10);
    return view('backend.layouts.travellers.selectid',compact('travellers','spot'));
} 
public function plannertraveller(){
    $travellers=PlannerTraveller::all();
    return view('backend.layouts.travellers.plannertravellers',compact('travellers'));
} 
}
