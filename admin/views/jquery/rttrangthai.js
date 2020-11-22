Pusher.logToConsole = true;

var pusher = new Pusher('166bbd5af4fcbf088045', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
    let getTTghe = new FormData();
    getTTghe.append('Action', 'getkqghe'); //tên

    $.ajax({
        type: 'POST',
        url: '../autochuyenbay.php',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: getTTghe,
        success: function(response) {
            alert(response.StatusCode)
        }
    });

});

$.ajax({
    type: 'POST',
    url: '../autochuyenbay.php',
    data: { 'Action': 'setttghe' },
    success: function(response) {
        alert(response)
    }
});