
<div class="header-bottom">
    <div class="contanier">
     <i id="open-side" class="fa-solid fa-bars"></i>
     <ul class="nav-links">
         
         <li><a href=".">Home</a></li>

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
     <div class="card">
         <a href="{{route('carts')}}" ><i class="fa-solid fa-bag-shopping"></i></a>
         <!-- Added <span> element here -->
         <span class="badge">{{count((array ) session('cart'))}}</span>
         <div class="price">
             <p>My Cart:</p>
         </div>
     </div>
    </div>
 </div>
