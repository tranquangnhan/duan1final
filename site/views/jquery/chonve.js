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
$("#huyghe").click(function(e) {
    e.preventDefault();
    Swal.fire({
            title: 'Bạn Có Chắc Không?',
            text: "Huỷ ghế đã chọn",
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
                    'Huỷ các ghế đã đặt.',
                    'success'
                )

                .then(async(result) => {
                    if (result.isConfirmed == true) {
                        if ($(".l-ghe-phothong.l-ghe-active")) {

                            var arr = [];
                            let idchuyenbay = $("#idcb").val();

                            $(".l-ghe-phothong.l-ghe-active").each(function(index, element) {
                                var idGhe = $(this);
                                idGhe = idGhe.html();
                                arr.push(idGhe);
                            });

                            await $.ajax({
                                type: "POST",
                                url: "controllers/ajax/chonghe.php",
                                data: { idghe: arr, Action: 'huyghe', idcb: idchuyenbay },
                                success: function(response) {
                                    if (JSON.parse(response).StatusCode == 1) {
                                        window.location.reload();
                                    }
                                }
                            });
                        }
                        if ($(".l-ghe-thuonggia.l-ghe-active")) {
                            var arrkh = [];
                            let idchuyenbaykh = $("#idcb").val();

                            $(".l-ghe-thuonggia.l-ghe-active").each(function(index, element) {
                                var idGhe = $(this);
                                idGhe = idGhe.html();
                                arrkh.push(idGhe);
                            });

                            await $.ajax({
                                type: "POST",
                                url: "controllers/ajax/chonghe.php",
                                data: { idghekh: arrkh, Action: 'huyghekh', idcbkh: idchuyenbaykh },
                                success: async function(response) {
                                    if (JSON.parse(response).StatusCode == 1) {
                                        window.location.reload();
                                    }
                                }
                            });
                        }
                    }
                })
            }
        })
});
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
                            // đây là lấy ghế chuyến khứ hồi
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
                            // lấy là lấy ghế chuyến 1 chiều
                            if (response.StatusCode == '0') {

                                var arrkh = []; // khi đó mảng này chứa [6,7]
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
                                    success: async function(response) {
                                        // kiểm tra xem ghế đặt có bằng số lượng k
                                        let checkSoLuongGhe = new FormData();
                                        checkSoLuongGhe.append('Action', 'checkslghe')
                                        await $.ajax({
                                            type: 'POST',
                                            url: 'controllers/ajax/chonghe.php',
                                            dataType: 'JSON',
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            data: checkSoLuongGhe,
                                            success: function(response) {
                                                if (response.StatusCode == 1) {
                                                    Swal.fire(
                                                        'Lỗi!',
                                                        'Số lượng ghế đi và ghế khứ hồi không bằng nhau.(Số ghế đi: ' + response.slghe + ')',
                                                        'error'
                                                    )
                                                } else if (response.StatusCode == 0) {
                                                    window.location.href = ('?act=thanhtoan');
                                                }
                                            }
                                        });
                                    }
                                });
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
        text: "Lưu thay đổi vị trí vé thương gia!",
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