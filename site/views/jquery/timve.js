$("#l-bt-search").click(async function(e) {
    e.preventDefault();
    // var loaiVe = $('#select_awe_tren-1').val();
    var loaiGhe = $('#select_awe_tren-2').val();
    var nguoiLon = $('#nguoilon').val();
    var treEm = $('#betren2').val();
    var emBe = $('#beduoi2').val();
    var diemDi = $('#select_awe_1').find(':selected').attr('data-id');
    var diemDen = $('#select_awe_2').find(':selected').attr('data-id');
    var ngayDi = $('#khuhoi_ngaydi').val();
    var ngayVe = $('#khuhoi_ngayve').val();

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


});