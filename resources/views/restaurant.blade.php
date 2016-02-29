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
                 <div class="row">
                     <div class="col-xs-12 header_menu">
                         <ul>
                             <li class="logo"><a href="/"><img src="img/logo.svg"></a></li>
                             <li><a href="/">Accueil</a></li>
                             <li><div class="header_separator"></div> <a href="{{url('hotel')}}">Hôtel</a></li>
                             <li id="nav_rooms"><div class="header_separator"></div> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                             <li class="active"><div class="header_separator"></div> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
                             <li><div class="header_separator"></div> <a href="{{url('offers')}}">Offres / Packages</a></li>
                             {{--<li><img src="/img/header_and_footer_links_seperator.png"> <a href="{{url('wellness_center')}}">Centre bien-etre / Loisirs</a></li>--}}
                             <li><div class="header_separator"></div> <a href="{{url('contact')}}">Contact</a></li>
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
                                    <h3>Restaurant</h3>
                                    <p>Dans un cadre feutré et contemporain, l’équipe du restaurant les 3 Palettes 20/20 Wine Bar,
                                        vous accueillera en toute convivialité. A travers la fraîcheur de ses mets, le Chef de cuisine vous fera
                                        voyager et ainsi vous amènera  à découvrir ses spécialités telles que l’hamburger de bison, l’incontournable salade
                                        Caesar ou encore le croustillant de crevettes Bangkok pour ne citer qu’eux. Nous vous invitons à découvrir notre concept
                                        de boissons servies sur palette : comme les 3 bières artisanales des Brasseurs, la Blanche de froment,
                                        la Blonde pure malt et l’ambrée double malt ou les vins internationaux de la carte, en dégustation.</p>
                                    <br>
                                    <p>Tous nos plats sont à chf 20.- y compris notre plat du jours.</p>
                                    <br>
                                    <p>Vous saurez apprécier le parcours dégustatif aussi bien pour le service du déjeuner que pour le service du dîner.</p>
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