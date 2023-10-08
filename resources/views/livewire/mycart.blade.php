<div>
    <section class="cart">
      
        <form action="#">
            <div class="table-content">
               <table class="table"> 
                  @if (session('cart'))
                     <thead>
                        <tr>
                           <th class="product-thumbnail">Images</th>
                           <th class="cart-product-name">Product</th>
                           <th class="product-price">Unit Price</th>
                           <th class="product-quantity">Quantity</th>
                           <th class="product-subtotal">Total</th>
                           <th class="product-remove">Remove</th>
                        </tr>
                     </thead>
                     <tbody>
                    
                        
                     @foreach($cartItems as $item)
                     <tr>
                          
                              <td class="product-thumbnail"><a href="#"><img src="{{asset($item['image'])}}"  alt=""></a></td>
                              <td class="product-name"><a href="#">{{$item['title']}}</a></td>
                              <td class="product-price"><span class="amount">{{$item['price']}}</span></td>
                              <td class="product-quantity">
                                 <div class="cart-plus-minus">
                                     <button class="plus-button" wire:click.lazy="incrementQuantity({{ $item['id'] }})">+</button>
                                     <span>{{ $quantities[$item['id']] }}</span>
                                     <button class="minus-button" wire:click="decrementQuantity({{ $item['id'] }})">-</button>
                                 </div>
                              </td>
                 
                              <td calss="product-subtotal"><span class="amount">{{$item['price']* $quantities[$item['id']]}}</span></td>
                                <td><a href="{{route('removeCart',['id'=>$item['id']])}}" class="far fa-trash-alt"></a>   </td>      
                     
                         
                           
                        </tr>
                    @endforeach
                   
            </tbody>
            @else
        There are no more items in your cart 
    
           
            @endif       
         </table>
               </div>
               
               <div class="row contanier">
                  <div class="cart-page-total">
                     <h2>Cart Totals</h2>
                     <ul>
                        
                        <li>Subtotal :{{$total}} <span></span></li>
                        <li>Total :{{$total}}   <span></span></li>
                     </ul>
                     <a class="button" href="{{route('checkout')}}">Proceed to checkout</a>
                  </div>
               </div>
            </form>
   
         
         </section>

</div>