@extends('backend.index')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

 <form action="{{url('submit-food')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="mb-3">
<select class="form-select form-select-lg mb-3 w-50" name="cate_id" aria-label=".form-select-lg example">
  <option selected>{{__('dashboard.Select a Category')}}</option>

  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
  
</select>
</div>


  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Name')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="name" >
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Food Description')}}</label>
    <input type="text" name="description" class="form-control input-backgd w-50" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('dashboard.Long Description')}}</label>
    <input type="text" name="long_description" class="form-control input-backgd w-50" >
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Price')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="price" >
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Offer Price')}}</label>
    <input type="text" class="form-control input-backgd w-50 " name="offer" >
  </div>


  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Status')}}</label>
    <input type="checkbox" name="status" value="1">

    <label  class="form-label">Trending</label>
    <input type="checkbox" name="trending" value="1">
  </div>

  <div class="mb-3">
    <label  class="form-label">{{__('dashboard.Food Image')}}</label>
    <input type="file" name="image" class="form-control" >
  </div>
  

  <button type="submit" class="btn btn-primary">{{__('dashboard.Submit')}}</button>
</form>


                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

