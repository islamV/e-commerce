
<section class="sale-sec contanier swiper mySwiper">

    <div class="section-head">
        <h4>On Sale <span>Products</span> </h4>
    </div>
    
    <div class="boxs swiper-wrapper">
@foreach ($products as $product )
    
<div class="box column product-item swiper-slide">
    
            <div class="product-btn">
                <ul class="product-action">
                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-print"></i></a></li>
                </ul>
            </div>

            <div class="div-img">
                <span class="discount"></span>
   @foreach ( $product->image->image as  $image)
   <img src="{{ asset('photos/' .$image) }}" class="img-product">
   @endforeach
        
            </div>
            <div class="content">
                <a href="{{route('show',['id'=>$product->id])}}?title={{$product->title}}" class="product-item-link"> {{$product->title}} </a>
                <div class="stars">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <div class="price">
                    <span>{{$product->price}}</span>
                    <del></del>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>

    
    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
    
</section>