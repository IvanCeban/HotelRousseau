@extends('layouts.main')

@section('title')
    Accueil
@stop

@section('styles')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/libraries/bootstrap-daterangepicker-master/daterangepicker-bs3.css" />
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

            $('#reportrange span').html(moment().format('MMMM D, YYYY') + ' - ' + moment().add(29, 'days').format('MMMM D, YYYY'));
            $('#checkin_date').val(moment().format('YYYY-MM-DD'));
            $('#checkout_date').val(moment().add(29, 'days').format('YYYY-MM-DD'));
            $('#nights').val(29);


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
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                $('#checkin_date').val(start.format('YYYY-MM-DD'));
                $('#checkout_date').val(end.format('YYYY-MM-DD'));
                var duration = moment.duration(end.diff(start));
                var nights = Math.floor(duration.asDays());
                $('#nights').val(nights);

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
                             <li class="active"><a href="/">Accueil</a></li>
                             <li><div class="header_separator"></div><a href="{{url('hotel')}}">Hôtel</a></li>
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
                        <form name="registrationForm" novalidate method="post" action="{{url('hotel')}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <input type="hidden" name="checkin_date" id="checkin_date" value="">
                                <input type="hidden" name="checkout_date" id="checkout_date" value="">
                                <input type="hidden" name="nights" id="nights" value="">
                                <div class="col-md-12">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span></span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!--<div class="row">
                                <div class="col-xs-6 date_of_coming">
                                    <p>Date de debut</p>
                                    <input type="date" name="in">
                                </div>
                                <div class="col-xs-6 date_of_leaving">
                                    <p>Date de fin</p>
                                    <input type="date" name="out">
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="col-xs-6 num_of_adults">
                                    <p>Adultes</p>
                                    <select name="adults">
                                        <option>1</option>
                                        <option selected>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="col-xs-6 num_of_kids">
                                    <p>Enfants</p>
                                    <select name="kids" id="kids">
                                        <option value="0">0</option>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search_block_separator_line"></div>
                            <div class="row">
                                <div class="col-xs-12 age_of_kids">
                                    <p>Age des enfants a la fin du sejur</p>
                                    <select class="ages" name="age[0]">
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                        <option label="5">6</option>
                                        <option label="5">7</option>
                                        <option label="5">8</option>
                                        <option label="5">9</option>
                                        <option label="5">10</option>
                                        <option label="5">11</option>
                                        <option label="5">12</option>
                                        <option label="5">13</option>
                                        <option label="5">14</option>
                                        <option label="5">15</option>
                                        <option label="5">16</option>
                                        <option label="5">17</option>
                                    </select>
                                    <!--<select name="age2">
                                        <option label="0">0</option>
                                        <option label="1">1</option>
                                        <option label="2">2</option>
                                        <option label="3">3</option>
                                        <option label="4">4</option>
                                        <option label="5">5</option>
                                    </select>-->
                                    <!--<select name="age3">
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
                                    </select>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="text" name="promo_code" placeholder="Code promotionel" class="search_block_promo_code">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="search_block_results_button">Verifier les disponibilies</button>
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
                {{--<div class="col-xs-6 offers">--}}
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
                {{--<div class="col-xs-6 offers">--}}
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
                        <!--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Plan du site</a></li>-->
                        <!--<li><a href="#"><img src="/img/header_and_footer_links_seperator.png"> Mentions legales</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--footer END-->
@stop