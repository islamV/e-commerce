@extends('index')
@push('css')
<link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
@endpush
@section('content')
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
                <a class="product-item-link">{{$product->title}}</a>
                
                  
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
@endsection
@push('js')
<script src="{{ asset('userdashboard/main.js') }}"></script>
<script src="{{ asset('userdashboard/swiperJs/swiper-bundle.min.js') }}"></script>
@endpush