@extends('index')
@push('css')
<link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
@endpush
@section('content')
<section class="product-details">
    <div class="container">
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
                <a class="product-item-link">{{$product->title}}</a>


                    <div class="price">
                        <span>${{$product->price}}</span>
                        <del>$1000</del>
                    </div>

                    <div class="stock-model">
                        <p>Availability: <span>{{$product->availability}}</span></p>

                        <p>SKU: <span>Samsung C49J89: £875, Debentures Plus</span></p>

                    </div>
                    <p class="product-text">
                        {{$product->description}}
                    </p>

                    <h6>Hurry Up! Only {{$product->quantity}} products left in stock.</h6>


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
@endsection
@push('js')
<script src="{{ asset('userdashboard/main.js') }}"></script>
<script src="{{ asset('userdashboard/swiperJs/swiper-bundle.min.js') }}"></script>
@endpush
