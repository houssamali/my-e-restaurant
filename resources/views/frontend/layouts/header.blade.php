<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>مطعم ومخبازة الراسني</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <!--<link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">--->
  
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
  
 

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="{{asset('assets/images/hero-banner.png')}}" media="min-width(768px)">
  <link rel="preload" as="image" href="{{asset('assets/images/hero-banner-bg.png')}}" media="min-width(768px)">
  <link rel="preload" as="image" href="{{asset('assets/images/hero-bg.jpg')}}">
  




</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo text-dark">{{__('messages.Al_rasni restuarant')}}<span class="span">.</span></a>
      </h1>


      



      <nav class="navbar" data-navbar>
        <ul class="navbar-list ">
        
          <li class="nav-item">
            <a href="{{Route('home')}}" class="navbar-link text-dark" data-nav-link>{{__('messages.home')}}</a>
          </li>
        


          
         
         

         

          <li class="nav-item">
            <a href="{{url('show-cart')}}" class="navbar-link text-dark" data-nav-link>
            
            {{__('messages.cart')}}({{Session::get('Cocart')}})</a>
          </li>

          <li class="nav-item">
            <a href="{{url('show-order')}}" class="navbar-link text-dark" data-nav-link>{{__('messages.order')}}({{Session::get('CoOrder')}})</a>
          </li>

          
          @if(Auth::check())
          <li class="nav-item">

          <a class="navbar-link text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{__('messages.logout')}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</li>
@else
<li class="nav-item">
            <a href="{{url('login')}}" class="navbar-link text-dark" data-nav-link>{{__('messages.login')}}</a>
          </li>

          <li class="nav-item">
            <a href="{{url('register')}}" class="navbar-link text-dark" data-nav-link>{{__('messages.register')}}</a>
          </li>
@endif

        </ul>
      </nav>


      <div class="header-btn-group">
        <button class="search-btn text-dark" aria-label="Search" data-search-btn>
          <ion-icon name="search-outline"></ion-icon>
</button>



        <button type="submit" class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
          <span class="line top"></span>
          <span class="line middle"></span>
          <span class="line bottom"></span>
        </button>
      </div>


    </div>
  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-container>
  <form action="{{url('search')}}" method="post">
  @csrf
    <div class="search-box">
      <input type="search" name="search" aria-label="Search here" placeholder="{{__('messages.Type keywords here')}}..."
        class="search-input">

      <button type="submit" class="search-submit" aria-label="Submit search" data-search-submit-btn>
        <ion-icon name="search-outline"></ion-icon>
      </button>
    </div>
    </form>
    <button class="search-close-btn" aria-label="Cancel search" data-search-close-btn></button>
    
  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

     



