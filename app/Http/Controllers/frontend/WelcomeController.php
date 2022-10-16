<?php

namespace App\Http\Controllers\frontend;
use App\Models\Category;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Rate;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class WelcomeController extends Controller
{
    public function welcome()
    {


        $coutcart=Cart::where('user_id',Auth::id())->count();

        session()->put('Cocart',$coutcart);

        $categories=Category::get();

        $breakfast=Category::where('slug','breakfast')->first();
        $lunch=Category::where('slug','lunch')->first();
        $dinner=Category::where('slug','dinner')->first();
        $snack=Category::where('slug','snack')->first();
        $juice=Category::where('slug','juice')->first();

        $breakfasts=Food::where('cate_id',$breakfast->id)->get();
        $lunchs=Food::where('cate_id',$lunch->id)->get();
        $dinners=Food::where('cate_id',$dinner->id)->get();
        $snacks=Food::where('cate_id',$snack->id)->get();
        $juices=Food::where('cate_id',$juice->id)->get();

        $lunchads=Food::where('trending',1)->latest()->take(4)->get();
        $ads=Food::where('ads',1)->latest()->take(1)->first();
        
        //$users =User::take(16)->get();
       
        return view('welcome',compact('categories','ads','lunchads','coutcart','breakfasts','lunchs','dinners','snacks','juices'));
    }

    public function order_Now($id)
    {
        $order=Food::find($id);
        if(Rate::where('food_id',$order->id)->exists())
        {
       $rates=Rate::where('food_id',$order->id)->count();
       $rate_sum=Rate::where('food_id',$order->id)->sum('rate_no');
       $sum=$rate_sum / $rates;
       
    
        }else{
           // $rates=0;
            $sum=0;
        }
        if(Rate::where('food_id',$order->id)->where('user_id',Auth::id())->exists())
        {
            $user_rate=Rate::where('food_id',$order->id)->where('user_id',Auth::id())->first();
            $rate_user= $user_rate->rate_no;
            
        }else{
            $rate_user=0;
        }
       
       
      return view('frontend.order.order',compact('order','sum','rate_user'));
    }

   public function search(Request $request) 
   {
    $search=Food::where('name',$request->search)->take(1)->first();
    if($search==true)
    {
        
      $foods=Food::where('cate_id',$search->cate_id)->get();
     

     return view('frontend.search',compact('search','foods'));
    
    }else{
        return redirect()->back()->with('status','لم يتم العثور على أي نتيجة');
    }

   }
}
