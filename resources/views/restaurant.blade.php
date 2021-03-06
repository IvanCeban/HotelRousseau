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
                                    <h3>Restaurant</h3>
                                    <p>Nous entreprenons des travaux, ainsi notre restaurant rouvrira ses portes à la fin du mois de janvier 2017 et sera ravi de vous accueillir.</p>
                                    <br>
                                    <p>Dans un cadre feutré et contemporain, l’équipe du restaurant les 3 Palettes 20/20 Wine Bar, vous séduira par sa convivialité. </p>
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