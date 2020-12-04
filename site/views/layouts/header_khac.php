<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800|Poppins:300i,400,300,700,400i,500|Ubuntu:300i,400,300,700,400i,500|Raleway:400,500,600,700" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="views/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="views/fontawesome-free-5.13.0-web/css/all.css">
  <title>Dự Án 1</title>
  <!-- css  -->
  <!-- link css awselect -->
  <link href="views/awesome-select-master/package/css/awselect.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="views/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="views/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
  <link rel="stylesheet" href="views/css/long/animate.css"/>
  <link rel="stylesheet" href="views/css/long/about.css">
  <link rel="stylesheet" href="views/css/long/contact.css">
  <link rel="stylesheet" href="views/css/long/danhsachve.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.css">
  <link rel="stylesheet" href="views/css/dat/blog.css">
  <link rel="stylesheet" href="views/css/nhan/SweetAlert2.css">
  
  <link rel="stylesheet" href="views/css/long/home.css">
  <link rel="stylesheet" href="views/css/long/home_khac.css">
  <!-- end css -->
  <!-- include jquery -->
     <script src="views/jquery/jquery.js" type="text/javascript"></script>
    <script src="views/js/blogdetail.js" type="text/javascript"></script>
    <script src="views/js/home.js" type="text/javascript"></script>
    <script src="views/jquery/SweetAlert2.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="views/jquery/chonghe.js" type="text/javascript"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <!-- end include jquery -->
   
</head>
<body>
    <div class="l-bt-fixed-to-top" id="bt-to-top">
        <div class="bt-icon"><i class="fab fa-telegram-plane"></i> TOP</div>
    </div>
    <header>
        <div class="background-blue-color pd-tb-2px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white line_h_28">MỘT PHÚT LÀ XONG</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <li class="list-inline-item"><a class="facebook text-white" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube text-white" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin text-white" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google text-white" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter text-white" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss text-white" href="#"><i class="fas fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm d-none d-sm-block line_h_28">
                        <ul class="float-right margin-0px text-white mr-0">
                            <?php 
                            if(isset($_SESSION['sid'])){
                                echo '<li class="list-inline-item  padding-right-10px"><a class="text-white" href="?act=showhs"><i class="fa fa-lock padding-right-5px"></i>'.$_SESSION['suser'].'</a></li>
                                <li class="list-inline-item"><a class="text-white" href="?act=user&logout=1"><i class="fa fa-user-plus padding-right-5px"></i> Đăng Xuất</a></li>';
                            }else{
                                echo '<li class="list-inline-item  padding-right-10px"><a class="text-white" href="?act=signup"><i class="fa fa-lock padding-right-5px"></i> Đăng Ký</a></li>
                                <li class="list-inline-item"><a class="text-white" href="?act=login"><i class="fa fa-user-plus padding-right-5px"></i> Đăng Nhập</a></li>';
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img src="views/img/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9 col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="<?=SITE_URL?>?act=home">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        CHUYẾN BAY
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Flights List View</a>
                                        <a class="dropdown-item" href="#">Flights Grid View</a>
                                        <a class="dropdown-item" href="#">Flights Grid View 2</a>
                                        <a class="dropdown-item" href="#">Flights Details</a>
                                        <a class="dropdown-item" href="#">Flights Booking</a>
                                        <a class="dropdown-item" href="#">Flights Thanks page</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=blog">BÀI VIẾT</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="pd-r-0" style="padding-right: 0px;" href="<?=SITE_URL?>?act=about">VỀ CHÚNG TÔI</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-output-fixed" id="l-menu-fixed">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img src="views/img/logo.png" alt=""></a>
                        <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9  col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="<?=SITE_URL?>?act=home">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        CHUYẾN BAY
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Flights List View</a>
                                        <a class="dropdown-item" href="#">Flights Grid View</a>
                                        <a class="dropdown-item" href="#">Flights Grid View 2</a>
                                        <a class="dropdown-item" href="#">Flights Details</a>
                                        <a class="dropdown-item" href="#">Flights Booking</a>
                                        <a class="dropdown-item" href="#">Flights Thanks page</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="<?=SITE_URL?>?act=blog">BÀI VIẾT</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="pd-r-0"href="<?=SITE_URL?>?act=about">VỀ CHÚNG TÔI</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php 
                                        if(isset($_SESSION['sid'])){
                                            echo '<a class="dropdown-item" href="?act=showhs">'.$_SESSION['suser'].'</a>
                                                 <a class="dropdown-item" href="?act=user&logout=1">Đăng xuất</a>';
                                        }else{
                                            echo '<a class="dropdown-item" href="?act=signup">Đăng ký</a>
                                                 <a class="dropdown-item" href="?act=login">Đăng nhập</a>';
                                        } ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   