jQuery(document).ready(function($){

    $('.room_photos_list li img').on('click', function () {
        var number = $(this).attr('photo_number');
        $('body').css({'background': 'url(/img/rooms/gallery/'+number+'.jpg) no-repeat center center fixed'});
    });

    $('.room_type').on('click', function(){
        $('.room_type').removeClass('active');
        $(this).addClass('active');
        var active_element_id = $(this).attr('id');
        //console.log(active_element_id);
        $('.right_sidebar').css('display','none');
        $('#'+active_element_id+'_right_sidebar').css('display','block');
    })

});

$(window).load(function() {
    $('.flexslider').flexslider();
});