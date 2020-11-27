async function chonVe(idChuyenBay) {
    var loaighe = $("#loaighe").val();
    let Loading = Swal.fire({ // sweetAlert
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: '../site/views/img/Default/Loading.gif',
    });
    if (idChuyenBay) {
        Loading.close();
        window.location.href = ('?ctrl=timve&act=chonve&idcb=' + idChuyenBay + '&loaighe=' + loaighe);
    }
}

function ClickBtn() {
    $('.l-ghe-thuonggia').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {
            Events.preventDefault();

            let ID = ThisBox.text();
            let idchuyenbay = $("#idcb").val();
            let pushThemGhe = new FormData();

            pushThemGhe.append('id', ID); //tên
            pushThemGhe.append('Action', 'setttghetg');
            pushThemGhe.append('idchuyenbay', idchuyenbay);
            await $.ajax({
                type: "POST",
                url: "controllers/ajax/themghe.php",
                cache: false,
                contentType: false,
                processData: false,
                data: pushThemGhe,
                success: function(response) {

                    $("#kq").html(JSON.parse(response).html);
                    ClickBtn()
                }
            });
        })
    })

    $('.l-ghe-phothong').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {
            Events.preventDefault();

            let ID = ThisBox.text();
            let idchuyenbay = $("#idcb").val();
            let pushThemGhe = new FormData();
            pushThemGhe.append('id', ID); //tên
            pushThemGhe.append('Action', 'setttghept');
            pushThemGhe.append('idchuyenbay', idchuyenbay);
            await $.ajax({
                type: "POST",
                url: "controllers/ajax/themghe.php",
                cache: false,
                contentType: false,
                processData: false,
                data: pushThemGhe,
                success: function(response) {
                    alert(response);
                    $("#kq2").html(JSON.parse(response).html);
                    ClickBtn()
                }
            });
        })
    })

}
ClickBtn()






$("#tieptucthuong").click(function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn Có Chắc Không?',
        text: "Lưu thay đổi vị trí vé thường!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Lưu!'
    }).then((result) => {
        if (result.isConfirmed == true) {
            Swal.fire(
                'Đã lưu!',
                'Chọn tiếp dữ liệu vé thường.',
                'success'
            )
            window.location = '?ctrl=hoadon&act=add';
        }
    })
});