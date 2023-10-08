<section class="deals contanier swiper mySwiper">

    <div class="section-head">
        <h4>Deals <span>of the day</span> </h4>
    </div>
    <div class="boxs swiper-wrapper">
      @foreach ($products as $product )
    


<div class="box product-item swiper-slide">

    <div class="product-btn">
        <ul class="product-action">
            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="{{route('addToCart',['id'=>$product->id])}}"><i class="fa-solid fa-cart-arrow-down"></i></a></li>
        </ul>
    </div>

    <div class="div-img">
        {{-- <span class="discount"></span> --}}
        
        <img src=" {{ asset('photos/' . $product->image->image[0]) }}" class="img-product">
        <img src="{{ asset('photos/' . $product->image->image[1]) }}" class="hover-img">
    </div>
    <div class="content">
        <a href="{{route('show',['id'=>$product->id])}}?title={{$product->title}}" class="product-item-link"> {{ $product->title }}</a>
        <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <div class="price">
            <span> ${{ $product->price }}</span>
            <del></del>
        </div>
        <p class="product-parg"> {{ $product->description }}</p>
        <h4>Hurry Up! Offer ends in:</h4>


        <ul class="countdown">
            <li><span>0</span> Days</li>
            <li><span>3</span> Hours</li>
            <li><span>11</span>Mins</li>
            <li><span>32</span>Sec</li>
        </ul>

    </div>
</div>

@endforeach

    </div>

    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
</section>
