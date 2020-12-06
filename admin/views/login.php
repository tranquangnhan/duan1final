
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/admin/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <img src="views/img/01.png" alt="">
            </div>
            <div class="col-lg-4 mt-5">
                <h1>Đăng nhập</h1>
                <p>Chào mừng bạn đến với trang web hiện đại nhất hiện nay!</p>
                <div class="btn-face mt-4">
                    <ul class="yoo-social-area yoo-style1 yoo-mp0">
                        <li><a href="https://www.facebook.com/dialog/oauth?client_id=782652022521704&redirect_uri=http://localhost/duan1final/admin/controllers/callback.php&scope=public_profile" class="btn btn-primary  btn-dn"><i class="fa fa-facebook-f mr-4"></i><span>Đăng Nhập Với Facebook</span></a></li>
                        <li><a href="#" class="btn btn-danger mt-3  btn-dn"><i class="fa fa-google mr-4"></i><span>Đăng Nhập Với Google</span></a></li>
                    </ul>
                </div>
                <div class="yoo-form-separator mt-4">Or</div>
                <form action="" method="post" >
                    <div class="row">
                        <?php if(isset($canhbao)){ ?>
                        <div class="col-lg-12">
                            <div class="alert alert-danger" role="alert">
                              <p class="alert-heading"><?php echo $canhbao;?> </p>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="col-lg-12">
                        <?php middleWare(); ?>
                            <div class="form-group level-up form-group-md">
                                <label for="email">Tên Tài Khoản</label>
                                <input type="text" class="form-control" id="email" name="user" placeholder="Tranquangnhan1606@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group level-up form-group-md">
                                <label for="password">Mật Khẩu</label>
                                <input type="password" class="form-control" name="pass" id="password" value="nhan1222">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="yoo-forget-pass-wrap">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="gridCheck" checked>
                                        <label class="custom-control-label" for="gridCheck">
                                <span class="custom-control-shadow"></span>Nhớ Tài Khoản
                                </label>
                                    </div>
                                    <a href="#" class="yoo-form-btn yoo-style2">Quên Mật Khẩu?</a>
                                </div>
                            </div>
                            <input href="#" class="btn btn-primary btn-dn" type="submit" value="Đăng Nhập" name="login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>