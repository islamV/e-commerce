<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>buy</title>

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
                        <select name="" id="">
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

    <section class="product-details">
        <div class="contanier">
            <div class="product-buy">
                <div class="img-product">
                    <img id="big-img" src="{{asset('photos/'.$product->image[0]->image[0])}}" alt="">

                    <div class="small-img">
                        <img onclick="myProduct(this.src)" src="{{asset('photos/'. $product->image[0]->image[0])}}" alt="">
                        <img onclick="myProduct(this.src)" src="{{asset('photos/'. $product->image[0]->image[1])}}" alt="">
                        <img onclick="myProduct(this.src)" src="{{asset('photos/'. $product->image[0]->image[2])}}" alt="">
                  
                    </div>
                </div>

                <div class="product-name-price">
                    
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
                            <del>$1000</del>
                        </div>
                        
                        <div class="stock-model">
                            <p>Avaailability: <span>{{$product->availability}}</span></p>

                            <p>SKU: <span>Samsung C49J89: £875, Debenhams Plus</span></p>

                        </div>
                        <p class="product-text">
                            {{$product->description}}
                        </p>

                        <h6>Hurry Up! Only {{$product->quantity}} products left in stock.</h6>

                        <form>
                            <input type="number" value="1"  min="1" max="{{$product->quantity}}">
                            <button>add to cart</button>
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
                    <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam iure tempora, quis quam optio eum quisquam velit ut, harum repellat, molestias fuga. Perspiciatis praesentium officia est repellat enim unde ab deleniti necessitatibus odio nesciunt vel animi, accusantium at laboriosam architecto saepe natus maiores dolorem maxime fugit. Ea molestias fugiat magnam.</p>
                    <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A, incidunt? Nam ipsum odio ipsa quia temporibus optio laboriosam aut, impedit veniam perferendis aliquid iste voluptate amet! Ipsum veniam architecto earum tempore pariatur distinctio laboriosam fugiat sit dolores ipsam. Tempore impedit quibusdam temporibus, animi quidem in deleniti quo aliquid? Quaerat sint enim explicabo quisquam corporis aliquid atque assumenda ducimus ipsa, iure tempora ad eius velit sunt, amet exercitationem excepturi. Ullam dolore officiis repellendus? Architecto recusandae iste earum iure soluta itaque ipsum.</p>
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

                <div class="price">
                    <p>My Cart:</p>
                    <span>$ 255.00</span>
                </div>
            </div>
        </div>
    </section>
    
        
       

   
    <script src="{{asset('userdashboard/swiperJs/swiper-bundle.min.js')}}"></script>

    <!-- Linke File JS -->
    <script src="{{asset('userdashboard/main.js')}}"></script>
</body>
</html>