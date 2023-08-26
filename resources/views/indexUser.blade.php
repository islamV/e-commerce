<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Micro electric</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
    <link rel="stylesheet" href="{{asset('userdashboard/main.css')}}">
</head>
<body>

    <header>
        @include('big-ecommerce-main.layouts.header')
        @include('big-ecommerce-main.layouts.slide')
    </header>
 @yield('content')
 @include('big-ecommerce-main.layouts.footer')
    <!-- Swiper JS -->
    <script src="{{asset('userdashboard/swiperJs/swiper-bundle.min.js')}}"></script>

    <!-- Linke File JS -->
    <script src="{{asset('userdashboard/main.js')}}"></script>

</body>
</html>