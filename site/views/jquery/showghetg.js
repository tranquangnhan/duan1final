ClickBtn();
Pusher.logToConsole = true;

var pusher = new Pusher('166bbd5af4fcbf088045', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', async function(data) {
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
            } else {
                alert("lỗi")
            }
        }
    });
});