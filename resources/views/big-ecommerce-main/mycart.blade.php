<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>micro electric</title>

    <link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('userdashboard/main.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 
    <!-- Link File CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
</head>

<body class="menu-side-in-bag">
   @livewireStyles
    
    <header>
    <div class="header-top">
         @include('big-ecommerce-main.layouts.header')
           </div>

</header>

<section class="slide-sec contanier">
    <div id="side-bar" class="side-bar">
        <h5><i class="fa-solid fa-bars"></i> SHOP BY DEPARTMENT</h5>
        <img class="logo-slide" src="img/logo-black.png" alt="">
        <i id="btn-close" class="fa-solid fa-bars fa-times"></i>
        <ul class="side-links">
            <a href="#"><li>All categories</li></a>
            <a href="#"><li>best seller products</li></a>
            <a href="#"><li>top 10 offers</li></a>
            <a href="#"><li>new arrivals</li></a>
            <a href="#"><li>phones & tablets</li></a>
            <a href="#"><li>Electronics & digital</li></a>
            <a href="#"><li>Fashion & Clothings</li></a>
            <a href="#"><li>jewelry & watches</li></a>
            <a href="#"><li>health & beauty</li></a>
            <a href="#"><li>TV & audio</li></a>

        </ul>
</section>
@livewire('mycart')
    <footer>
      @include('big-ecommerce-main.layouts.footer')
    </footer>

    <script src="{{asset('userdashboard/swiperJs/swiper-bundle.min.js')}}"></script>

    <!-- Linke File JS -->
    <script src="{{asset('userdashboard/main.js')}}"></script>
 @livewireScripts
</body>

</html>