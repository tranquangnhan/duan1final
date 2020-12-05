let UserLoginRegex = /^[a-zA-Z0-9]+$/i;
let MailRegex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
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



    $(".hotenkh").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập họ tên.');
            return;
        } else if (UserLoginRegex.test($(this).val()) === false) {
            fireErr('Tên không hợp lệ');
            return;
        } else {
            arrHoten.push($(this).val());
        }
    });

    $(".gioitinh").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập giới tính.')
            return;
        } else {
            arrGioiTinh.push($(this).val());
        }
    });

    $(".dienthoai").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập điện thoại.')
            return;
        } else if (PhoneRegex.test($(this).val())) {
            fireErr('Số điện thoại đã nhập không hợp lệ.')
            return;
        } else {
            arrDienThoai.push($(this).val());
        }
    });

    $(".cmnd").each(function(index, element) {
        if ($(this).val() === '') {
            fireErr('Vui lòng nhập cmnd/passport.')
            return;
        } else {
            arrCmnd.push($(this).val());
        }
    });
    // alert(arrHoten);
    if (arrHoten !== "" && arrGioiTinh != "" && arrDienThoai != "" && arrCmnd != "") {
        let form = new FormData();

        form.append('hotenkh', arrHoten);
        form.append('gioitinh', arrGioiTinh);
        form.append('dienthoai', arrDienThoai);
        form.append('cmnd', arrCmnd);
        form.append('Action', 'hoadon');
        await $.ajax({
            type: 'POST',
            url: 'controllers/ajax/hoadon.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: form,
            success: function(response) {
                if (response.StatusCode == 1) {
                    Loading.close();
                    Swal.fire({
                        timer: 3000,
                        type: 'success',
                        title: 'Thành công',
                        text: 'Thêm hoá đơn thành công, đang chuyển hướng về danh sách hoá đơn.',
                        showConfirmButton: false,
                        showCancelButton: false,
                        icon: "success"
                    });

                    window.location.href = ('?ctrl=hoadon&act=index');
                }
            }
        });
    }
});