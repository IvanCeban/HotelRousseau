@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker-bs3.css" />
@stop

@section('scripts')

    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/2.9.0/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker.js"></script>
    <script src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="/js/angular/registration.js"></script>

    <script type="text/javascript">
        $(function() {
            $('input[name="daterange1"]').daterangepicker();
            $('input[name="daterange2"]').daterangepicker();
        });
    </script>
@stop


@section('content')
    <!--header START-->
    <section class="header">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo">
                        <a href="/"><img src="img/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-xs-6 languages">
                    {{--<ul>--}}
                        {{--<li class="active"><a href="#">FR</a></li>--}}
                        {{--<li><a href="#">EN</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 header_menu">
                    <ul>
                        <li class="active"><a href="/">Accueil</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('hotel')}}">Hotel</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Lousiris</a></li>
                        <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('contact')}}">Contact</a></li>
                        <li>
                            {{--<div class="news_block_icon">--}}
                                {{--<img src="/img/news_block_icon.png">--}}
                            {{--</div>--}}
                            {{--<div class="news_block">--}}
                                {{--<p>depeches-vous</p>--}}
                                {{--<span>Il nous reste plus que 5 chambres</span>--}}
                            {{--</div>--}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--header END-->

    <!--middle section START-->
    <section class="middle">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="search_block closed">
                        <div class="search_block_header">
                            <h1>Reservation en ligne</h1>
                            <img src="/img/homepage/search_block_arrow.png">
                        </div>
                        <div class="search_block_line"></div>
                        <form name="registrationForm" ng-app="registrationApp" ng-controller="registrationCtrl" novalidate method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="daterange1" value="05/23/2015 - 05/31/2015" />
                                    <input type="text" name="daterange2" value="05/23/2015 - 05/31/2015" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 date_of_coming">
                                    <p>Date de debut</p>
                                    <input type="date" name="in">
                                </div>
                                <div class="col-xs-6 date_of_leaving">
                                    <p>Date de fin</p>
                                    <input type="date" name="out">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 num_of_adults">
                                    <p>Adultes</p>
                                    <select name="adultes">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 num_of_kids">
                                    <p>Enfants</p>
                                    <select name="kids">
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search_block_separator_line"></div>
                            <div class="row">
                                <div class="col-xs-12 age_of_kids">
                                    <p>Age des enfants a la fin du sejur</p>
                                    <select name="age1">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age2">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age3">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                    <select name="age4">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="text" name="promo_code" placeholder="Code promotionel" class="search_block_promo_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="search_block_results_button">Verifier les disponibilies</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--middle section END-->

    <!--offers and news START-->
    {{--<section class="offers_and_news">--}}
        {{--<div class="main_container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 offers">--}}
                    {{--<div class="flexslider">--}}
                        {{--<ul class="slides">--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-5 offer_img">--}}
                                        {{--<img src="/img/homepage/offers/1.jpg">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-6 offer_short_info">--}}
                                        {{--<h3>Graida atcur ecuus istique</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
                                        {{--<span class="offer_price">135.-CHF</span>--}}
                                        {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-5 offer_img">--}}
                                        {{--<img src="/img/homepage/offers/1.jpg">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-6 offer_short_info">--}}
                                        {{--<h3>Aucune offre pour l’instant</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
                                        {{--<span class="offer_price">135.-CHF</span>--}}
                                        {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-5 offer_img">--}}
                                        {{--<img src="/img/homepage/offers/1.jpg">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-6 offer_short_info">--}}
                                        {{--<h3>Graida atcur ecuus istique</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma.</p>--}}
                                        {{--<span class="offer_price">135.-CHF</span>--}}
                                        {{--<button type="button" class="offer_more_info_button">Plus d'information</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 news">--}}
                    {{--<div class="flexslider">--}}
                        {{--<ul class="slides">--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-11">--}}
                                        {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
                                            {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-11">--}}
                                        {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
                                            {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-11">--}}
                                        {{--<h3>Aucune nouvelle pour l’instant</h3>--}}
                                        {{--<div class="offer_blue_line"></div>--}}
                                        {{--<span class="offers_and_news_date">Jusqu'au 15 juillet 2015</span>--}}
                                        {{--<p>Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris. Suadrcnc sit amet eros.--}}
                                            {{--Lorem ipsum  at consc tetuer aiing elituris fermentum tuma. Donec alsuadrcnc sit amet eros. Lorem ipsum dolor sit at consc tetuer aiing elituris.</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--offers and news START-->

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