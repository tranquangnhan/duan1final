// window.onload = function() {
function fireErr(text) {
    Swal.fire({
        icon: 'error',
        type: 'error',
        title: 'Oops...',
        text: text,
        showConfirmButton: true,
        showCancelButton: false,
    });
}

function ClickBtn() {

    $('.l-ghe-thuonggia').each(function() {
        $('.l-bg-gray').each(function() {
            let ThisBox = $(this);
            ThisBox.click(async function(Events) {
                Events.preventDefault();
                fireErr('Ghế không còn trống !');
            })
        })
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {
            Events.preventDefault();
            if ($('.l-ghe-active.l-ghe-thuonggia').length >= 3) {
                fireErr('Bạn chỉ được đặt tối đa 3 vé !');
                return;
            }

            if (flag === true) {
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
            }
        })
    })

}
ClickBtn()

function ClickBtn2() {
    $('.l-ghe-phothong').each(function() {
        let ThisBox = $(this);
        ThisBox.click(async function(Events) {

            Events.preventDefault();
            if ($('.l-ghe-active.l-ghe-phothong').length >= 3) {
                fireErr('Bạn chỉ được đặt tối đa 3 vé !');
                return;
            } else {
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
                });
            }

        })
    })

}
ClickBtn2()
    // }