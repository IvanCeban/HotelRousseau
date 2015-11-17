@extends('layouts.main')

@section('title')
    Restaurant / Bar
@stop

@section('styles')
    <link rel="stylesheet" href="/css/restaurant.css">
@stop

@section('scripts')

@stop

@section('content')

    <!--header START-->
     <section class="header">
        <div class="main_container">
            <div class="row">
                {{--<div class="col-xs-6">--}}
                    {{--<div class="logo">--}}
                        {{--<a href="/"><img src="img/logo.jpg"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-xs-6 languages">
                    <!--<ul>-->
                        <!--<li class="active"><a href="#">FR</a></li>-->
                        <!--<li><a href="#">EN</a></li>-->
                    <!--</ul>-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 header_menu">
                    <div class="logo">
                        <a href="/"><img src="img/logo.png"></a>
                    </div>
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('hotel')}}">Hôtel</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                        {{--<li ><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('contact')}}">Contact</a></li>
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
                    <div class="header_rightside_btns">
                        <a href="#" class="header_login_btn">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header END-->

    <!--main content START-->
        {{--<section class="main_section">--}}
            {{--<div class="main_container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12">--}}
                        {{--<div class="page-wrap">--}}
                          {{--<header>--}}
                            {{--<a href="#main-navigation">Menu</a>--}}
                            {{--<h1>Title</h1>--}}
                          {{--</header>--}}

                          {{--<!-- content -->--}}
                        {{--</div>--}}
                        {{--<nav id="main-navigation" class="navigation">--}}
                           {{--<a href="#">Nav Links</a>--}}
                           {{--<!-- more -->--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section class="main_section">
            <div class="main_container">
                <div class="row">
                    <div class="col-xs-push-8 col-xs-4">
                        <div class="sidebar_parent">
                            <div class="show_hide_sidebar_btn"></div>
                            <div class="right_sidebar_container">
                                <div class="show_hide_sidebar_btn"></div>
                                <div class="right_sidebar">
                                    <img class="page_icon" src="/img/restaurant/restaurant_right_sidebar_icon.png">
                                    <h3>Restaurant / Bar</h3>
                                    <p>
                                        Découvrez notre nouveau concept "Les 3 palettes 20/20".<br><br>
                                        Dans une ambiance feutrée, conviviale et une atmosphère détendue savourez, dans notre restaurant Wine-bar au
                                        design contemporain, des compositions idéalement conçues pour faire vite et très bien.
                                    </p>
                                    <ul class="our_specials">
                                        <li><img src="/img/restaurant/food_icons/hamburger.png"><span> - hamburger</span></li>
                                        <li><img src="/img/restaurant/food_icons/pizza.png"><span> - flammekueche</span></li>
                                        <li><img src="/img/restaurant/food_icons/salad.png"><span> - salade chaud-froid</span></li>
                                        <li><img src="/img/restaurant/food_icons/tartar.png"><span> - tartare</span></li>
                                    </ul>
                                    <ul class="hotel_services additional">
                                        <li><img src="/img/offers/offers_icons/common_checked.png"><span> Palette de 3 verres (3x1dl) pour la dégustation de bières artisanales les Brasseurs Genève. </span></li>
                                        <li><img src="/img/offers/offers_icons/common_checked.png"><span> Palette de 3 verres (3x1dl) pour la dégustation de vins (blancs, rosés ou rouges).</span></li>
                                        <li><img src="/img/offers/offers_icons/common_checked.png"><span> 20 mets à Frs 20.- servis sur palettes : 5 Flammekueches (tartes flambées) moitié-moitié. </span></li>
                                    </ul>
                                    <p>
                                        « Choisissez votre formule en toute simplicité » dans le plaisir et pour un moment d’évasion assuré.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--main content END-->

    <!--footer START-->
    <section class="footer">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="copyright">&copy; 2015 Hotel Rousseau</li>
                        {{--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Plan du site</a></li>--}}
                        {{--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Mentions legales</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--footer END-->
@stop