@include('frontend.layouts.header')
<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
<section class="section food-menu" id="food-menu">
<div class="container">


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$order->name}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{url('add-rate')}}/{{$order->id}}" method="post">
  @csrf
<input type="hidden" name="food_id" value="{{$order->id}}">

<div class="rate ">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">{{__('messages.Rate')}} {{$order->name}}</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--end modal-->


      <p class="section-subtitle">{{__('messages.populardishes')}}</p>

          <h2 class="h2 section-title">
          {{__('messages.ourdelicious')}} <span class="span">{{$order->name}}</span>
          </h2>

    <div class="row">
        <div class="col-md-12">



        <div class="card">
            <div class="card-body">


            <div class="row">
               


         <div class="about-banner col-md-6 mt-5">
             <img src="{{asset('uploads/food/image')}}/{{$order->image}}" width=""  loading="lazy" alt="Burger with Drinks"
              class=" w-100 about-img rounded-circle ">

             <img src="{{asset('uploads/food/image')}}/{{$order->image}}" width="216" height="226" alt="get up to 50% off now"
              class="abs-img scale-up-anim rounded-circle mt-5">
          </div>

                


        <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 text-center mt-5 mb-5">
                <h1>{{$order->name}}</h1>
              </div>
            </div>

            <div class="row">

            <div class="col-9 col-sm-9 col-md-9">
                <h4>{{__('messages.Food Name')}}: {{$order->name}}</h4>
                <p>{{__('messages.Description')}}: {{$order->description}}</p>
                <div class=" ">
                <span >{{__('messages.Orginal Price')}} <s class="" >{{$order->price.' '}}:ريال</s></span>
                <span > {{__('messages.Offer Price')}}{{$order->offer}}:ريال </span> 
               </div>

  
<!-- Button trigger modal -->
<button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
  @if($rate_user !=0)


<div class="rate ">
@for($i=1;$i<=$rate_user;$i++)

<input type="radio" id="star1" name="rate" checked value="1" />
    <label for="star1" title="text">1 star</label>
    
    @endfor

    @for($j=$rate_user + 1;$j<= 5;$j++)
   
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
    
    @endfor
    
    </div>
    @else
    <div class="rate ">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
  @endif

 
  
    {{$sum}}
</button>

               
               @if($order->status=='1')
               <p class="mt-5 bg-success text-dark w-25 text-center">{{__('messages.Avaliable')}}</p>
               @else
               <p class="mt-4 bg-success text-light w-25 text-center">{{__('messages.Not Avaliable')}}</p>
               @endif
               <a href="{{url('add-cart')}}/{{$order->id}}" class="btn btn-primary text-center pt-2 fs-3 mt-4">{{__('messages.add to cart')}} <i class="fa fa-cart-shopping"></i></a>
            </div>




                <div class="col-3 col-sm-3 col-md-3 ">
                    @if($order->trending=='1')
                    <h1 class="bg-primary text-center fs-4 p-2 text-dark ">{{__('messages.Trending')}}</h1>
                    @else
                    <h1 class="bg-primary text-center fs-4 p-2 text-dark ">{{__('messages.Public')}}</h1>
                    @endif
                </div>

            </div>
            @if($order->long_description ==NULL)

            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus non atque, impedit accusamus sunt exercitationem explicabo minima quisquam rerum amet quibusdam laborum. Corrupti quo laborum eum unde iste labore possimus.</p>
           @else
           <p class="mt-5">{{$order->long_description}}</p>
           @endif
        </div>


        </div>
        </div>
        </div>
        </div>
    </div>
</div>

















</section>



@include('frontend.layouts.footer')