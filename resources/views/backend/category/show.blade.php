@extends('backend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md 12">
            <div class="card-header"><a class="btn btn-primary" href="{{url('add-category')}}">{{__('dashboard.Add New Category')}}</a></div>

            <div class="card-body">
                <table class="table table-striped text-center">

                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>{{__('dashboard.Name')}}</th>
                        <th>{{__('dashboard.Description')}}</th>
                        <th>{{__('dashboard.Status')}}</th>
                        <th>{{__('dashboard.Image')}}</th>
                        <th>{{__('dashboard.Action')}}</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($categories as $category)

                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->status}}</td>
                    <td><img src="{{asset('uploads/category/image')}}/{{$category->image}}" width="50px"></td>
                    <td>
                        <a href="{{url('edit-category')}}/{{$category->id}}" class="btn btn-primary">{{__('dashboard.Edit')}}</a>
                        <a href="{{url('delete-category')}}/{{$category->id}}" class="btn btn-danger">{{__('dashboard.Delete')}}</a>
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

