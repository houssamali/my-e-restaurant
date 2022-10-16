<?php

namespace App\Http\Controllers\frontend;
use App\models\Food;
use App\Models\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function addcart(Request $request,$id)
    {
        $food=Food::find($id);
         Cart::where('user_id',Auth::id())->where('food_id',$food->id)->exists();
         if(Cart::where('user_id',Auth::id())->where('food_id',$food->id)->exists())
         {
            
            return redirect()->back()->with('status2',$food->name.' تمت إضافته من قبل');
           
         }else{
    
        $carts=New Cart();
        $carts->user_id=Auth::id();
        $carts->food_id=$food->id;
        $carts->qty='1';
        $carts->offer_price=$food->offer;
       $carts->save();
       $Cocart=Cart::where('user_id',Auth::id())->count();
       Session()->put('Cocart',$Cocart);

      
       return redirect()->back()->with('status',$food->name.' تم الإضافة بنجاح');
    }}

    public function showcart()
    {
        $carts=Cart::where('user_id',Auth::id())->get();

        return view('frontend.cart.show',compact('carts'));
    }

    public function deletecart($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('status',$cart->food->name.' تم الحذف بنجاح');

    }

    


}
