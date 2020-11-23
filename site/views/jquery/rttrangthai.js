Pusher.logToConsole = true;

var pusher = new Pusher('166bbd5af4fcbf088045', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
    $.ajax({
        type: 'POST',
        url: '../autochuyenbay.php',
        data: { 'Action': 'showkqghe' },
        success: function(response) {
            kq = JSON.parse(response).StatusCode;

            for (let j = 0; j < $(".giodi").length; j++) {
                $(".ngaydi")[j].innerHTML = kq[j].ngaydi;
                $(".giodi")[j].innerHTML = kq[j].giodi;
                $(".gioden")[j].innerHTML = kq[j].gioden;
            }


        }
    });
});

$.ajax({
    type: 'POST',
    url: '../autochuyenbay.php',
    data: { 'Action': 'getkqghe' },
    success: function(response) {}
});
$.ajax({
    type: 'POST',
    url: '../autochuyenbay.php',
    data: { 'Action': 'setttghe' },
    success: function(response) {}
});