$("#name").change(function(e) {
    e.preventDefault();
    checkName();
});

function checksignin() {
    checkName();
    checkEmail();
}

function checkName() {
    var name = $("#name").val();
    if (name) {
        $.ajax({
            type: "post",
            url: "controllers/checksign.php",
            data: { name: name },
            success: function(data) {
                if (data) {
                    $("#canhbao").html(data);
                    $("#name").focus();
                    return false;
                } else {
                    return true;
                }
            }
        })
    }
}

$("#email").change(function(e) {
    checkEmail();
});

function checkEmail() {
    var email = $("#email").val();
    if (email) {
        $.ajax({
            type: "post",
            url: "controllers/checksign.php",
            data: { email: email },
            success: function(data) {
                if (data) {
                    $("#canhbao2").html(data);
                    $("#email").focus();
                    return false;
                } else {
                    return true;
                }
            }
        })
    }
}