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