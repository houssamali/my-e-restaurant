@include('frontend.layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
<div class="container hero-change">
<div class="row">

    <div class="col-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h1>{{__('messages.My Order')}}</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{__('messages.Order_No')}}</th>
                            <th>{{__('messages.price')}}</th>
                            <th>{{__('messages.Status')}}</th>
                            <th>{{__('messages.Action')}}</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                       
                       @foreach($orders as $order)
                        <tr>
                        
                        <td>No: {{$order->track_no}}</td>
                        <td>Rs: {{$order->total}}</td>
                        <td>{{$order->status==true?'Completed':'Pending'}}</td>
                        <td>
                            <a href="{{url('order_details')}}/{{$order->id}}" >{{__('messages.view')}}</a>
                            <a id="myAlert" href="{{url('cancel_order')}}/{{$order->id}}" >{{__('messages.Cancel')}}</a>
                        </td>
                     </tr>
                     @endforeach
                   
                   
                    </tbody>
                   
                </table>
               
            </div>
        </div>
       
    </div>


</div>
</div>

@include('frontend.layouts.footer')