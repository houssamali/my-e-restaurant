@include('frontend.layouts.header')


<section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">{{__('messages.populardishes')}}</p>

          <h2 class="h2 section-title">
          {{__('messages.ourdelicious')}} <span class="span">Food</span>
          </h2>

          <div id="breakfast" class=" owl-one owl-carousel  owl-theme">
            @foreach($foods as $food)
          <div class="item">
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$food->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a href="{{url('order-now')}}/{{$food->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
                </div>
                <div class="wrapper">
                  <p class="category">{{$food->name}}</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
               
                <h3 class="h3 card-title">{{$food->description}}</h3>

                <div class="price-wrapper">

                 

                  <data class="price">${{$food->offer}}</data>

                  <del class="del" value="69.00">${{$food->price}}</del>
                  <p class="price-text">:{{__('messages.price')}}</p>

                </div>

              </div>
              
</div>
@endforeach
</div>

</div>
</section>












<section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">{{__('messages.populardishes')}}</p>

          <h2 class="h2 section-title">
          {{__('messages.ourdelicious')}} <span class="span">Foods</span>
          </h2>

          <div id="breakfast" class=" owl-one owl-carousel  owl-theme">
            @foreach($publics as $public)
          <div class="item">
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$public->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a href="{{url('order-now')}}/{{$public->id}}" class="btn food-menu-btn">{{__('messages.view')}}</a>
                </div>
                <div class="wrapper">
                  <p class="category">{{$public->name}}</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
               
                <h3 class="h3 card-title">{{$public->description}}</h3>

                <div class="price-wrapper">

                  

                  <data class="price">${{$public->offer}}</data>

                  <del class="del" value="69.00">${{$public->price}}</del>

                  <p class="price-text">{{__('messages.price')}}</p>

                </div>

              </div>
              
</div>
@endforeach
</div>

</div>
</section>



@include('frontend.layouts.footer')