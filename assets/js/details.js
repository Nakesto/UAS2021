$(document).ready(function(){

    $('.small-image img').click(function(){

        $(this).addClass('active').siblings().removeClass('active');

        let image = $(this).attr('src');
        $('.big-image img').attr('src',image);

    });

});

