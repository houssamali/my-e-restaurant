


<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>Dashboard</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />


<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->


<link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.0.4')}}" rel="stylesheet" />
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />


  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    @include('backend.layouts.header')

    
 


 <main class="main-content border-radius-lg ">
        <!-- Navbar -->

@include('backend.layouts.navbar')
<!-- End Navbar -->


        


<div class="container-fluid py-4">
       @yield('content')       
</div>

@include('backend.layouts.footer')
 
