@extends('backend.index')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

 <form action="{{url('update-food')}}/{{$food->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="mb-3">
<select class="form-select form-select-lg mb-3 w-50" name="cate_id" aria-label=".form-select-lg example">
  

  
  <option value="{{$category->id}}">{{$category->name}}</option>
  
  
</select>
</div>


  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Name')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="name" value="{{$food->name}}" >
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Food Description')}}</label>
    <input type="text" name="description" value="{{$food->description}}" class="form-control input-backgd w-50" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Long Description')}}</label>
    <input type="text" name="long_description" name="{{$food->long_description}}" class="form-control input-backgd w-50" >
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Price')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="price" value="{{$food->price}}">
  </div>


  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Offer Price')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="offer" value="{{$food->offer}}">
  </div>


  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Status')}}</label>
    <input type="checkbox" name="status" {{$food->status==1?'checked':''}}>

    <label  class="form-label">Trending</label>
    <input type="checkbox" name="trending" {{$food->trending==1?'checked':''}}>
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Image')}}</label>
    <img src="{{asset('uploads/food/image')}}/{{$food->image}}" width="50px">
    <input type="file" name="image" class="form-control" >
  </div>
  

  <button type="submit" class="btn btn-primary">{{__('dashboard.Update')}}</button>
</form>


                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
