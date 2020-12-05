window.onload = function() {
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
                    return;
                })
            })


            let ThisBox = $(this);
            ThisBox.click(async function(Events) {
                Events.preventDefault();
                let MaxSheet = $('.l-ghe-active.l-ghe-thuonggia').length;
                let IsRemoveSelected = (ThisBox.hasClass('l-ghe-active'));

                if (MaxSheet >= 5 && IsRemoveSelected === false) {
                    fireErr('Bạn chỉ được đặt tối đa 5 vé !');
                    return;
                } else {


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


        Pusher.logToConsole = true;

        var pusher = new Pusher('166bbd5af4fcbf088045', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', async function(data) {

            var Loading = Swal.fire({ // sweetAlert
                allowEscapeKey: false,
                title: 'Đang kiểm tra',
                allowOutsideClick: false,
                showConfirmButton: false,
                text: 'Vui lòng chờ trong giây lát...',
                imageUrl: 'views/img/Default/Loading.gif',
            });

            let idChuyenBay = $("#idcb").val();
            var showGhe = new FormData();

            showGhe.append('Action', 'showghetg');
            showGhe.append('idcb', idChuyenBay);
            await $.ajax({
                type: "POST",
                url: 'controllers/ajax/chonghe.php',
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: showGhe,
                success: function(response) {
                    if (response.StatusCode === 1) {
                        $("#ghetg").html(response.html);
                        ClickBtn();
                        Loading.close();
                    }
                }
            });
        });
    }
    ClickBtn()

    function ClickBtn2() {
        $('.l-ghe-phothong').each(function() {
            let ThisBox = $(this);
            ThisBox.click(async function(Events) {
                Events.preventDefault();
                let MaxSheet = $('.l-ghe-active.l-ghe-phothong').length;

                let IsRemoveSelected = (ThisBox.hasClass('l-ghe-active'));

                if (MaxSheet >= 5 && IsRemoveSelected === false) {
                    fireErr('Bạn chỉ được đặt tối đa 5 vé !');
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
                        success: function(Data) {

                        }
                    });
                }

            })
        })
    }

    Pusher.logToConsole = true;

    var pusher = new Pusher('166bbd5af4fcbf088045', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', async function(data) {

        let Loading = Swal.fire({ // sweetAlert
            allowEscapeKey: false,
            title: 'Đang kiểm tra',
            allowOutsideClick: false,
            showConfirmButton: false,
            text: 'Vui lòng chờ trong giây lát...',
            imageUrl: 'views/img/Default/Loading.gif',
        });

        let idChuyenBay = $("#idcb").val();
        var showGhe = new FormData();

        showGhe.append('Action', 'showghethuong');
        showGhe.append('idcb', idChuyenBay);
        await $.ajax({
            type: "POST",
            url: 'controllers/ajax/chonghe.php',
            dataType: 'JSON',
            cache: false,
            contentType: false,
            processData: false,
            data: showGhe,
            success: function(response) {
                if (response.StatusCode === 1) {
                    $("#ghethuong").html(response.html);
                    ClickBtn2();
                    Loading.close()
                }
            }
        });
    });
    ClickBtn2()
}