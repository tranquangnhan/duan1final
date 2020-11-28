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
                    $("#kq2").html(JSON.parse(response).html);
                    ClickBtn()
                }
            });
        })
    })

}
ClickBtn()

var arr = [];
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

            let idchuyenbay = $("#idcb").val();
            $(".l-ghe-phothong.l-ghe-active").each(function(index, element) {
                var idGhe = $(this);
                idGhe = idGhe.html();
                arr.push(idGhe);
            });
            //push
            $.ajax({
                type: "POST",
                url: "controllers/ajax/chonghe.php",
                data: { idghe: arr, Action: 'chonghe', hangghe: '1', idcb: idchuyenbay },
                success: function(response) {}
            });
            // send data
            window.location = '?ctrl=hoadon&act=add';
        }
    })
});