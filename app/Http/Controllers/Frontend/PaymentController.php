<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function paymentform(){

        return view('frontend.layouts.paymentform');
    }
    public function paymentcreate(Request $request){
Payment::create([
'cus_id'=>$request->cus_id,
'cus_name'=>$request->cus_name,
'payment_method'=>$request->payment_method,
'trans_number'=>$request->trans_number,
'mobile_number'=>$request->mobile_number,
'refference'=>$request->refference
]);
return redirect()->route('frontend.products');    
    }

   public function paymentview(){
       $payment=Payment::all();
       return view('backend.layouts.paymentview',compact('payment')); 
   } 
    
}

 

