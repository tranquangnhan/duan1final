let PhoneRegex = /((09|03|07|08|05)+([0-9]{8})\b)/i;

$("#themhd").click(async function(e) {
    e.preventDefault();
    let Loading = Swal.fire({
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: '../site/views/img/Default/Loading.gif',
    });

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
    var arrHoten = [];
    var arrGioiTinh = [];
    var arrDienThoai = [];
    var arrCmnd = [];

    let flag1 = false;
    let flag2 = false;
    let flag3 = false;
    let flag4 = false;
    $(".hotenkh").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập họ tên.');
            flag1 = false;
        } else if (Number($(this).val())) {
            fireErr('Họ tên không được chứa số.');
            flag1 = false;
        } else if ($(this).val().length <= 6) {
            fireErr('Họ tên quá ngắn, vui lòng nhập đầy đủ họ tên.');
            flag1 = false;
        } else {
            arrHoten.push($(this).val());
            flag1 = true;
        }
    });

    $(".gioitinh").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng chọn giới tính.');
            flag2 = false;
            return;
        } else {
            arrGioiTinh.push($(this).val());
            flag2 = true;
        }
    });

    $(".dienthoai").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập điện thoại.');
            flag3 = false;
            return;
        } else if (PhoneRegex.test($(this).val()) === false) {
            fireErr('Số điện thoại đã nhập không hợp lệ.');
            flag3 = false;
            return;
        } else {
            arrDienThoai.push($(this).val());
            flag3 = true;
        }
    });

    $(".cmnd").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập cmnd/passport.');
            flag4 = false;
            return;
        } else if ($(this).val().length <= 6) {
            fireErr('Cmnd/passport nhập sai.');
            flag4 = false;
            return;
        } else {
            arrCmnd.push($(this).val());
            flag4 = true;
        }
    });
    // alert(arrHoten);
    if (flag1 == true && flag2 == true && flag3 == true && flag4 == true && arrHoten.length === $(".hotenkh").length && arrGioiTinh.length === $(".gioitinh").length && arrDienThoai.length === $(".dienthoai").length && arrGioiTinh.length === $(".gioitinh").length) {
        alert(1111);
        // let form = new FormData();

        // form.append('hotenkh', arrHoten);
        // form.append('gioitinh', arrGioiTinh);
        // form.append('dienthoai', arrDienThoai);
        // form.append('cmnd', arrCmnd);
        // form.append('Action', 'hoadon');
        // await $.ajax({
        //     type: 'POST',
        //     url: 'controllers/ajax/hoadon.php',
        //     dataType: 'JSON',
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     data: form,
        //     success: function(response) {
        //         if (response.StatusCode == 1) {
        //             Loading.close();
        //             Swal.fire({
        //                 timer: 3000,
        //                 type: 'success',
        //                 title: 'Thành công',
        //                 text: 'Thêm hoá đơn thành công, đang chuyển hướng về danh sách hoá đơn.',
        //                 showConfirmButton: false,
        //                 showCancelButton: false,
        //                 icon: "success"
        //             });

        window.location.href = ('?ctrl=hoadon&act=index');
        //         }
        //     }
        // });
    } else {
        return false;
    }
});