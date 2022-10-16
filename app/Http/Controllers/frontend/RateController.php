<?php

namespace App\Http\Controllers\frontend;
use App\Models\Rate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
   public function addRate(Request $request,$id)
   {
    $rate=new Rate();
    $existRating=Rate::where('food_id',$request->food_id)->where('user_id',Auth::id())->first();
    if($existRating)
    {
      $existRating->rate_no=$request->rate;
      $existRating->update();
      return redirect()->back()->with('status','تم تحديث تقييمك');
    }else{
    $rate->user_id=Auth::id();
    $rate->food_id=$request->food_id;
    $rate->rate_no=$request->rate;
    $rate->save();
    return redirect()->back()->with('status','شكرا لتقييمك');
   } 
}
}
