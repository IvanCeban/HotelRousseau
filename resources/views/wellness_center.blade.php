@extends('layouts.main')

@section('title')
    Centre bien-etre / Loisirs
@stop

@section('styles')
    <link rel="stylesheet" href="/css/wellness_center.css">
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
                            <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                            <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                            {{--<li  class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
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
                    {{--<div class="col-xs-1">--}}
                        {{--<div id="close" style="height: 50px; width: 50px; background: brown; margin-top: 500px"></div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xs-push-7 col-xs-4">--}}
                        {{--<div class="sidebar_parent">--}}
                            {{--<div class="show_hide_sidebar_btn"></div>--}}
                            {{--<div class="right_sidebar_container">--}}
                                {{--<div class="right_sidebar">--}}
                                    {{--<img src="/img/restaurant/restaurant_right_sidebar_icon.png">--}}
                                    {{--<h3>Restaurant / Bar</h3>--}}
                                    {{--<p>Idéalement situé à deux pas du lac et de la gare centrale, ce nouvel hôtel 3*** vous offre un accès immédiat à la Vieille-Ville, au shopping, aux activités culturelles comme à la place financière.<br>--}}
                                       {{--<br>Ce chaleureux établissement de gestion familiale saura vous séduire par son accueil personnalisé et discret, son personnel prévenant et conviendra parfaitement tout à une clientèle d’affaires que de loisir. <br>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
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