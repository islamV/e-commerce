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

@else
<a href="{{ route('login') }}" class="card card_account">

    <span class="card_title">
        <span class="log_name">login</span>
    </span>
</a>

@if (Route::has('register'))

<a href="{{ route('register') }}" class="card card_account">
 
    <span class="card_title">
        <span class="log_name">Register</span>
    </span>
</a>
@endif
@endauth
@endif

<div class="menu">
    <ul>
 @if(Route::has('login'))
       
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
    <a href="#" class="card card_lang">
        <span class="card_title">English</span>
    </a>
    <input id="search" type="search" placeholder="انت بتدور على اى ؟" name="search">

    <a href="{{route('welcome')}}" class="card card_logo">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADUUlEQVR4nO2YXYhNURTHzzQGwwgzYQgxQ00kxYNSQyjlo8QDpZSUj0LKR0PIiCGPPHggDwwP4oHkRSMTUj5DifGVKJGGYpgP3J92s2+tOfY+59xz99wzcf91m+n+91rr/z/nnrPX2p6XRx55WAEsAO4A7XTiC7Dct+Yo0IF7tOva870sxJvQKNYUAym6FylgXhwDdw3JbHcgfYe6C7fjGJCiSr0cAygV9dsyDa4WwT+6TWUIVG2hozpqUCHwQATWewkBOC10KE2FUYLWiaDvwOicqDUAGAm0CD1rwgIGA59EwE4vYQC7hJ5moCxo8RGx+BXQN6dqDQD6AC+ErsO2hVXAT7FwsddDACwRupTGKtOiGrGowcAPB67qT3kMfgRwE7ih/o8R3yD01YT91vaFGNwRg98m+C0x4vcKfo/JwAqx4JKBP+OQX2/g6zOIX2UyUAH8Ev3HMsHNULuhSJAtP9lXe6Zv5w+KV9zEvwzohafoiqfAo4CGLQ5/RdTbBNwDfmcQf84oXicsUY0TdlwH7gfwt0L412pz0rUmGPg3vi7AD9VeD7QaEC1yraELPQD0BvoDJ3wzwDfgoI418a36uyGiziDgg+Y79G+8XMcfN8wY6iVTHCheJC/wBfey7NpTgSlAkYWfpj8DLHXKgOnKTEg3SiThNgNeAiAbDf+FATqfCReTWDtQl4QBl2NkWxIGnMJL0oCFl6/i2kxz4MBAevdLJWggFaQhzESjDr5m4dXmpNBq4WsC299oORqDNIQZUG3FLPXXwtfpHbjOwqvm8KX+VMTMURKk4d8GcEifSuzPQa1xwPOoe0TUpF/TDxAw27nqrrW2Ykdb3KQnRZJ3pjnV8R1osjmIm3Qo8FHkeai+c66+6wN7wZkBMerJvvwZMCl2QnudSn2B3N0BkXypYTjZrIYbB8L7Adv1yyINVWutMwO60CL9vpZ4C2xQE1TMM8/dwHtfzub0C0M8E01ZG9AJx1vmZXUEflGd9QBzgLFqGhNXeJg6hVCnDHrstA3xl4FRvgdb5ax0YkAnLQI26qvvCo+Bhc5ERjSihvvV+mrGgToyP6vvWEFOxRvMjAFWAsd086Xuzme9Abbo3/kT4Lw+HpyrTpwTFZ1HHnl4PQZ/AG++L+yC8knWAAAAAElFTkSuQmCC">
    </a>
</div>
