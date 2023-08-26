@extends('index')
@section('titel')
    Add product
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('userdashboard/style.css')}}">
<link rel="stylesheet" href="{{asset('userdashboard/swiperJs/swiper-bundle.min.css')}}">
@endpush
@section('content')
<form action="{{route('Products.store')}}" method="post">
@csrf
<section class="product-details">
    <div class="contanier">
        <div class="product-buy">
            <div class="img-product">
                
            </div>
            <div class="product-name-price">
                
                <div class="form-group">
                  <h3>Title </h3>
                    <input id="inputText1" type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <h3>Price </h3>
                      <input id="inputText2" type="number" class="form-control" name="price">
                  </div> 

                  
                <div class="form-group">
                    <h3>Category</h3>
                    <div class="form-group">
                        <select class="form-control" name="category_name">
                            <option value="smart phone">Smart Phone</option>
                        </select>
                    </div>
                  </div>
                  
                    <div class="stock-model">
                        <h3>Availability: 
                            <div class="custom-control custom-radio">
                                <input type="radio"   name ="availability" value="1" class="custom-control-input is-valid" id="customControlValidation3"  required="">
                                <label class="custom-control-label"   for="customControlValidation3">Available</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio"  name ="availability" value="0"  class="custom-control-input is-invalid" id="customControlValidation2"  required="">
                                <label class="custom-control-label"   for="customControlValidation2">Unavailable</label>
                            </div>

                        </h3>
                    </div>
                    
                    <div class="form-group">
                        <h3>Description </h3>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"  name="description" placeholder="description"></textarea>
                      </div>
                 
                      <div class="form-group">
                        <h3>Quantity </h3>
                    <input id="inputText3" type="number" class="form-control"  value="1" name="quantity">
                      </div>
                        
                      <button type="submit" class="btn btn-outline-dark">ADD Product</button>
                  
 
                
            </div>

        </div>

        <div class="details">
            <div class="section-head">
                <h4>Details</h4>
            </div>
        </div>
    </div>
</section>

   </form>

@endsection
