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
            @include('partials.menu')
        </div>

    </section>
    <!--header END-->

    {{--rooms type select START--}}
    {{--<section class="rooms_types_section">--}}
        {{--<div class="main_container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xs-12">--}}
                    {{--<ul class="rooms_types_buttons">--}}
                        {{--<li class="room_type" id="single_classic">--}}
                            {{--<h5>Single classic</h5>--}}
                            {{--<a href="#">CHF 235.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="double_classic">--}}
                            {{--<h5>Double classic</h5>--}}
                            {{--<a href="#">CHF 265.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="double_superior">--}}
                            {{--<h5>Double Supérieur</h5>--}}
                            {{--<a href="#">CHF 295.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="triple">--}}
                            {{--<h5>Triple</h5>--}}
                            {{--<a href="#">CHF 325.-</a>--}}
                        {{--</li>--}}
                        {{--<li class="room_type" id="apartment">--}}
                            {{--<h5>Appartement</h5>--}}
                            {{--<a href="#">CHF 590.-</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--rooms type select END--}}

            <!--middle section START-->
    <section class="page_content">
        <div class="main_container">
            <div class="search_block opened">
                <img id="" class="svg ornament" src="../img/homepage/ornament_reservation.svg"/>
                <h1>réservation en ligne</h1>
                <img id="" class="svg ornament" src="../img/homepage/ornament_reservation.svg"/>
                <iframe style="opacity:1;filter:alpha(opacity=100)" frameborder="0" width="440" height="30" name="template" id="template" scrolling="no" src="https://sb.ghix.net/default.aspx?View=Template&Action=List&HotelID=2986959&Language=4&Template=1389&Type=17"></iframe>

            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="homepage_title">Bienvenue à l’hôtel Rousseau</h1>
                </div>
            </div>
        </div>
    </section>


    <!--middle section START-->

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