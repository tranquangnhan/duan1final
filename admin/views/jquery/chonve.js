async function chonVe(idChuyenBay) {
    // alert(idChuyenBay);
    let Loading = Swal.fire({ // sweetAlert
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: '../site/views/img/Default/Loading.gif',
    });
    if (idChuyenBay) {

        let chonGhe = new FormData();

        chonGhe.append('idchuyenbay', idChuyenBay); //tên
        chonGhe.append('Action', 'chonghe'); //check tài khoản đã tồn tại hay chưa
        $.ajax({
            type: 'POST',
            url: 'controllers/ajax/chonghe.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: chonGhe,
            success: async function(response) {
                Loading.close();
                window.location.href = ('?ctrl=timve&act=chonve&idcb=' + idChuyenBay + '');
            }
        });
    }
}