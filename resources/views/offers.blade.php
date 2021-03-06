@extends('layouts.main')

@section('title')
    Offres / Packages
@stop

@section('styles')
    <link rel="stylesheet" href="/css/offers.css">
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
                 @include('partials.menu')
             </div>
         </section>
        <!--header END-->

        {{--rooms type select START--}}
         {{--<section class="rooms_types_section">
             <div class="main_container">
                 <div class="row">
                     <div class="col-xs-12">
                         <ul class="rooms_types_buttons">
                             <li class="room_type" id="single_classic">
                                 <h5>Single classic</h5>
                                 <a href="{{url('room')}}">CHF 235.-</a>
                             </li>
                             <li class="room_type" id="double_classic">
                                 <h5>Double classic</h5>
                                 <a href="{{url('room')}}">CHF 265.-</a>
                             </li>
                             <li class="room_type" id="double_superior">
                                 <h5>Double Supérieur</h5>
                                 <a href="{{url('room')}}">CHF 295.-</a>
                             </li>
                             <li class="room_type" id="triple">
                                 <h5>Triple</h5>
                                 <a href="{{url('room')}}">CHF 325.-</a>
                             </li>
                             <li class="room_type" id="apartment">
                                 <h5>Appartement</h5>
                                 <a href="{{url('room')}}">CHF 590.-</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </section>--}}
         {{--rooms type select END--}}

    <!--main content START-->
        {{--<section class="main_section">--}}
            {{--<div class="main_container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-push-8 col-xs-4">--}}
                        {{--<div class="sidebar_parent">--}}
                            {{--<div class="show_hide_sidebar_btn"></div>--}}
                            {{--<div class="right_sidebar_container">--}}
                                {{--<div class="right_sidebar">--}}
                                    {{--<img class="page_icon" src="/img/offers/offers_right_sidebar_icon.png">--}}
                                    {{--<h3>Services</h3>--}}
                                    {{--<p>--}}
                                        {{--Hôtel, les services--}}
                                    {{--</p>--}}
                                    {{--<ul class="hotel_services">--}}
                                        {{--<li><img src="/img/offers/offers_icons/soundproofed.png"><span> - chambres insonorisées </span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/non_smoking.png"><span> - hôtel non-fumeur</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/wine_bar.png"><span> - Restaurant  Wine-bar </span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/breakfast.png"><span> - Petit déjeuner (6.30 – 10.00)</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/nespresso_machine.png"><span> - Machine Nespresso en chambre</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/safe.png"><span> - WiFi gratuit dans tout l'hôtel</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/desk.png"><span> - Bureau</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/hair_dryer.png"><span> - SdB, séche-cheveux</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/pressing.png"><span> - Service pressing (payant)</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/washing_machine.png"><span> - Local machine à laver/sécher, fer et planche à repasser </span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/kitchen.png"><span> - Kitchenette</span></li>--}}
                                    {{--</ul>--}}
                                    {{--<p>--}}
                                        {{--Hôtel, les services--}}
                                    {{--</p>--}}
                                    {{--<ul class="hotel_services additional">--}}
                                        {{--<li><img src="/img/offers/offers_icons/common_checked.png"><span> Palette 3 verres (3x1dl) dégustation de bières artisanales les Brasseurs Genève, </span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/common_checked.png"><span> Palette 3 verres (3x1dl) dégustation de vins (blanc ou rosé ou rouge),</span></li>--}}
                                        {{--<li><img src="/img/offers/offers_icons/common_checked.png"><span> 20 mets à Frs 20.-  servis sur palettes :<br> 5 Flammekueches (tartes flambées) moitié-moitié au  </span></li>--}}
                                    {{--</ul>--}}
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