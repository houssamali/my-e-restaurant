<?php

namespace App\Http\Controllers\frontend;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use PDF;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $carts=Cart::where('user_id',Auth::id())->get();

        return view('frontend.checkout',compact('carts'));
    }

    public function add_order(Request $request)
    {

        $order=new Order();
        $order->name=$request->name;
        $order->email=$request->email;
        $order->address=$request->address;
        $order->number=$request->number;
        $order->track_no=rand(1111,9999);
        $order->status=0;
        $order->total=$request->total;
        $order->save();

       $carts=Cart::where('user_id',Auth::id())->get();
         foreach($carts as $cart)
         {
            $item=new Item();
            $item->order_id=$order->id;
            $item->user_id=Auth::id();
            $item->food_id=$cart->food_id;
            $item->qty=$cart->qty;
            $item->price=$cart->offer_price;
            $item->save();
            $cart->delete();
         }
         $orders=Order::where('name',Auth::user()->name)->count();
         Session()->put('CoOrder',$orders);
         $orders=Order::where('name',Auth::user()->name)->where('email',Auth::user()->email)->get();
       
         
       
       
         return view('frontend.order.view_order',compact('orders'));
 
    }

    public function show_order()
    {
        $orders=Order::where('name',Auth::user()->name)->where('email',Auth::user()->email)->get();
        return view('frontend.order.view_order',compact('orders')); 
    }

    public function order_details($id)
    {
        
        $orders=Order::find($id);
        $items=Item::where('order_id',$orders->id)->get();
        return view('frontend.order.show_details',compact('items','orders'));

    }

    public function Cancel($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect('home')->with('status',$order->name.'تم إلغاء الطلب ');
    }

    public function print_pdf($id)
    {
        $orders=Order::find($id);
        $items=Item::where('order_id',$orders->id)->get();
        
        $pdf=PDF::loadView('frontend.print.pdf',compact('orders','items'));
        return $pdf->download('Reciept.pdf');

    }
}
