@include('frontend.layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
<div class="container hero-change">

    
               <div class="float-start">
                <h3>{{__('messages.Name')}} {{$orders->name}}</h3>
                <h4>{{__('messages.Phone Number')}} {{$orders->number}}</h4>
                <h2>{{__('messages.Order_No')}}: {{$orders->track_no}}</h2>
               </div>
 
    
                <div class="float-end">
                <h3>{{__('messages.Al_rasni restuarant')}}</3>
                <h4>{{__('messages.Address')}} : Taiz 26 street</h4>
                 <h5>{{__('messages.Date')}} :{{$orders->created_at}}</h5>
                  </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{__('messages.Order_No')}}</th>
                            <th>{{__('messages.Item Name')}}</th>
                            <th> {{__('messages.Qty')}}</th>
                            <th>{{__('messages.Tax')}}</th>
                            <th>{{__('messages.price')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($items as $item)
                      <tr>
                        <td>{{$orders->id}}</td>
                        <td>{{$item->food->name}}</td>
                        <td> {{$item->qty}}</td>
                        <td>{{'00.00'}}</td>
                        <td>{{$item->price}}</td>
                        
                       
                      </tr>
                   @endforeach
                   
                    </tbody>

                </table>
                <h1>{{__('messages.Total')}} Rs: {{$orders->total}} </h1>
          



</div>
<div class="container">
    <div class="row">
        <a href="{{url('print-pdf')}}/{{$orders->id}}" class="btn btn-danger">{{__('Print as PDF')}}</a>
    </div>
</div>

@include('frontend.layouts.footer')