@extends('backend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 12">
            

            <div class="card-body">
                <table class="table table-striped text-center">

                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('dashboard.order_no')}}</th>
                        <th>{{__('dashboard.Status')}}</th>
                        <th>{{__('dashboard.Action')}}</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($orders as $order)

                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->track_no}}</td>
                    <td>{{$order->status==0?'معلق':'مكتمل'}}</td>
                    <td>
                        <a href="{{url('dashboard_vieworder')}}/{{$order->id}}" class="btn btn-primary">{{__('messages.view')}}</a>
                        <a href="{{url('dashboard_deleteorder')}}/{{$order->id}}" class="btn btn-danger">{{__('dashboard.Delete')}}</a>
                    </td>
                </tr>

                @endforeach
                </tbody>



                </table>
            </div>
        </div>
    </div>
</div>
 
@endsection

