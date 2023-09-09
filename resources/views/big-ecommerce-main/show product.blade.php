<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>micro electric</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('userdashboard/main.css')}}" />


    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
    


</head>
<body class="buy-product-bag menu-side-in-bag">
    <header>

        <div class="header-top">
         @include('big-ecommerce-main.layouts.header')
        </div>
</header>

    <section class="product-details">
        <div class="contanier">
            <div class="product-buy">
                <div class="img-product">
                    <img id="big-img" src="{{asset('photos/'.$product->image->image[0])}}" alt="">

                    <div class="small-img">
                        @foreach ( $product->image->image as $image )
                        <img onclick="myProduct(this.src)" src="{{asset('photos/'.$image)}}" alt="">
                    
                     @endforeach
                  
                  
                    </div>
                </div>

                <div class="product-name-price">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Done!</strong> {{ session('success') }}!
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                  
                    @endif
                        <a class="product-item-link"> {{$product->title}}</a>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <div class="price">
                            <span>${{$product->price}}</span>
                            <del></del>
                        </div>
                        
                        <div class="stock-model">
                            <p>Avaailability: <span>{{$product->availability}}</span></p>
                        </div>
                        <p class="product-text">
                         
                        </p>

                        <h6>Hurry Up! Only {{$product->quantity}} products left in stock.</h6>

                        <form method="post">
                            @csrf
                            <input type="number"min="1" value="1" name="quantity" max="{{$product->quantity}}">
                        <a href="{{route('addToCart',['id'=>$product->id])}}" class="btn btn-outline-dark"> Add to Cart</a>
                        
                
                        </form>
                       
                        <ul class="product-action">
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-sliders"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-share-nodes"></i></a></li>
                        </ul>
                    
                </div>
    
            </div>

            <div class="details">
                <div class="section-head">
                    <h4>Details</h4>
                </div>

                <div class="details-content">
                    @foreach ($product->details as $key => $value )
                    <h3>{{$key}}: <span>{{$value}}</span></h3>                  
                  @endforeach
                </div>
            </div>
        </div>
    </section>

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

            <div class="card">
                <a href="#"><i class="fa-solid fa-bag-shopping"></i> <span class="total"></span></a>

                
            </div>
        </div>
    </section>
    
        @include('big-ecommerce-main.layouts.daily')
       

   
    <script src="{{asset('userdashboard/swiperJs/swiper-bundle.min.js')}}"></script>

    <!-- Linke File JS -->
    <script src="{{asset('userdashboard/main.js')}}"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const closeButtons = document.querySelectorAll(".alert .close");
        
        closeButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                const alert = this.closest(".alert");
                alert.style.display = "none";
            });
        });
    });
</script>
</html>