$("#themhd").click(function(e) {
    e.preventDefault();
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
    $.ajax({
        type: 'POST',
        url: 'controllers/ajax/hoadon.php',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: form,
        success: function(response) {
            console.log(response)
        }
    });
});