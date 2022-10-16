@extends('backend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 12">
            <div class="card-header"><a class="btn btn-primary" href="{{url('add-food')}}">{{__('dashboard.Add New Food')}}</a></div>

            <div class="card-body">
                <table class="table tabel-stripe">

                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>{{__('dashboard.Category Name')}}</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('dashboard.Pice')}}</th>
                        <th>{{__('dashboard.Status')}}</th>
                        <th>{{__('dashboard.Trending')}}</th>
                        <th>{{__('dashboard.Image')}}</th>
                        <th>{{__('dashboard.Action')}}</th>
                    </tr>
                </thead>

                <tbody>

               @foreach($foods as $food)

                <tr>
                    <td>{!!$food->id!!}</td>
                    <td>{{$food->category->name}}</td>
                    <td>{{$food->name}}</td>
                    <td>{{$food->price}}</td>
                    <td>{{$food->status==true?'1':'0'}}</td>
                    <td>{{$food->trending==true?'1':'0'}}</td>
                    <td><img src="{{asset('uploads/food/image')}}/{{$food->image}}" width="50px"></td>
                    <td>
                        <a href="{{url('edit-food')}}/{{$food->id}}" class="btn btn-primary">{{__('dashboard.Edit')}}</a>
                        <a href="{{url('delete-food')}}/{{$food->id}}" class="btn btn-danger">{{__('dashboard.Delete')}}</a>
                    </td>
                </tr>
                @endforeach

               
                </tbody>



                </table>
                {!! $foods->links() !!}
            </div>
        </div>
    </div>
</div>
 
@endsection
