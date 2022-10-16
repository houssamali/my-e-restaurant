@include('frontend.layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
<section class="her hero-change" id="home">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                
                <th>{{__('messages.Image')}}</th>
                <th>{{__('messages.Name')}}</th>
                <th>{{__('messages.Qty')}}</th>
                <th>{{__('messages.price')}}</th>
                <th>{{__('messages.Action')}}</th>
              </tr>
            </thead>


            <tbody>
                
            @php $total=0;  @endphp
            @if($carts->count() >=0)
                @foreach($carts as $cart)
                <tr>
                    
                    <td ><img src="{{asset('uploads/food/image')}}/{{$cart->food->image}}" class="text-center"  width="100px"></td>
                    <td>{{$cart->food->name}}</td>
                    <td >
                        {{$cart->qty}}
                </td>
                    <td>{{$cart->offer_price}}</td>
                    <td>
                        <a href="{{url('edit-cart')}}/{{$cart->id}}" class="btn btn-info pt-3">
                        {{__('messages.Edit')}}</a>
                        <a href="{{url('delete-cart')}}/{{$cart->id}}" class="btn btn-danger pt-3 ">{{__('messages.Det')}}</a>
                    </td>
                    @php  $total +=$cart->offer_price * $cart->qty @endphp
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        {{__('messages.Total')}} {{$total}}:ريال
       
    </div>
</div>

        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <a href="{{url('checkout')}}" class="btn btn-primary pt-3">{{__('messages.Check Out')}}</a>
        </div>
    </div>
</div>
</section>

@include('frontend.layouts.footer')