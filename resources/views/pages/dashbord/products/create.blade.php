@extends('index')
@section('titel')
    Add product
 @push('css')
    <link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
    <link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}">
    @livewireStyles
 @endpush
@endsection
@section('content')
<div>
    <form action="{{ route('Products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="product-details">
            <div class="contanier">
                <div class="product-buy">

                    <div class="product-name-price">

                        <div class="form-group">
                            <h3>Title </h3>
                            <input id="inputText1" type="text" value="{{old('title')}}" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <h3>Price </h3>
                            <input id="inputText2" type="number" class="form-control" name="price" value="{{old('price')}}">
                        </div>
                        @livewire('category')

                        <div class="stock-model">
                            <h3>Availability:
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="availability" value="1"
                                        class="custom-control-input is-valid" id="customControlValidation3"
                                        required="">
                                    <label class="custom-control-label" for="customControlValidation3">Available</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="availability" value="0"
                                        class="custom-control-input is-invalid" id="customControlValidation2"
                                        required="">
                                    <label class="custom-control-label"
                                        for="customControlValidation2">Unavailable</label>
                                </div>

                            </h3>
                        </div>

                        <div class="form-group">
                            <h3>Description </h3>
                            <textarea  class="form-control" id="exampleFormControlTextarea1" rows="10" name="description"
                                placeholder="description"></textarea>
                        </div>

                        <div class="form-group">
                            <h3>Quantity </h3>
                            <input id="inputText3" type="number" value="{{old('quantity')}}" class="form-control" value="1" name="quantity">
                        </div>
                        <h3>Product photos</h3>
                        <div class="custom-file mb-3">
                            <input type="file" name="image[]" multiple class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">images</label>
                            <p>insert one or more photos</p>
                        </div>
                        {{-- <div class="custom-file mb-3">
                                <input type="file" name="image2" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">image 2</label>
                                
                            </div>     
                            <div class="custom-file mb-3">
                                <input type="file" name="image3" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">image 3</label>    
                            </div> --}}
                        <button type="submit" class="btn btn-outline-dark">ADD Product</button>



                    </div>

                </div>

                
            </div>
        </section>

    </form>
</div>

@endsection
@push('js')
    @livewireScripts
@endpush