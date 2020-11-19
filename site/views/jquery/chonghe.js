// window.onload = function() {
function ClickBtn() {
    function fireErr(text) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: text,
            showConfirmButton: true,
            showCancelButton: false,
        });
    }
    $('.l-ghe-thuonggia').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {

            let Loading = Swal.fire({ // sweetAlert
                allowEscapeKey: false,
                title: 'Đang kiểm tra',
                allowOutsideClick: false,
                showConfirmButton: false,
                text: 'Vui lòng chờ trong giây lát...',
                imageUrl: 'views/img/Default/Loading.gif',
            });

            Events.preventDefault();
            let ID = ThisBox.text();
            let idChuyenBay = $("#idcb").val();

            var setGhe = new FormData();
            setGhe.append('Action', 'setghetg');
            setGhe.append('idghe', ID);
            setGhe.append('idcb', idChuyenBay);
            await $.ajax({
                type: "POST",
                url: 'controllers/ajax/chonghe.php',
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: setGhe,
                success: function(Data) {}
            })
        })
    })

}
ClickBtn()

function ClickBtn2() {
    $('.l-ghe-phothong').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {

            Events.preventDefault();
            let ID = ThisBox.text();
            let idChuyenBay = $("#idcb").val();

            var setGhe = new FormData();
            setGhe.append('Action', 'setghethuong');
            setGhe.append('idghe', ID);
            setGhe.append('idcb', idChuyenBay);

            await $.ajax({
                type: "POST",
                url: 'controllers/ajax/chonghe.php',
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: setGhe,
                success: function(Data) {}
            })
        })
    })

}
ClickBtn2()
    // }