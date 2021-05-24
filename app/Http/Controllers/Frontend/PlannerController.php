<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\PlannerSpot;
use App\Models\PlannerTraveller;
use Illuminate\Http\Request;

class PlannerController extends Controller
{

 public function plannerspot(){
     $spot=PlannerSpot::all();
        return view('frontend.layouts.spot.plannerspot',compact('spot'));
    }
    public function plannerspotform(){
        return view('frontend.layouts.spot.spotform');
    }
    public function spotcreate(Request $request){
        
        $filename='';
        if($request->hasFile('image'))
        {
            //some code here to store into directory
                $file = $request->file('image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   
                    $file->storeAs('planner', $filename);
                }
}   

        PlannerSpot::create([
'planner_id'=>$request->planner_id,
'planner_name'=>$request->planner_name,
'spot_name'=>$request->spot_name,
'destination'=>$request->destination,
'journey_date'=>$request->journey_date,
'total_cost'=>$request->total_cost,
'description'=>$request->description,
'image'=>$filename

        ]);
        return redirect()->route('planner.spot');
    }
    public function spotdetails($id){
        $spot=PlannerSpot::find($id);
        return view('frontend.layouts.spot.spotdetails',compact('spot'));
    }
    public function plannerTravellersjoin(Request $request){
        PlannerTraveller::create([
        'spot_id'=>$request->spot_id,
        'spot_name'=>$request->spot_name,
        'destination'=>$request->destination,
        'traveller_id'=>$request->traveller_id,
        'name'=>$request->name,
        'mobile'=>$request->mobile,
        'email'=>$request->email,
        ]);
        return redirect()->back()->with('message','Your have joined for this tour.Have a safe journey!');
            }

            public function plannerTravellers(){

                $travellers=PlannerTraveller::all();
                return view('frontend.layouts.spot.travellers',compact('travellers'));
            }
            public function travellersearch(Request $request){
                $search=$request->search;
                $travellers=PlannerTraveller::where('spot_id','like','%'.$search.'%')->get();
                return view('frontend.layouts.spot.travellers',compact('travellers','search'));
            }
}
