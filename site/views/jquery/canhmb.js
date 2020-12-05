$(document).ready(function() { 
    $(window).scroll(function() {
        if ($(this).scrollTop() > 2000) {
            $('.l-canh-trai').addClass('l-position-absolute-top-2000');
            $('.l-canh-phai').addClass('l-position-absolute-top-2000');
        } else {
            $('.l-canh-trai').removeClass('l-position-absolute-top-2000');
            $('.l-canh-phai').removeClass('l-position-absolute-top-2000');
        }
    });
})