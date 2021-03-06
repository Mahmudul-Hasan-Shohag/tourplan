<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Spot;
use App\Models\Traveller;
use App\Models\PlannerSpot;
use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function viewspot(){
$spot=Spot::all();

        return view('backend.layouts.spot.viewspot',compact('spot'));
    }
    public function spotform(){

        return view('backend.layouts.spot.spotform');
    }
    public function createspot(Request $request){
       
        $filename='';
        if($request->hasFile('spot_image'))
        {
            //some code here to store into directory
                $file = $request->file('spot_image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   
                    $file->storeAs('spot', $filename);
                }
}   
Spot::create([
    'spot_name'=>$request->spot_name,
    'destination'=>$request->destination,
    'duration'=>$request->duration,
    'cost'=>$request->cost,
    'date'=>$request->date,
    'description'=>$request->description,
    'spot_image'=>$filename
]);
  return redirect()->back();      
    }

    public function spotdetails($id){

$spot=Spot::find($id);
        return view('backend.layouts.spot.spotdetails',compact('spot'));
    }
    public function joinspot(Request $request){
Traveller::create([
'spot_id'=>$request->spot_id,
'spot_name'=>$request->spot_name,
'destination'=>$request->destination,
'traveller_id'=>$request->traveller_id,
'traveller_name'=>$request->traveller_name,
'traveller_mobile'=>$request->traveller_mobile,
'traveller_email'=>$request->traveller_email,
]);
return redirect()->back()->with('message','Your have joined for this tour.Have a safe journey!');
    }
public function plannerspot(){
    $spot=PlannerSpot::all();
    return view('backend.layouts.spot.plannerspot',compact('spot'));
}
   

}
