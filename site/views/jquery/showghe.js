ClickBtn();
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('166bbd5af4fcbf088045', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
    let idChuyenBay = $("#idcb").val();
    var showGhe = new FormData();

    showGhe.append('Action', 'showghetg');
    showGhe.append('idcb', idChuyenBay);
    $.ajax({
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
            }
        }
    });
});

ClickBtn();
// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('166bbd5af4fcbf088045', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', async function(data) {
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
                ClickBtn();
            }
        },
        error: function() {
            Loading.close();
            Swal.fire({
                timer: 3000,
                type: 'error',
                title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng thử lại sau.',
                showConfirmButton: false,
                showCancelButton: false,
            });
        }
    });
});