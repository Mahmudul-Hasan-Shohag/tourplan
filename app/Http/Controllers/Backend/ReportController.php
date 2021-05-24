<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Spot;
use App\Models\PlannerSpot;
use Illuminate\Http\Request;

class ReportController extends Controller
{
   
    public function orderreport(){
        $order=[];
        if(isset($_GET['from_date'])){

            $from_date=date('d-m-Y',strtotime($_GET['from_date']));
            $to_date=date('d-m-Y',strtotime($_GET['to_date']));
            
           $order=Order::whereBetween('order_date',[$from_date,$to_date])->get();
           
       }
        
        return view('backend.layouts.reports.orders',compact('order'));
    }
    public function spotreport(){
        $spot=[];
        if(isset($_GET['from_date'])){

            $from_date=date('Y-m-d',strtotime($_GET['from_date']));
            $to_date=date('Y-m-d',strtotime($_GET['to_date']));
            
           $spot=Spot::whereBetween('date',[$from_date,$to_date])->get();
           
       }
        
        return view('backend.layouts.reports.spot',compact('spot'));
    }
    public function plannerspotreport(){
        $spot=[];
        if(isset($_GET['from_date'])){

            $from_date=date('Y-m-d',strtotime($_GET['from_date']));
            $to_date=date('Y-m-d',strtotime($_GET['to_date']));
            
           $spot=PlannerSpot::whereBetween('journey_date',[$from_date,$to_date])->get();
           
       }
        
        return view('backend.layouts.reports.plannerspot',compact('spot'));
    }
}
