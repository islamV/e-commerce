<div class="nav">

 @if (Route::has('login'))
 @auth
 <input type="checkbox" id="open_menu">
 <a href="#" class="card card_account">
     <img src="https://f.nooncdn.com/s/app/com/noon/icons/caret-down.svg" alt="">
     <label for="open_menu">
         <span class="card_title">
             <span class="account_name">!{{Auth::user()->name}}اهلا</span>
             <span class="profile">Account</span>
         </span>
     </label>
 </a>
 <div class="menu">
    <ul>
        @if(Route::has('login'))
        @if (Auth::user()->profile->role == "Admin")
          <li><a href="{{route('dashboard')}}"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
            <span>Dashboard</span></a></li>
        @endif


        <li><a href="{{route('profile.edit')}}"><img src="https://f.nooncdn.com/s/app/com/noon/icons/user_thin.svg">
                <span>Profile</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>
        <li><a href="#"> <img src="https://f.nooncdn.com/s/app/com/noon/icons/orders_menu_icon_v3.svg">
                <span>الاسم</span></a></li>\
@endif
    </ul>
    <a href="{{route('logout')}}" class="log_out">Log out</a>
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



    <a href="{{route('welcome')}}" class="card card_logo">

    </a>



</div>
