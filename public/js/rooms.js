jQuery(document).ready(function($){

    $('.room_photos_list li img').on('click', function () {
        var number = $(this).attr('photo_number');
        $('body').css({'background': 'url(/img/rooms/gallery/'+number+'.jpg) no-repeat center center fixed'});
    });
//izvrashenie bleati! START
    $('.room_type').on('click', function(){
        $('.room_type').removeClass('active');
        $(this).addClass('active');
        var active_element_id = $(this).attr('id');

        $('.right_sidebar').css('display','none');
        $('#'+active_element_id+'_right_sidebar').css('display','block');

        $('.flex-viewport').height('107px');
        $('.room_photos_list').height('107px');
        $('.room_photos_list li').width('50%');


        if(active_element_id == 'sigle_classic'){
            $('body').css({'background': 'url(/img/rooms/gallery/011.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'double_classic'){
            $('body').css({'background': 'url(/img/rooms/gallery/011.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'double_superior'){
            $('body').css({'background': 'url(/img/rooms/gallery/002.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'triple'){
            $('body').css({'background': 'url(/img/rooms/gallery/024.jpg) no-repeat center center fixed'});
        }
        else if (active_element_id == 'apartment'){
            $('body').css({'background': 'url(/img/rooms/gallery/006.jpg) no-repeat center center fixed'});
        }
    })
//izvrashenie bleati! END
});

$(window).load(function() {
    $('.flexslider').flexslider();
});