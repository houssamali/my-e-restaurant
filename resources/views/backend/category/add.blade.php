@extends('backend.index')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

 <form action="{{url('submit-category')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Category Name')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="name" >
    @error('name')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
  
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Category Description')}}</label>
    <input type="text" name="description" class="form-control input-backgd w-50" >
    @error('description')
    <small class="form-text text-center text-danger">{{$message}}</small>
    @enderror
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Status')}}</label>
    <input type="checkbox" name="status" value="1">
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Category Image')}}</label>
    <input type="file" name="image" class="form-control" >
    @error('image')
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
  </div>
  

  <button type="submit" class="btn btn-primary">{{__('dashboard.Submit')}}</button>
</form>


                </div>
            </div>
        </div>





        











    </div>
 </div>
@endsection

