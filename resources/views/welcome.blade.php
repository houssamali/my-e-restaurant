@include('frontend.layouts.header')
@include('frontend.layouts.slide')
      <!-- 
        - #PROMO
      -->

      <section class="section section-divider white promo">
        <div class="container">

          <ul class="promo-list ">
          <div class="owl-carousel featured-carousel owl-theme">
 @foreach($categories as $category)
<div class="item">
            <li class="promo-item">
              <div class="promo-card ">
                  
              

                <h3 class="h3 card-title">{{$category->name}}</h3>

                <p class="card-text">
                 {{$category->description}}
                </p>

                <a href="{{url('show-food_category')}}/{{$category->id}}"><img src="{{asset('uploads/category/image')}}/{{$category->image}}" width="300" height="300" 
                class="w-100 card-banner rounded-circle"></a>

              </div>
            </li>

</div>
@endforeach
</div>
          </ul>

        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section section-divider gray about" id="about">
        <div class="container">

          <div class="about-banner">
            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="509" height="459" loading="lazy" alt="Burger with Drinks"
              class="w-100 about-img rounded-circle">

            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="216" height="226" alt="get up to 50% off now"
              class="abs-img scale-up-anim rounded-circle">
          </div>

          <div class="about-content">

            <h2 class="h2 section-title">
             {{__('messages.supperdelicious')}}
              <span class="span">{{__('messages.intown')}}!</span>
            </h2>

            <p class="section-text">
             Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur reprehenderit quos placeat delectus quia ipsa beatae iusto ratione? Magnam perferendis exercitationem corporis quisquam odit mollitia blanditiis voluptates tempora totam harum.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">{{__('messages.Delicious Healthy Foods')}}</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">{{__('messages.Spacific Family And Kids Zone')}}</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">{{__('messages.Music Other Facilities')}}</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-outline"></ion-icon>

                <span class="span">{{__('messages.Fastest Food Home Delivery')}}</span>
              </li>

            </ul>

            <a href="{{url('order-now')}}/{{$ads->id}}" class="btn btn-hover">{{__('messages.OrderNow')}}</a>

          </div>

        </div>
      </section>

      <!-- 
        - #FOOD MENU
      -->

      <section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">{{__('messages.populardishes')}}</p>

          <h2 class="h2 section-title">
          {{__('messages.ourdelicious')}} <span class="span">{{__('messages.food')}}</span>
          </h2>

          

          <ul class="fiter-list">

            

            <li>
              <a  href="#breakfast" class="filter-btn">{{__('messages.breakfast')}}</a>
            </li>

            <li>
              <a  href="#lunch" class="filter-btn">{{__('messages.lunch')}}</a>
            </li>

            <li>
              <a href="#dinner" class="filter-btn">{{__('messages.dinner')}}</a>
            </li>

            <li>
              <a href="#snack" class="filter-btn">{{__('messages.snack')}}</a>
            </li>

            <li>
              <a href="#snack" class="filter-btn">{{__('messages.juice')}}</a>
            </li>

          </ul>

          
          @if($breakfasts->count() >='1')
         
            <div class="text-center mt-4 mb-1"><h1>{{__('messages.breakfast')}}</h1></div>
          <div id="breakfast" class=" owl-one owl-carousel  owl-theme">
            @foreach($breakfasts as $breakfast)
          <div class="item">
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$breakfast->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a href="{{url('order-now')}}/{{$breakfast->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
                </div>
                <div class="wrapper">
                  <p class="category">{{$breakfast->name}}</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
               
                <h3 class="h3 card-title">{{$breakfast->description}}</h3>

                <div class="price-wrapper">

                  

                  <data class="price">${{$breakfast->offer}}</data>

                  <del class="del" value="69.00">${{$breakfast->price}}</del>

                  <p class="price-text">:{{__('messages.price')}}</p>

                </div>

              </div>
              
</div>
@endforeach
</div>
@else
<h1 class="text-dark">{{__('messages.Sorryis notavalaible')}}</h1>
@endif

@if($lunchs->count() >='1')
          

          <div class="text-center mt-4 mb-5"><h1>{{__('messages.lunch')}}</h1></div>

          <div id="lunch" class="owl-two owl-carousel  owl-theme">
            @foreach($lunchs as $lunch)
          <div class="item">
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$lunch->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a  href="{{url('order-now')}}/{{$lunch->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
                </div>
                <div class="wrapper">
                  <p class="category">{{$lunch->name}}</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
               
                <h3 class="h3 card-title">{{$lunch->description}}</h3>

                <div class="price-wrapper">

                 

                  <data class="price">${{$lunch->offer}}</data>

                  <del class="del" value="69.00">${{$lunch->price}}</del>
                  <p class="price-text">:{{__('messages.price')}}</p>

                </div>

              </div>
           
</div>
@endforeach
</div>
@else
<h1 class="text-dark">{{__('messages.Sorryis notavalaible')}}</h1>
@endif

@if($dinners->count() >='1')
          
<div class="text-center mt-4 mb-5"><h1>{{__('messages.dinner')}}</h1></div>

<div id="dinner" class="owl-three owl-carousel  owl-theme">
  @foreach($dinners as $dinner)
<div class="item">
    <div class="food-menu-card">
    
      <div class="card-banner">
        <img src="{{asset('uploads/food/image')}}/{{$dinner->image}}" width="300" height="300" loading="lazy"
          alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

        <div class="badge">-15%</div>

        <a  href="{{url('order-now')}}/{{$dinner->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
      </div>
      <div class="wrapper">
        <p class="category">{{$dinner->name}}</p>

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>
      </div>
     
      <h3 class="h3 card-title">{{$dinner->description}}</h3>

      <div class="price-wrapper">

        

        <data class="price">${{$dinner->offer}}</data>

        <del class="del" value="69.00">${{$dinner->price}}</del>
        <p class="price-text">:{{__('messages.price')}}</p>

      </div>

    </div>
 
</div>
@endforeach
</div>
@else
<h1 class="text-dark">{{__('messages.Sorryis notavalaible')}}</h1>
@endif

@if($snacks->count() >='1')
<div id="snack" class="text-center mt-4 mb-5"><h1>{{__('messages.snack')}}</h1></div>

<div  class="owl-four owl-carousel  owl-theme">
  @foreach($snacks as $snack)
<div class="item">
    <div class="food-menu-card">
    
      <div class="card-banner">
        <img src="{{asset('uploads/food/image')}}/{{$snack->image}}" width="300" height="300" loading="lazy"
          alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

        <div class="badge">-15%</div>

        <a  href="{{url('order-now')}}/{{$snack->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
      </div>
      <div class="wrapper">
        <p class="category">{{$snack->name}}</p>

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>
      </div>
     
      <h3 class="h3 card-title">{{$snack->description}}</h3>

      <div class="price-wrapper">

        

        <data class="price">${{$snack->offer}}</data>

        <del class="del" value="69.00">${{$snack->price}}</del>

        <p class="price-text">:{{__('messages.price')}}</p>

      </div>

    </div>
 
</div>
@endforeach
</div>
@else
<h1 class="text-dark">{{__('messages.Sorryis notavalaible')}}</h1>
@endif

@if($juices->count() >='1')
<div id="snack" class="text-center mt-4 mb-5"><h1>{{__('messages.juice')}}</h1></div>

<div  class="owl-four owl-carousel  owl-theme">
  @foreach($juices as $juice)
<div class="item">
    <div class="food-menu-card">
    
      <div class="card-banner">
        <img src="{{asset('uploads/food/image')}}/{{$juice->image}}" width="300" height="300" loading="lazy"
          alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

        <div class="badge">-15%</div>

        <a  href="{{url('order-now')}}/{{$juice->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
      </div>
      <div class="wrapper">
        <p class="category">{{$juice->name}}</p>

        <div class="rating-wrapper">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
        </div>
      </div>
     
      <h3 class="h3 card-title">{{$juice->description}}</h3>

      <div class="price-wrapper">

        

        <data class="price">${{$juice->offer}}</data>

        <del class="del" value="69.00">${{$juice->price}}</del>
        <p class="price-text">:{{__('messages.price')}}</p>
      </div>

    </div>
 
</div>
@endforeach
</div>
@else
<h1 class="text-dark">{{__('messages.Sorryis notavalaible')}}</h1>
@endif

        </div>
      </section>

      <!-- 
        - #CTA
      -->

      <section class="section section-divider white cta" style="background-image: url('{{asset('uploads/food/image')}}/{{$ads->image}}')">
        <div class="container">

          <div class="cta-content">

            <h2 class="h2 section-title">
            {{__('messages.Our Restuarant Have Excellent Of')}}
              <span class="span">{{__('messages.Quality')}} {{$ads->name}}!</span>
            </h2>

            <p class="section-text">
             {{$ads->long_description}}
            </p>

            <a href="{{url('order-now')}}/{{$ads->id}}" class="btn btn-hover">{{__('messages.OrderNow')}}</a>
          </div>

          <figure class="cta-banner">
            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 cta-img  rounded-circle">

            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="216" height="226" loading="lazy"
              alt="get up to 50% off now" class="abs-img scale-up-anim  rounded-circle">
          </figure>

        </div>
      </section>

      <!-- 
        - #DELIVERY
      -->

    
      <section class="section section-divider gray banner">
        <div class="container">

          <ul class="banner-list">
          <li class="banner-item banner-lg">
              <div class="banner-card">

                <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="550" height="450" loading="lazy"
                  alt="Discount For Delicious Tasty Burgers!" class="banner-img">

                <div class="banner-item-content">
                  <p class="banner-subtitle">{{__('messages.50% Off Now')}}!</p>

                  <h3 class="banner-title">{{__('messages.Discount For Delicious')}} {{$ads->name}}</h3>

                  <p class="banner-text">{{__('messages.Sale off 50% only this week')}}</p>

                  <a href="{{url('order-now')}}/{{$ads->id}}" class="btn">{{__('messages.OrderNow')}}</a>
                </div>

              </div>
            </li>
            @foreach($lunchads as $ads)

            <li class="banner-item banner-sm">
              <div class="banner-card">

                <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="550" height="450" loading="lazy"
                  alt="Discount For Delicious Tasty Burgers!" class="banner-img">

                <div class="banner-item-content">
                  <p class="banner-subtitle">{{__('messages.50% Off Now')}}!</p>

                  <h3 class="banner-title">{{__('messages.Discount For Delicious')}}</h3>

                  <p class="banner-text">{{$ads->description}}</p>

                  <a href="{{url('order-now')}}/{{$ads->id}}" class="btn">{{__('messages.OrderNow')}}</a>
                </div>

              </div>
            </li>

          
@endforeach
          </ul>

        </div>
      </section>



      @include('frontend.layouts.footer')
  

      
