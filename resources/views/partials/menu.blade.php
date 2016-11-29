<div class="row">
    <div class="col-xs-12 header_menu">
        <ul>
            <li class="logo"><a href="/"><img src="img/logo.svg"></a></li>
            <li class="@if(Request::is('/')) active @endif"><a href="/">Accueil</a></li>
            <li class="@if(Request::is('hotel')) active @endif"><div class="header_separator"></div> <a href="{{url('hotel')}}">Hôtel</a></li>
            <li class="@if(Request::is('room')) active @endif" id="nav_rooms"><div class="header_separator"></div> <a href="{{url('room')}}">Chambres / Appartement</a></li>
            <li class="@if(Request::is('restaurant')) active @endif"><div class="header_separator"></div> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
            <li class="@if(Request::is('offers')) active @endif"><div class="header_separator"></div> <a target="_blank" href="https://sb.ghix.net/default.aspx?view=SuperBookingPackages&action=List&HotelID=2986959&Language=4">Offres / Packages</a></li>
            {{--<li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
            <li class="@if(Request::is('contact')) active @endif"><div class="header_separator"></div> <a href="{{url('contact')}}">Contact</a></li>
            {{--<li>--}}
            {{--<!--<div class="news_block_icon">-->--}}
            {{--<!--<img src="/img/news_block_icon.png">-->--}}
            {{--<!--</div>-->--}}
            {{--<!--<div class="news_block">-->--}}
            {{--<!--<p>depeches-vous</p>-->--}}
            {{--<!--<span>Il nous reste plus que 5 chambres</span>-->--}}
            {{--<!--</div>-->--}}
            {{--</li>--}}
        </ul>
        {{--<div class="header_rightside_btns">--}}
            {{--<a href="#" class="header_login_btn">Connexion</a>--}}
        {{--</div>--}}
    </div>
</div>