jQuery(document).ready(function($){
    $("select").selectBoxIt();

    $('.hotel_main_content_nav ul li').on('click', function(){
        $('.hotel_main_content_nav ul li').removeClass('active');
        $(this).addClass('active');
    });
});