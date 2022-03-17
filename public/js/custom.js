$(function(){
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 400) {
            $('#header').addClass('fixed-top');
        } else {
            $('#header').removeClass('fixed-top');
        }
    });

    $('.rate-star').hover(function(){
        let score = $(this).attr('id');
        for (let star = 1; star <= score; star++) {
            $('#'+star).attr('src', '../images/rate/star-hover.webp');
        }
    },
    function(){
        $('.rate-star').attr('src', '../images/rate/star.webp');
    });
});