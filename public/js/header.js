$(function(){
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 400) {
            $('#header').addClass('fixed-top');
        } else {
            $('#header').removeClass('fixed-top');
        }
    });
});