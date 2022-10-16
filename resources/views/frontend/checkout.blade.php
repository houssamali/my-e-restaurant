@include('frontend.layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
<div class="container hero-change">
<div class="row">
    
 
    <div class="col-md-6">
    <div class="card">
                <div class="card-body">

<form action="{{url('add-order')}}" method="post" >
@csrf
  <div class="mb-3">
    <label  class="form-label">{{__('messages.Customer Name')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="name" value="{{auth::user()->name}}" >
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('messages.Email ID')}}</label>
    <input type="email" name="email" value="{{auth::user()->email}}" class="form-control input-backgd w-50" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('messages.Phone Number')}}</label>
    <input type="text" name="number" class="form-control input-backgd w-50" >
  </div>


  <div class="mb-3">
    <label  class="form-label">{{__('messages.Address')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="address" >
  </div>

  


                </div>
            </div>

    </div>



    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>#ID</th>
                            <th>{{__('messages.Name')}}</th>
                            <th>{{__('messages.Qty')}}</th>
                            <th>{{__('messages.price')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $total=0; @endphp
                        @foreach($carts as $cart)
                        <tr>
                        
                        <td>{{$cart->id}}</td>
                        <td>{{$cart->food->name}}</td>
                        <td>{{$cart->qty}}</td>
                        <td>{{$cart->offer_price}}</td>
                     </tr>
                     @php $total +=$cart->offer_price * $cart->qty; @endphp
                     @endforeach
                    </tbody>
                </table>
                {{__('messages.Total')}} {{$total}}:ريال
            </div>
        </div>
    </div>
<input type="hidden"  name="total" value="{{$total}}">
    <button type="submit" class="btn btn-primary mt-3 w-25">{{__('messages.OrderNow')}}</button>
</form>

</div>
</div>

@include('frontend.layouts.footer')