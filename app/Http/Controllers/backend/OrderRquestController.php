<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
class OrderRquestController extends Controller
{
    public function show()
    {
    $orders=Order::all();
    return view('backend.order.show',compact('orders'));
    }

    public function view($id)
    {
        $orders=Order::find($id);
        $items=Item::where('order_id',$id)->get();
       // echo $items;

        
        return view('backend.order.view',compact('orders','items'));
    }
    public function delete($id)
    {
        $order=Order::find($id);
        $item=Item::where('order_id',$id);
        $item->delete();
        $order->delete();
        return redirect()->back()->with('status','تم حذف الطلب بنجاح');
       
    }
}
