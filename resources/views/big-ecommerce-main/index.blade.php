<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TOPICO</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Link File CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
    
</head>
<body>

    <header>

            <div class="header-top">
               <div class="contanier">
                <p>Welcome to Worldwide Electronics Store</p>
                <div class="link-top-heder">
                    <a href="{{route('profile.edit')}}">My Account</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Compare</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                      {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
                
            </div>
               </div>

            <div class="header-info">
                <div class="contanier">
                    <img src="img/logo-black.png" alt="">
                
                <div class="search-bar">
                    <form action="">
                        <input type="search" placeholder="Search For Products...">
                        <button class="btn-srch">Search</button>
                    </form>
                </div>
                <div class="card">
                    <a href="mycart.html"><i class="fa-solid fa-bag-shopping"></i> <span class="total"></span></a>

                    <div class="price">
                        <p>My Cart:</p>
                        <span>$ 255.00</span>
                    </div>
                </div>
                </div>
            </div>

            <div class="header-bottom">
               <div class="contanier">
                <i id="open-side" class="fa-solid fa-bars"></i>
                <ul class="nav-links">
                    
                    <li><a href="index.html">Home</a></li>

                    <li>
                        <a href="features.html">Features</a>
                    </li>

                    <li><a href="about.html">about us</a></li>
                    <li><a href="contact.html">contact</a></li>

                </ul>

                <div class="headr-bottom-right">
                        <div class="currency">
                            <select>
                                <option value="">USD</option>
                                <option value="">EUR</option>
                                <option value="">SAR</option>
                                <option value="">PKR</option>
                            </select>
                        </div>

                        <div class="lnag">
                            <select class="btn-drob" name="" id="">
                                <option value="">English</option>
                                <option value="">Germany</option>
                                <option value="">Arabic</option>
                                <option value="">Pakistan</option>
                            </select>
                        </div>
                </div>
               </div>
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

            <div class="card">
                <a href="#"><i class="fa-solid fa-bag-shopping"></i> <span class="total"></span></a>

                <div class="price">
                    <p>My Cart:</p>
                    <span>$ 255.00</span>
                </div>
            </div>
        </div>


        <div class="slide">
            <div class="slide-swp swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide1">
                        <img src="img/slider-01.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <img src="img/slider-02.jpg" alt="">
                    </div>
                    <div class="swiper-slide swiper-slide3">
                        <img src="img/slider-03.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </section>

    <div class="features contanier">
        <div class="boxs">
            <div class="box">
                <img src="img/features1.png" alt="">
                <div class="content">
                    <h6>Free Shipping</h6>
                    <p>Free Shipping On All Order</p>
                </div>
            </div>

            <div class="box">
                <img src="img/features2.png" alt="">
                <div class="content">
                    <h6>Money Guarantee</h6>
                    <p>30 Day Money Back Guarantee</p>
                </div>
            </div>

            <div class="box">
                <img src="img/features3.png" alt="">

                <div class="content">
                    <h6>Online Support 24/7</h6>
                    <p>Technical Support Stand By</p>
                </div>
            </div>

            <div class="box">
                <img src="img/features4.png" alt="">

                <div class="content">
                    <h6>Secure Payment</h6>
                    <p>All Payment Method are accepted</p>
                </div>
            </div>

            <div class="box">
                <img src="img/features5.png" alt="">

                <div class="content">
                    <h6>Member Discount</h6>
                    <p>Upto 40% Discount All Products</p>
                </div>
            </div>
        </div>
    </div>

    <div class="banner contanier">
        <div class="boxs">
            <div class="box">
                <a href="buy product.html"><img src="" alt="">
                    <span class="glass-hover"></span></a>
                
            </div>
            <div class="box">
                <a href="buy product.html"><img src="img/banner-2.jpg" alt="">
                    <span class="glass-hover"></span>
                </a>
            </div>
            <div class="box">
                <a href="buy product.html"><img src="img/banner-3.jpg" alt="">
                    <span class="glass-hover"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="deals contanier swiper mySwiper">

        <div class="section-head">
            <h4>Deals <span>of the day</span> </h4>
        </div>
        <div class="boxs swiper-wrapper">

            <div class="box product-item swiper-slide">
                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-3.jpg" class="img-product">
                    <img src="img/product-2.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
                    <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                    <h4>Hurry Up! Offer ends in:</h4>

                    
                    <ul class="countdown">
                        <li><span>0</span> Days</li>
                        <li><span>19</span> Hours</li>
                        <li><span>54</span>Mins</li>
                        <li><span>39</span>Sec</li>
                    </ul>
                    
                </div>
            </div>

            <div class="box product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>

                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-9.jpg" class="img-product">
                    <img src="img/product-8.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
                    <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                    <h4>Hurry Up! Offer ends in:</h4>

                    
                    <ul class="countdown">
                        <li><span>0</span> Days</li>
                        <li><span>3</span> Hours</li>
                        <li><span>11</span>Mins</li>
                        <li><span>32</span>Sec</li>
                    </ul>
                    
                </div>
            </div>


            <div class="box product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>

                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-7.jpg" class="img-product">
                    <img src="img/product-2.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
                    <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                    <h4>Hurry Up! Offer ends in:</h4>

                    
                    <ul class="countdown">
                        <li><span>0</span> Days</li>
                        <li><span>15</span> Hours</li>
                        <li><span>9</span>Mins</li>
                        <li><span>40</span>Sec</li>
                    </ul>
                    
                </div>
            </div>


            <div class="box product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>


                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-6.jpg" class="img-product">
                    <img src="img/product-15.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a href="buy product.html" class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
                    <p class="product-parg">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                    <h4>Hurry Up! Offer ends in:</h4>

                    
                    <ul class="countdown">
                        <li><span>0</span> Days</li>
                        <li><span>23</span> Hours</li>
                        <li><span>40</span>Mins</li>
                        <li><span>19</span>Sec</li>
                    </ul>
                    
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-btn"></div>
        <div class="swiper-button-prev swiper-btn"></div>
    </section>

    <section class="sale-sec contanier swiper mySwiper">

        <div class="section-head">
            <h4>On Sale <span>Products</span> </h4>
        </div>
        
        <div class="boxs swiper-wrapper">

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>

                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-8.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-2.jpg" class="img-product">
                    <img src="img/product-9.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-3.jpg" class="img-product">
                    <img src="img/product-10.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-4.jpg" class="img-product">
                    <img src="img/product-8.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-9.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-12.jpg" class="img-product">
                    <img src="img/product-3.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-1.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-14.jpg" class="img-product">
                    <img src="img/product-6.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-7.jpg" class="img-product">
                    <img src="img/product-11.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>

            <div class="box column product-item swiper-slide">

                <div class="product-btn">
                    <ul class="product-action">
                        <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                        <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                    </ul>
                </div>
                <div class="div-img">
                    <span class="discount">34%</span>
                    <img src="img/product-15.jpg" class="img-product">
                    <img src="img/product-16.jpg" class="hover-img">
                </div>
                <div class="content">
                    <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="price">
                        <span>$120.00</span>
                        <del>$125.00</del>
                    </div>
        
                </div>
            </div>


        </div>

        
        <div class="swiper-button-next swiper-btn"></div>
        <div class="swiper-button-prev swiper-btn"></div>

    </section>

    <div class="banner2 contanier">
        <div class="boxs">
            <div class="box">
                <a href="#"><img src="img/banner-4.jpg" alt="">
                    <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-5.jpg" alt="">
                    <span class="glass-hover"></span></a>
            </div>
        </div>
    </div>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4>Computer & Desktop <span>Products</span> </h4>
        </div>
        
        <div class="cont">
            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-1.jpg" alt=""></a>
            </div>
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-8.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                      
                            <img src="img/product-1.jpg" class="img-product">
                            <img src="img/product-15.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">

                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                         
                            <img src="img/product-7.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-2.jpg" class="img-product">
                            <img src="img/product-6.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-11.jpg" class="img-product">
                            <img src="img/product-1.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-5.jpg" class="img-product">
                            <img src="img/product-16.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>
            
        </div>

    </section>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4>Phones & Tablets <span>Products</span> </h4>
        </div>
        
        <div class="cont">
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-1.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                          
                            <img src="img/product-4.jpg" class="img-product">
                            <img src="img/product-14.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                    
                            <img src="img/product-7.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                        
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-1.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                           
                            <img src="img/product-9.jpg" class="img-product">
                            <img src="img/product-13.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-14.jpg" class="img-product">
                            <img src="img/product-5.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                     
                            <img src="img/product-13.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                          
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-6.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>

            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-2.jpg" alt=""></a>
            </div>
            
        </div>

    </section>

    <section class="slide-with-img contanier">

        <div class="section-head">
            <h4>Computer & Desktop <span>Products</span> </h4>
        </div>
        
        <div class="cont">
            <div class="img-with-slide">
                <a href="#"><img src="img/banner-sm-3.jpg" alt=""></a>
            </div>
            <div class="swip-with-img swiper mySwiper">
                <div class="boxs swiper-wrapper">

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                         
                            <img src="img/product-15.jpg" class="img-product">
                            <img src="img/product-5.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-8.jpg" class="img-product">
                            <img src="img/product-12.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-11.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-3.jpg" class="img-product">
                            <img src="img/product-2.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-9.jpg" class="img-product">
                            <img src="img/product-11.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-14.jpg" class="img-product">
                            <img src="img/product-4.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-5.jpg" class="img-product">
                            <img src="img/product-7.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>

                    <div class="box column product-item swiper-slide">
                        <div class="product-btn">
                            <ul class="product-action">
                                <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                            </ul>
                        </div>
                        <div class="div-img">
                            
                            <img src="img/product-4.jpg" class="img-product">
                            <img src="img/product-9.jpg" class="hover-img">
                        </div>
                        <div class="content">
                            <a class="product-item-link"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="price">
                                <span>$120.00</span>
                                <del>$125.00</del>
                            </div>
                
                        </div>
                    </div>
        
        
                </div>

                <div class="swiper-button-next swiper-btn"></div>
                <div class="swiper-button-prev swiper-btn"></div>
            </div>
            
        </div>

    </section>
    
    <div class="banner contanier">
        <div class="boxs">
            <div class="box">
                <a href="#"><img src="img/banner-6.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-7.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
            <div class="box">
                <a href="#"><img src="img/banner-8.jpg" alt="">
                <span class="glass-hover"></span></a>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="contanier">
            <div class="subscribe-content">
                <img src="img/icon_email.png" alt="">
                <div class="text">
                    <h4>Sign Up To Newsletter</h4>
                    <p>Get email updates about our latest shop...and receive </p>
                    <span>$30 Coupon For First Shopping</span>
                </div>
            </div>
            <div class="subscribe-form">
                    <form action="">
                        <input type="search" placeholder="Enter your email heare...">
                        <button class="btn-srch">SUBSCRIBE</button>
                    </form>
            </div>
        </div>
    </div>

    <div class="back-top">
        <a href="#">Back to top</a>
    </div>

    <footer>
        <div class="contanier">
            <div class="top-footer">
                <div class="row">
                    <img src="img/logo-white.png" alt="">
                    <div class="hotline">
                        <i class="fa-solid fa-headset"></i>
                        <div class="hotline-text">
                            <h6>Hotline Free 24/24:</h6>
                            <span>(+100) 123 456 7890</span>
                        </div>
                    </div>
                    <p>Add: Roma Street 90, Egypt</p>
                        <p>Email: info@mahmoudreda.com</p>
                    <p>Fax: (+300) 123 456 7890 - (+200) 321 654 7891</p>
                </div>
                <div class="small-row">
                    <h6>Information</h6>
                    <div class="links-row">
                        <a href="#">Custom Service</a>
                        <a href="#">F.A.Q.’s</a>
                        <a href="#">Ordering Tracking</a>
                        <a href="#">Contacts</a>
                        <a href="#">Events</a>
                        <a href="#">Popular</a>
                    </div>
                </div>

                <div class="small-row">
                    <h6>Our Services</h6>
                    <div class="links-row">
                        <a href="#">Sitemap</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Your Account</a>
                        <a href="#">Advanced Search</a>
                        <a href="#">Terms & Condition</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>

                <div class="small-row">
                    <h6>My Account</h6>
                    <div class="links-row">
                        <a href="#">About us</a>
                        <a href="#">Delivery Information</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Discount</a>
                        <a href="#">Custom Service</a>
                        <a href="#">Terms & Condition</a>
                    </div>
                </div>

                
                <div class="small-row">
                    <h6>Payment & Shipping</h6>
                    <div class="links-row">
                        <a href="#">Terms Of Use</a>
                        <a href="#">Payment Methods</a>
                        <a href="#">Shipping Guide</a>
                        <a href="#">Locations We Ship To</a>
                        <a href="#">Estimated Delivery Time</a>
                        <a href="#">Express</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="bottom-footer">
            <div class="contanier">
                <p>Copyright &copy; <span>Topico. </span>Powered by <span>Mahmoud Reda</span></p>
            <div class="payment">
                <img src="img/payment-1.png" alt="">
                <img src="img/payment-2.png" alt="">
                <img src="img/payment-3.png" alt="">
                <img src="img/payment-4.png" alt="">
            </div>
            </div>
        </div>
    </footer>


</body>
</html>