<section class="hero" id="home" style="background-image: url('{{asset('uploads/food/image')}}/{{$ads->image}}')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle text-primary">{{__('messages.Supper')}} {{$ads->name}}</p>

            <h2 class="h1 hero-title text-dark">{{__('messages.supperdelicious')}} {{$ads->name}} {{__('messages.intown')}}!</h2>

            <p class="hero-text text-dark">{{$ads->description}}</p>

            <a href="{{url('order-now')}}/{{$ads->id}}" class="btn">{{__('messages.OrderNow')}}</a>

          </div>

          <figure class="hero-banner">
            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="820" height="716" alt="" aria-hidden="true"
              class="w-100 hero-img-bg rounded-circle">

            <img src="{{asset('uploads/food/image')}}/{{$ads->image}}" width="700" height="637" loading="lazy" alt="Burger"
              class="w-100 hero-img rounded-circle">
          </figure>

        </div>
      </section>
