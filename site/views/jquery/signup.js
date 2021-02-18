let UserLoginRegex = /^[a-zA-Z0-9]+$/i;
let MailRegex = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
let PhoneRegex = /((09|03|07|08|05)+([0-9]{8})\b)/i;
// giới hạn đầu số
// tìm một số từ 0-9 8 số
// tìm một từ giống vậy không phân biệt hoa thường 


// validate user, phone, mail

function fireErr(text) {
    Swal.fire({
        type: 'error',
        title: 'Oops...',
        text: text,
        showConfirmButton: true,
        showCancelButton: false,
        icon: 'error',
    });
}
$("#signup").click(async function() {
    let username2 = $("#name2").val();
    let dienthoai2 = $("#dienthoai2").val();
    let email2 = $("#email2").val();
    let passWord2 = $("#password2").val();
    let rePassWord2 = $("#repassword2").val();
    let Loading = Swal.fire({
        allowEscapeKey: false,
        title: 'Đang kiểm tra',
        allowOutsideClick: false,
        showConfirmButton: false,
        text: 'Vui lòng chờ trong giây lát...',
        imageUrl: 'views/img/Default/Loading.gif',
    });
    if (username2 === "" || dienthoai2 === "" || email2 === "" || passWord2 === "" || rePassWord2 === "") {
        fireErr('Vui lòng nhập đầy đủ thông tin');
        return;
    }
    if (UserLoginRegex.test(username2) === false) {
        fireErr('Tên đăng nhập không hợp lệ');
        return;
    }
    if (PhoneRegex.test(dienthoai2) === false) {
        fireErr('Số điện thoại không hợp lệ.');
        return;
    }
    if (MailRegex.test(email2) === false) {
        fireErr('Địa chỉ email không hợp lệ hoặc để trống');
        return;
    }
    if (passWord2.length < 6) {
        fireErr('Mật khẩu không được nhỏ hơn 6 ký tự.');
        return;
    }
    if (rePassWord2 === "") {
        fireErr('Vui lòng xác nhận mật khẩu.');
        return;
    }


    if (rePassWord2 !== "" && passWord2 !== "" && rePassWord2 !== passWord2) {
        fireErr('Mật khẩu xác nhận không chính xác');
        return;
    }

    let CheckUserEmailIsExist = new FormData();

    CheckUserEmailIsExist.append('Login', username2); //tên
    CheckUserEmailIsExist.append('email', email2);
    CheckUserEmailIsExist.append('phone', dienthoai2);
    CheckUserEmailIsExist.append('Action', 'CheckEmailNamePhoneExist'); //check tài khoản đã tồn tại hay chưa


    await $.ajax({
        type: 'POST',
        url: 'controllers/ajax/loginsignup.php',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        data: CheckUserEmailIsExist,
        success: async function(response) {
            if (response.StatusCode === 1) {
                Loading.close();
                fireErr('Tài khoản đã tồn tại trên hệ thống.');
            }
            if (response.StatusCode === 2) {
                Loading.close();
                fireErr('Email đã tồn tại trên hệ thống.');
            }
            if (response.StatusCode === 3) {
                Loading.close();
                fireErr('Số điện thoại đã tồn tại trên hệ thống.');
            }
            if (response.StatusCode === 0) {

                let signup = new FormData();
                signup.append('username', username2); //tên
                signup.append('email', email2); //tên
                signup.append('phone', dienthoai2);
                signup.append('password', passWord2); //tên
                signup.append('Action', 'signup'); //check tài khoản đã tồn tại hay chưa
                await $.ajax({
                    type: 'POST',
                    url: 'controllers/ajax/loginsignup.php',
                    dataType: 'JSON',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: signup,
                    success: function(response) {
                        if (response.StatusCode === 1) {
                            Loading.close();

                            Swal.fire({
                                //timer: 3000,
                                type: 'success',
                                title: 'Đăng ký thành công.',
                                text: 'Chúng tôi đã gửi thư kích hoạt tới địa chỉ ' + email2 + '. Vui lòng kích hoạt tài khoản.',
                                showConfirmButton: true,
                                showCancelButton: false,
                            });
                        }
                    }
                });
            }
        },
        error: function() {
            Swal.fire({
                timer: 3000,
                type: 'error',
                title: 'Có lỗi xảy ra trong quá trình xử lý dữ liệu. Vui lòng thử lại sau.',
                showConfirmButton: false,
                showCancelButton: false,
            });
        }
    });
})