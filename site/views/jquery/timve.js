$("#l-bt-searchkh").click(async function(e) {
    e.preventDefault();

    function fireErr(text) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: text,
            showConfirmButton: true,
            showCancelButton: false,
            icon: "error"
        });
    }
    // var loaiVe = $('#select_awe_tren-1').val();
    var loaiGhe = $('#select_awe_tren-2').val();
    var nguoiLon = $('#nguoilon').val();
    var treEm = $('#betren2').val();
    var emBe = $('#beduoi2').val();
    var diemDi = $('#select_awe_1').find(':selected').attr('data-id');
    var diemDen = $('#select_awe_2').find(':selected').attr('data-id');
    var ngayDi = $('#khuhoi_ngaydi').val();
    var ngayVe = $('#khuhoi_ngayve').val();
    if (diemDi == '') {
        fireErr('Vui lòng nhập điểm đi.');
        return;
    } else if (diemDen == '') {
        fireErr('Vui lòng nhập điểm đến.');
        return;
    } else if (ngayDi == '') {
        fireErr('Vui lòng nhập ngày đi.');
        return;
    } else if (ngayVe == '') {
        fireErr('Vui lòng nhập ngày về.');
        return;
    } else if (loaiGhe == '') {
        fireErr('Vui lòng chọn loại ghế.');
        return;
    } else if (nguoiLon <= 0) {
        fireErr('Số người lớn phải lớn 0.');
        return;
    } else if (emBe > nguoiLon) {
        fireErr('Số em bé không được lớn hơn người lớn.');
        return;
    } else {
        let Loading = Swal.fire({ // sweetAlert
            allowEscapeKey: false,
            title: 'Đang Tìm Kiếm',
            allowOutsideClick: false,
            showConfirmButton: false,
            text: 'Vui lòng chờ trong giây lát...',
            imageUrl: 'views/img/Default/Loading.gif',
        });
        var dataSearch = new FormData();
        // dataSearch.append('loaive', loaiGhe);
        dataSearch.append('loaighe', loaiGhe);
        dataSearch.append('nguoilon', nguoiLon);
        dataSearch.append('treem', treEm);
        dataSearch.append('embe', emBe);
        dataSearch.append('diemdi', diemDi);
        dataSearch.append('diemden', diemDen);
        dataSearch.append('ngaydi', ngayDi);
        dataSearch.append('ngayve', ngayVe);
        dataSearch.append('Action', 'showve');
        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/timve.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: dataSearch,
            success: function(response) {
                Loading.close();
                window.location.href = 'index.php?' + response;
            }
        });

    }

});

$("#l-bt-searchmc").click(async function(e) {
    e.preventDefault();

    function fireErr(text) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: text,
            showConfirmButton: true,
            showCancelButton: false,
            icon: "error"
        });
    }
    // var loaiVe = $('#select_awe_tren-1').val();
    var loaiGheMc = $('#select_awe_tren-2').val();
    var nguoiLonMc = $('#nguoilon').val();
    var treEmMc = $('#betren2').val();
    var emBeMc = $('#beduoi2').val();
    var diemDiMc = $('#select_awe_1_motchieu').find(':selected').attr('data-id');
    var diemDenMc = $('#select_awe_2_motchieu').find(':selected').attr('data-id');
    var ngayDiMc = $('#motchieu-ngaydi').val();
    if (diemDiMc == '') {
        fireErr('Vui lòng nhập điểm đi.');
        return;
    } else if (diemDenMc == '') {
        fireErr('Vui lòng nhập điểm đến.');
        return;
    } else if (ngayDiMc == '') {
        fireErr('Vui lòng nhập ngày đi.');
        return;
    } else if (loaiGheMc == '') {
        fireErr('Vui lòng chọn loại ghế.');
        return;
    } else if (nguoiLonMc <= 0) {
        fireErr('Số người lớn phải lớn 0.');
        return;
    } else if (emBeMc > nguoiLonMc) {
        fireErr('Số em bé không được lớn hơn người lớn.');
        return;
    } else {
        let Loading = Swal.fire({ // sweetAlert
            allowEscapeKey: false,
            title: 'Đang Tìm Kiếm',
            allowOutsideClick: false,
            showConfirmButton: false,
            text: 'Vui lòng chờ trong giây lát...',
            imageUrl: 'views/img/Default/Loading.gif',
        });
        var dataSearch = new FormData();
        // dataSearch.append('loaive', loaiGhe);
        dataSearch.append('loaighe', loaiGheMc);
        dataSearch.append('nguoilon', nguoiLonMc);
        dataSearch.append('treem', treEmMc);
        dataSearch.append('embe', emBeMc);
        dataSearch.append('diemdi', diemDiMc);
        dataSearch.append('diemden', diemDenMc);
        dataSearch.append('ngaydi', ngayDiMc);
        dataSearch.append('Action', 'showve');
        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/timve.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: dataSearch,
            success: function(response) {
                Loading.close();
                window.location.href = 'index.php?' + response;
            }
        });

    }

});
// $("#timkiemhang").click(function() {
//     var radios = document.getElementsByName('hangmb');

//     for (var i = 0, length = radios.length; i < length; i++) {
//         if (radios[i].checked) {
//             // do whatever you want with the checked radio
//             window.location.href = window.location.href + "&hangmb=" + radios[i].value;
//             // only one radio can be logically checked, don't check the rest
//             break;
//         }
//     }
// })