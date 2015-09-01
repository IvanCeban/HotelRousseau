jQuery(document).ready(function($){
    $("select").selectBoxIt();
    $(function(){
        $(".slides").slidesjs({
            width: 460,
            height: 400,
            pagination: {
                active: false
            }
        });
    });

    $('.hotel_main_content_nav ul li').on('click', function(){
        $('.hotel_main_content_nav ul li').removeClass('active');
        $(this).addClass('active');
        var attr_name = $(this).attr('name');
        $('#hotel_rooms').css({"display": "none"});
        $('#hotel_offers').css({"display": "none"});
        $('#hotel_reservation').css({"display": "none"});
        $('#'+attr_name+'').css({"display": "block"})
    });



    var offset = $('.sidebar-scroll').offset().top;
    if($(window).scrollTop() > offset){
        $('.sidebar-scroll').addClass('fixed');
    }


    $(window).on('scroll', function() {

        if($(this).scrollTop() > offset){
            if(!$('.sidebar-scroll').hasClass('fixed')){
                $('.sidebar-scroll').addClass('fixed');
            }
        } else {
            if ($('.sidebar-scroll').hasClass('fixed')) {
                $('.sidebar-scroll').removeClass('fixed');
            }
        }

    })
});