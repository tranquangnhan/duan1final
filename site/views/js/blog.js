$(document).ready(function () {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            $('.div-right-inblogdt').addClass('l-div-right-fixed');

        } else {
            $('.div-right-inblogdt').removeClass('l-div-right-fixed');
        }
    });
});