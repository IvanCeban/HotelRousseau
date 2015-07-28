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
        console.log(attr_name);
        $('#hotel_rooms').css({"display": "none"});
        $('#hotel_offers').css({"display": "none"});
        $('#hotel_reservation').css({"display": "none"});
        $('#'+attr_name+'').css({"display": "block"})
    });
});