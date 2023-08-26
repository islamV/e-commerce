<div class="nav">
    
    <a href="#" class="card card_link">
        <img src="https://f.nooncdn.com/s/app/com/noon/icons/cart.svg" alt="">
        <span class="card_title">عربة التسوق</span>
    </a>

    <a href="#" class="card card_fov">
        <img src="https://f.nooncdn.com/s/app/com/noon/icons/wishlist.svg" alt="">
        <span class="card_title">المفضلة</span>
    </a>
 @if (Route::has('login'))
 @auth
 <input type="checkbox" id="open_menu">
 <a href="#" class="card card_account">
     <img src="https://f.nooncdn.com/s/app/com/noon/icons/caret-down.svg" alt="">
     <label for="open_menu">
         <span class="card_title">
             <span class="account_name">!{{Auth::user()->name}}اهلا</span>
             <span class="profile">حسابى</span>
         </span>
     </label>
 </a>
 <div class="menu">
    <ul>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
    </ul>
    <a href="{{route('login')}}" class="log_out">Log out</a>
</div>
@else

<a href="{{ route('login') }}" class="card card_account">
    <img src="https://f.nooncdn.com/s/app/com/noon/icons/user_thin.svg" alt="">
    <span class="card_title">
        <span class="log_name">login</span>
    </span>
</a>

@if (Route::has('register'))
   
<a href="{{ route('register') }}" class="card card_account">
    <img src="https://f.nooncdn.com/s/app/com/noon/icons/user_thin.svg" alt="">
    <span class="card_title">
        <span class="log_name">Register</span>
    </span>
</a>
@endif
@endauth
@endif
 

    <a href="#" class="card card_lang">
        <span class="card_title">English</span>
    </a>

    <input id="search" type="search" placeholder="انت بتدور على اى ؟" name="search">



    <a href="#" class="card card_logo">
        <img src="img/default.svg" alt="">
    </a>

    

</div>