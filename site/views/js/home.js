$(document).ready(function() {
    var heroSlider = $('#owl-1');
    heroSlider.owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        center: true,
        items: 1,
        loop: true,
        mouseDrag: false,
        autoplay: true,
        autoplayTimeout: 10000
    });
    var slide1 = $('#owl-2');
    slide1.owlCarousel({
        loop: true,
        margin: 30,
        items: 4,
        nav: true,
        center: true,
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 70) {
            $('#l-menu-fixed').show();
            //$('#l-menu-fixed').fadeIn(600);
            $('#menu-main-fixed li a').css("color", "#494949");

        } else {
            $('#l-menu-fixed').hide();
        }
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.l-bt-fixed-to-top').fadeIn();
        } else {
            $('.l-bt-fixed-to-top').fadeOut();
        }
    });
    $('#bt-to-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 500)
        return false;
    });
    $("#li-khuhoi").click(function() {
        $("#trove").css("display", "block");
    });
    $("#li-motchieu").click(function() {
        $("#trove").css({ "display": "none" });
        $("this").removeClass("background-main-color");
    });
    $("#id-nhieudiemden").click(function() {
        $("this").removeClass("background-main-color");
    });

    $('#l_show_chon_ve').click(function() {
        $("#l-box-qlity").toggle();
    });


    // xử lí hai nút cộng trừ chổ chọn số lượng vé

    // Người lớn
    var sove_nl = 1;
    $('#l-plus-nguoilon').click(function() {
        if (sove_nl < 5) {
            sove_nl++;
            $('#l-minus-nguoilon').addClass('l-minus_hover');
        }
        if (sove_nl == 5) {
            $('#l-plus-nguoilon').removeClass('l-plus_hover');
        }
        $('#nguoilon').val(sove_nl);
        console.log(sove_nl);
    });
    $('#l-minus-nguoilon').click(function() {
        if (sove_nl > 1) {
            sove_nl--;
            $('#l-plus-nguoilon').addClass('l-plus_hover');
        }
        if (sove_nl == 1) {
            $('#l-minus-nguoilon').removeClass('l-minus_hover');
        }
        console.log(sove_nl);
        $('#nguoilon').val(sove_nl);
    });
    // trẻ em dưới 2
    var sove_beduoi2 = 0;
    $('#l-plus-beduoi2').click(function() {
        if (sove_beduoi2 < 5) {
            sove_beduoi2++;
            $('#l-minus-beduoi2').addClass('l-minus_hover');
        }
        if (sove_beduoi2 == 5) {
            $('#l-plus-beduoi2').removeClass('l-plus_hover');
        }
        $('#beduoi2').val(sove_beduoi2);
    });
    $('#l-minus-beduoi2').click(function() {
        if (sove_beduoi2 > 0) {
            sove_beduoi2--;
            $('#l-plus-beduoi2').addClass('l-plus_hover');
        }
        if (sove_beduoi2 == 0) {
            $('#l-minus-beduoi2').removeClass('l-minus_hover');
        }
        $('#beduoi2').val(sove_beduoi2);
    });
    // trẻ em trên 2
    var sove_betren2 = 0;
    $('#l-plus-betren2').click(function() {
        if (sove_betren2 < 5) {
            sove_betren2++;
            $('#l-minus-betren2').addClass('l-minus_hover');
        }
        if (sove_betren2 == 5) {
            $('#l-plus-betren2').removeClass('l-plus_hover');
        }
        $('#betren2').val(sove_betren2);
    });
    $('#l-minus-betren2').click(function() {
        if (sove_betren2 > 0) {
            sove_betren2--;
            $('#l-plus-betren2').addClass('l-plus_hover');
        }
        if (sove_betren2 == 0) {
            $('#l-minus-betren2').removeClass('l-minus_hover');
        }
        $('#betren2').val(sove_betren2);
    });

    // kết thúc xử lí hai nút cộng trừ chổ chọn số lượng vé

    // thư viện awesome select
    $('.selectawe-tren').awselect({
        background: "none",
    });
    $('.selectawe').awselect();

    // ngày đi
    $("#khuhoi_ngaydi").datepicker({
        dateFormat: 'dd-MM-yy',
        minDate: '0d',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngayve = $('#khuhoi_ngayve').datepicker('getDate');
            var newDate = $(this).datepicker('getDate');
            if (newDate) { // Not null
                newDate.setDate(newDate.getDate());
            }
            if (ngayve == null) {
                $('#khuhoi_ngayve').datepicker('option', 'minDate', newDate); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
    // ngày về
    $("#khuhoi_ngayve").datepicker({
        dateFormat: 'dd-MM-yy',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngaydi = $('#khuhoi_ngaydi').datepicker('getDate');
            var newDate_z = $(this).datepicker('getDate');
            if (newDate_z) { // Not null
                newDate_z.setDate(newDate_z.getDate());
            }
            if (ngaydi == null) {
                $('#khuhoi_ngaydi').datepicker('option', 'maxDate', newDate_z); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
});

// js đặt vé
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
window.onload = function() {
    document.getElementById("defaultOpen").click();
}

// lay du lieu cua option
function my_callback_1(value) {
    if (value == "khuhoi") {
        $('.motchieu').addClass("display_none");
        $('.khuhoi').removeClass("display_none");
    } else if (value == "motchieu") {
        $('.motchieu').removeClass("display_none");
        $('.khuhoi').addClass("display_none");
    }
}
// lay du lieu của loại ghế
function my_callback_2(value) {
    console.log("loại ghế " + value);
}


function my_callback_tu(value) {
    $(".l-tu").fadeOut(700, function() {
        $(".l-tu").html(value);
    });
    $(".l-tu").fadeIn(600);
}

function my_callback_den(value) {
    $(".l-den").fadeOut(700, function() {
        $(".l-den").html(value);
    });
    $(".l-den").fadeIn(600);
}
// text trong background head
function my_callback_tu_motchieu(value) {
    $(".l-tu").fadeOut(700, function() {
        $(".l-tu").html(value);
    });
    $(".l-tu").fadeIn(600);
}

function my_callback_den_motchieu(value) {
    $(".l-den").fadeOut(700, function() {
        $(".l-den").html(value);
    });
    $(".l-den").fadeIn(600);
}