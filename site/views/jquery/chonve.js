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
        window.location.href = ('index.php?act=chonve&idcb=' + idChuyenBay + '&loaighe=' + loaighe);
    }
}

// set session vé một chiều và vé khứ hồi
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
    })

    .then(async(result) => {
        if (result.isConfirmed == true) {

            Swal.fire(
                'Đã lưu!',
                'Chọn tiếp dữ liệu vé thường.',
                'success'
            )

            .then(async(result) => {
                if (result.isConfirmed == true) {
                    let checkKhuHoi = new FormData();
                    checkKhuHoi.append('Action', 'checkkhuhoi');

                    await $.ajax({
                        type: "POST",
                        url: "controllers/ajax/chonghe.php",
                        dataType: 'JSON',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: checkKhuHoi,
                        success: async function(response) {
                            if (response.StatusCode == '1') {
                                var arr = [];
                                let idchuyenbay = $("#idcb").val();
                                //lấy tất cả ghế đánh dấu
                                $(".l-ghe-phothong.l-ghe-active").each(function(index, element) {
                                    var idGhe = $(this);
                                    idGhe = idGhe.html();
                                    arr.push(idGhe);
                                });

                                //push
                                await $.ajax({
                                    type: "POST",
                                    url: "controllers/ajax/chonghe.php",
                                    data: { idghe: arr, Action: 'chonghe', hangghe: '1', idcb: idchuyenbay },
                                    success: function(response) {}
                                });
                                window.location.href = ('index.php?' + response.urlve + '&khuhoi=1');
                            }
                            if (response.StatusCode == '0') {
                                var arrkh = [];
                                let idchuyenbaykh = $("#idcb").val();
                                //lấy tất cả ghế đánh dấu
                                $(".l-ghe-phothong.l-ghe-active").each(function(index, element) {
                                    var idGhe = $(this);
                                    idGhe = idGhe.html();
                                    arrkh.push(idGhe);
                                });

                                //push
                                await $.ajax({
                                    type: "POST",
                                    url: "controllers/ajax/chonghe.php",
                                    data: { idghekh: arrkh, Action: 'chonghekhuhoi', hangghekh: '1', idcbkh: idchuyenbaykh },
                                    success: function(response) {}
                                });
                                window.location.href = ('?act=thanhtoan');
                            }
                        }
                    });

                }
            })
        }
    })
});

// thêm hoá đơn ghế thương gia
$("#tieptucthuonggia").click(function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn Có Chắc Không?',
        text: "Lưu thay đổi vị trí vé thường!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Lưu!'
    })

    .then(async(result) => {
        if (result.isConfirmed == true) {

            Swal.fire(
                'Đã lưu!',
                'Chọn tiếp dữ liệu vé thường.',
                'success'
            )

            .then(async(result) => {
                if (result.isConfirmed == true) {
                    let checkKhuHoi = new FormData();
                    checkKhuHoi.append('Action', 'checkkhuhoi');

                    await $.ajax({
                        type: "POST",
                        url: "controllers/ajax/chonghe.php",
                        dataType: 'JSON',
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: checkKhuHoi,
                        success: async function(response) {
                            if (response.StatusCode == '1') {
                                var arr = [];
                                let idchuyenbay = $("#idcb").val();
                                //lấy tất cả ghế đánh dấu
                                $(".l-ghe-thuonggia.l-ghe-active").each(function(index, element) {
                                    var idGhe = $(this);
                                    idGhe = idGhe.html();
                                    arr.push(idGhe);
                                });

                                //push
                                await $.ajax({
                                    type: "POST",
                                    url: "controllers/ajax/chonghe.php",
                                    data: { idghe: arr, Action: 'chonghe', hangghe: '2', idcb: idchuyenbay },
                                    success: function(response) {}
                                });

                                window.location.href = ('index.php?' + response.urlve + '&khuhoi=1');
                            }
                            if (response.StatusCode == '0') {
                                var arrkh = [];
                                let idchuyenbaykh = $("#idcb").val();
                                //lấy tất cả ghế đánh dấu
                                $(".l-ghe-thuonggia.l-ghe-active").each(function(index, element) {
                                    var idGhe = $(this);
                                    idGhe = idGhe.html();
                                    arrkh.push(idGhe);
                                });

                                //push
                                await $.ajax({
                                    type: "POST",
                                    url: "controllers/ajax/chonghe.php",
                                    data: { idghekh: arrkh, Action: 'chonghekhuhoi', hangghekh: '2', idcbkh: idchuyenbaykh },
                                    success: function(response) {}
                                });
                                window.location.href = ('?act=thanhtoan');
                            }
                        }
                    });

                }
            })
        }
    })
});