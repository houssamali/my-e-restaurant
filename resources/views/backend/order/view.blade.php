@extends('backend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 12">
            

            <div class="card-body">
                <div class="d-flex justify-content-between">
           <h3>{{__('dashboard.Name')}}:{{$orders->name}} </h3>

           <h3>{{__('dashboard.order_no')}}:{{$orders->track_no}} </h3>
           </div>
                <table class="table table-striped text-center">
                

                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('messages.price')}}</th>
                        <th>{{__('dashboard.Image')}}</th>
                        <th>{{__('messages.Date')}}</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($items as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->food->name}}</td>
                  <td>Rs:{{$item->price}}</td>
                    <td>
                        <img src="{{asset('uploads/food/image')}}/{{$item->food->image}}" 
                        width="70px"></td>
                   
                    <td>{{$item->created_at}}</td>
                    
                </tr>

                @endforeach
                </tbody>



                </table>

                <div class="d-flex justify-content-between">
           <h6>{{__('messages.Date')}}:{{$orders->created_at}} </h6>

           <h3>{{__('messages.Total')}}:{{$orders->total}} ريال  </h3>
           </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
