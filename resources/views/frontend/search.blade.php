@include('frontend.layouts.header')


<section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Your Search is Dishes</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">{{$search->name}}</span>
          </h2>

         
            <div class="row">
                <div class="col-md-3">
          
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$search->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a href="{{url('order-now')}}/{{$search->id}}" class="btn food-menu-btn">View</a>
                </div>
                <div class="wrapper">
                  <p class="category">{{$search->name}}</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>
               
                <h3 class="h3 card-title">{{$search->description}}</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">${{$search->offer}}</data>

                  <del class="del" value="69.00">${{$search->price}}</del>

                </div>

              </div>
              

</div></div>
</div>
</section>






<section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Related Dishes to Your Search</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">{{$search->name}}</span>
          </h2>

          <div id="breakfast" class=" owl-one owl-carousel  owl-theme">
            @foreach($foods as $public)
          <div class="item">
              <div class="food-menu-card">
              
                <div class="card-banner">
                  <img src="{{asset('uploads/food/image')}}/{{$public->image}}" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100 rounded-circle">

                  <div class="badge">-15%</div>

                  <a href="{{url('order-now')}}/{{$public->id}}" class="btn food-menu-btn">View</a>
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

                  <p class="price-text">Price:</p>

                  <data class="price">${{$public->offer}}</data>

                  <del class="del" value="69.00">${{$public->price}}</del>

                </div>

              </div>
              
</div>
@endforeach
</div>

</div>
</section>



@include('frontend.layouts.footer')