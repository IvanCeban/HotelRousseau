jQuery(document).ready(function($){

    $('.room_photos_list li img').on('click', function () {
        var number = $(this).attr('photo_number');
        $('body').css({'background': 'url(/img/rooms/gallery/'+number+'.jpg) no-repeat center center fixed'});
    });

});

$(window).load(function() {
    $('.flexslider').flexslider();
});