@extends('layouts.main')

@section('title')
    Hotel
@stop

@section('styles')
    <link rel="stylesheet" href="/css/hotel.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap-daterangepicker-master/daterangepicker-bs3.css" />
@stop

@section('scripts')

    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/2.9.0/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/1/daterangepicker.js"></script>

    <script src="js/hotel.js"></script>
    <script src="libraries/slidesJS/jquery.slides.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-0.12.1.min.js') }}"></script>
    <script src="{{ asset('/admins/js/angular/ui-bootstrap-tpls-0.12.1.js') }}"></script>
    <script src="/js/angular/order.js"></script>



    <script type="text/javascript">
        $(function() {
            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment(),
                endDate: moment().add(29, 'days'),
                minDate: '01/01/2012',
                maxDate: '12/31/2016',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                /*ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                 'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                 },*/
                opens: 'left',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            });

            // remove 1st th from .calendar-date
            var removeFirstTh = function(){
                $(".daterangepicker .calendar.first  thead tr:first th:first").each(function(){$(this).hide()});
                $(".daterangepicker .calendar.second  thead tr:first th:first").each(function(){$(this).hide()});
                $(".daterangepicker .calendar .calendar-date .month").attr("colspan", "6");
                $(".daterangepicker .calendar .table-condensed  thead .prev i").removeClass("fa fa-arrow-left icon icon-arrow-left glyphicon-arrow-left").addClass("glyphicon-chevron-left");
                $(".daterangepicker .calendar .table-condensed  thead .next i").removeClass("fa fa-arrow-right icon icon-arrow-right glyphicon-arrow-right").addClass("glyphicon-chevron-right");
            };
            $('#reportrange').on("show.daterangepicker", function(){ removeFirstTh(); });
            $('.daterangepicker').bind("DOMSubtreeModified",function(){ removeFirstTh(); });

        });
    </script>
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
                             <li class="active"><div class="header_separator"></div> <a href="{{url('hotel')}}">Hôtel</a></li>
                             <li id="nav_rooms"><div class="header_separator"></div> <a href="{{url('room')}}">Chambres / Appartement</a></li>
                             <li><div class="header_separator"></div> <a href="{{url('restaurant')}}">Restaurant / Bar</a></li>
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
                        <div class="right_sidebar_container">
                            <div class="right_sidebar">
                                <div class="page_icon"></div>
                                <h3>Hôtel</h3>
                                <p>L’hôtel Rousseau 3* à Genève a été entièrement rénové en 2015. Ses 25 chambres dont un appartement au style moderne et élégant,
                                    alliant sécurité, confort, et haute technologie, sauront ainsi ravir une clientèle d’affaires, et de tourisme.
                                    Cet hôtel écrin a une gestion familiale délivrant un service personnalisé, discret et chalheureux à ses hôtes.
                                    Une équipe de professionnels, multilingue, est à votre écoute, présente 24/24, en vous assurerant un séjour en toute sérénité.</p>
                                <br>
                                <p>Afin de bien débuter votre journée, de 07h00 à 10h00, le petit déjeuner buffet est servi dans la salle de notre restaurant « Les 3 palettes, 20/20 wine bar ».</p>
                                <br>
                                <p>L’hôtel est idéalement situé au cœur de Genève, à 2 minutes à pied du Lac Léman et 5 minutes de la gare Cornavin et juste à coté de Manor,
                                    le plus grand centre commercial de Genève. Il est proche du quartier des banques, des organisations internationales ONU ainsi que des boutiques de luxe.</p>
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