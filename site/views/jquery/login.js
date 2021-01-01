window.onload = function() {
    function fireErr(text) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: text,
            showConfirmButton: true,
            showCancelButton: false,
            icon: "error"
        });
    }
    // khi click vào login
    $("#login").click(async function(e) {
        e.preventDefault();
        let userName = $("#username").val();
        let passWord = $("#password").val();
        let remember = $("#remember").val();

        let Loading = Swal.fire({ // sweetAlert
            allowEscapeKey: false,
            title: 'Đang kiểm tra',
            allowOutsideClick: false,
            showConfirmButton: false,
            text: 'Vui lòng chờ trong giây lát...',
            imageUrl: 'views/img/Default/Loading.gif',
        });

        if (userName !== "" && passWord !== "") { // check nếu có tài khoản và mật khẩu
            let CheckUserIsExist = new FormData();

            CheckUserIsExist.append('Login', userName); //tên
            CheckUserIsExist.append('Action', 'CheckExist'); //check tài khoản đã tồn tại hay chưa
            // khởi tạo ajax

            await $.ajax({
                type: 'POST',
                url: 'controllers/ajax/loginsignup.php',
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: CheckUserIsExist,
                success: async function(response) {
                    if (response.StatusCode === 1) {
                        Loading.close();
                        Swal.fire({
                            type: 'error',
                            title: 'Lỗi.',
                            text: 'Tài khoản không tồn tại trên hệ thống.',
                            showConfirmButton: true,
                            showCancelButton: false,
                            icon: 'error',
                        });
                    } else if (response.StatusCode === 0) {
                        let LoginData = new FormData();

                        LoginData.append('Login', userName); //gửi lên user và pass để kiểm tra
                        LoginData.append('Password', passWord);
                        LoginData.append('Remember', remember);
                        LoginData.append('Action', 'Login');

                        await $.ajax({
                            type: 'POST',
                            url: 'controllers/ajax/loginsignup.php',
                            dataType: 'JSON',
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: LoginData,
                            success: function(response) {
                                if (response.StatusCode === 0) {
                                    Swal.fire({
                                        timer: 3000,
                                        type: 'success',
                                        title: 'Thành công',
                                        text: 'Đăng nhập hoàn tất. Đang chuyển hướng về trang chủ.',
                                        showConfirmButton: false,
                                        showCancelButton: false,
                                        icon: "success"
                                    });

                                    window.location.href = ('?act=home');
                                } else if (response.StatusCode === 1) {
                                    Swal.fire({
                                        type: 'error',
                                        title: 'Lỗi.',
                                        text: 'Mật khẩu không chính xác hoặc tài khoản chưa được kích hoạt.',
                                        showConfirmButton: true,
                                        showCancelButton: false,
                                        icon: "error"
                                    });

                                }
                            }
                        });
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

        } else if (userName === "" && passWord === "") {
            fireErr('Vui lòng nhập tên đăng nhập hoặc mật khẩu.');
            return;
        } else if (userName === "") {
            fireErr('Vui lòng nhập tên đăng nhập.');
            return;
        } else if (passWord === "") {
            fireErr('Vui lòng nhập mật khẩu.');
            return;
        }
    });
}