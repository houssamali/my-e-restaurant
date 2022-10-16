@extends('backend.index')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

 <form action="{{url('update-category')}}/{{$category->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Category Name')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="name" value="{{$category->name}}" >
    @error('name')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Category Description')}}</label>
    <input type="text" name="description" class="form-control input-backgd w-50" value="{{$category->description}}">
    @error('description')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Status')}}</label>
    <input type="checkbox" name="status" {{$category->status==1?'checked':''}}>
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Category Image')}}</label>
    <img src="{{asset('uploads/category/image')}}/{{$category->image}}" width="50px">
    <input type="file" name="image" class="form-control" >
    @error('image')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
  </div>
  

  <button type="submit" class="btn btn-primary">{{__('dashboard.Update')}}</button>
</form>


                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
