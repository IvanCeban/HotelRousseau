@extends('layouts.main')

@section('title')
    Offres / Packages
@stop

@section('styles')
    <link rel="stylesheet" href="/css/hotel.css">
@stop

@section('scripts')

@stop

@section('content')
 <!--header START-->
     <section class="header">
         <div class="main_container">
             <div class="row">
                 <div class="col-xs-6 languages">
                     <!--<ul>-->
                         <!--<li class="active"><a href="#">FR</a></li>-->
                         <!--<li><a href="#">EN</a></li>-->
                     <!--</ul>-->
                 </div>
             </div>
             <div class="row">
                 <div class="col-xs-12 header_menu">
                     <ul>
                         <li class="logo"><a href="/"><img src="img/logo.png"></a></li>
                         <li><a href="/">Accueil</a></li>
                         <li class="active"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('hotel')}}">Hôtel</a></li>
                         <li id="nav_rooms"><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                         <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                         <li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('offers')}}">Offres / Packages</a></li>
                         {{--<li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
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
                         <a href="#" class="header_login_btn">Connexion</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 <!--header END-->

{{--rooms type select START--}}
     <section class="rooms_types_section">
         <div class="main_container">
             <div class="row">
                 <div class="col-xs-12">
                     <ul class="rooms_types_buttons">
                         <li class="room_type" id="single_classic">
                             <h5>Single classic</h5>
                             <a href="#">CHF 235.-</a>
                         </li>
                         <li class="room_type" id="double_classic">
                             <h5>Double classic</h5>
                             <a href="#">CHF 265.-</a>
                         </li>
                         <li class="room_type" id="double_superior">
                             <h5>Double Supérieur</h5>
                             <a href="#">CHF 295.-</a>
                         </li>
                         <li class="room_type" id="triple">
                             <h5>Triple</h5>
                             <a href="#">CHF 325.-</a>
                         </li>
                         <li class="room_type" id="apartment">
                             <h5>Appartement</h5>
                             <a href="#">CHF 590.-</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>
 {{--rooms type select END--}}

<!--main content START-->
    <section class="main_section">
        <div class="main_container">
            <div class="row">
                <div class="col-xs-push-8 col-xs-4">
                    <div class="sidebar_parent">
                        {{--<div class="show_hide_sidebar_btn"></div>--}}
                        <div class="right_sidebar_container">
                            {{--<div class="show_hide_sidebar_btn"></div>--}}
                            <div class="right_sidebar">
                                <div class="page_icon"></div>
                                <h3>Hôtel</h3>
                                <p>L’hôtel Rousseau 3* à Genève a été entièrement rénové en 2015. Ses 25 chambres au style moderne et élégant, alliant sécurité,
                                    confort, et haute technologie, sauront ainsi ravir une clientèle d’affaires, et de tourisme.
                                    Cet hôtel écrin a une gestion familiale délivrant un service personnalisé, discret et chalheureux à ses hôtes.
                                    Une équipe de professionnels, multilingue, est à votre écoute, présente 24/24, en vous assurerant un séjour en toute sérénité.</p>
                                <br>
                                <p>Afin de bien débuter votre journée, de 07h00 à 10h00, le petit déjeuner buffet est servi dans la salle de notre restaurant « Les 3 palettes, 20/20 wine bar ».</p>
                                <br>
                                <p>L’hôtel est idéalement situé au cœur de Genève, à 2 minutes à pied du Lac Léman et 5 minutes de la gare Cornavin et juste à coté de Manor,
                                    le plus grand centre commercial de Genève. Il est proche du quartier des banques, des organisations internationales ONU ainsi que des boutiques de luxe.</p>
                                {{--<ul class="our_specials">--}}
                                    {{--<li><span> - hamburger</span></li>--}}
                                    {{--<li><span> - flammekueche</span></li>--}}
                                    {{--<li><span> - salade chaud-froid</span></li>--}}
                                    {{--<li><span> - tartare</span></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="hotel_services additional">--}}
                                    {{--<li><span> Palette de 3 verres (3x1dl) pour la dégustation de bières artisanales les Brasseurs Genève. </span></li>--}}
                                    {{--<li><span> Palette de 3 verres (3x1dl) pour la dégustation de vins (blancs, rosés ou rouges).</span></li>--}}
                                    {{--<li><span> 20 mets à Frs 20.- servis sur palettes : 5 Flammekueches (tartes flambées) moitié-moitié. </span></li>--}}
                                {{--</ul>--}}
                                {{--<p>« Choisissez votre formule en toute simplicité » dans le plaisir et pour un moment d’évasion assuré.</p>--}}
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