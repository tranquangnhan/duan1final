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
    var arrHoten = [];
    var arrGioiTinh = [];
    var arrDienThoai = [];
    var arrCmnd = [];

    $(".hotenkh").each(function(index, element) {
        arrHoten.push($(this).val());
    });

    $(".gioitinh").each(function(index, element) {
        arrGioiTinh.push($(this).val());
    });

    $(".dienthoai").each(function(index, element) {
        arrDienThoai.push($(this).val());
    });

    $(".cmnd").each(function(index, element) {
        arrCmnd.push($(this).val());
    });

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
});