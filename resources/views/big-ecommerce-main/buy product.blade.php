@extends('indexUser')  
@section('content')
    <section class="product-details">
        <div class="contanier">
            <div class="product-buy">
                <div class="img-product">
                    <img id="big-img" src="img/product-9.jpg" alt="">

                    <div class="small-img">
                        <img onclick="myProduct(this.src)" src="img/product-9.jpg" alt="">
                        <img onclick="myProduct(this.src)" src="img/product-5.jpg" alt="">
                        <img onclick="myProduct(this.src)" src="img/product-3.jpg" alt="">
                        <img onclick="myProduct(this.src)" src="img/product-12.jpg" alt="">
                    </div>
                </div>

                <div class="product-name-price">
                    
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
                        
                        <div class="stock-model">
                            <p>Avaailability: <span>In Stock</span></p>

                            <p>SKU: <span>Samsung C49J89: £875, Debenhams Plus</span></p>

                        </div>
                        <p class="product-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates adipisci, fugit non minus iusto dolore soluta commodi saepe aut porro laudantium tempore perspiciatis suscipit cum autem natus, nisi, quisquam libero quidem. Nobis tenetur quam maxime dignissimos iure voluptas blanditiis odit dolore aut! Ipsa, nesciunt suscipit? Consequuntur repellendus similique ipsa sequi?
                        </p>

                        <h6>Hurry Up! Only 98 products left in stock.</h6>

                        <form>
                            <input type="number" value="1">
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
    

    <section class="sale-sec contanier swiper mySwiper">

        <div class="section-head">
            <h4>Best Selling <span>Products</span> </h4>
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
                <p>Copyright &copy; <span>Topico. </span>All Rights Reserved <span>Simple Web Code</span></p>
            <div class="payment">
                <img src="img/payment-1.png" alt="">
                <img src="img/payment-2.png" alt="">
                <img src="img/payment-3.png" alt="">
                <img src="img/payment-4.png" alt="">
            </div>
            </div>
        </div>
    </footer>

 @endsection