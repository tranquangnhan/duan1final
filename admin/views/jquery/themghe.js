function ClickBtn() {
    $('.tg').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {
            Events.preventDefault();

            let ID = ThisBox.text();
            let idmaybay = $("#idmaybay").text();
            let pushThemGhe = new FormData();

            pushThemGhe.append('id', ID); //tên
            pushThemGhe.append('Action', 'setttghetg');
            pushThemGhe.append('idmaybay', idmaybay);
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

    $('.pt').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {
            Events.preventDefault();

            let ID = ThisBox.text();
            let idmaybay = $("#idmaybay").text();
            let pushThemGhe = new FormData();

            pushThemGhe.append('id', ID); //tên
            pushThemGhe.append('Action', 'setttghept');
            pushThemGhe.append('idmaybay', idmaybay);
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

}
ClickBtn()




$("#xacnhan").click(function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Bạn Có Chắc Không?',
        text: "Lưu thay đổi vị trí vé thương gia!",
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
            window.location = '?ctrl=ve&act=chonghethuong';
        }
    })
});

$("#hoanthanh").click(function(e) {
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
            window.location = '?ctrl=ve&act=done&done=1';
        }
    })
});