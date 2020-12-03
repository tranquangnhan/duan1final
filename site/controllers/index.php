<?php
session_start();
ob_start();
require_once "../autochuyenbay.php";
// code auto
require_once "../system/config.php";
require_once "../system/database.php";
require_once "models/loaihang.php";
require_once "models/user.php";


require_once "../global.php";
include_once '../lib/myfunctions.php';
// require model
require_once "models/loaihang.php";
require_once "models/sanpham.php";
require_once "models/blog.php";
// require_once "views/layouts/header.php";

require_once "models/danhsachve.php";
require_once "models/ve.php";
require_once "models/hoadon.php";
require_once "models/giamgia.php";



    $blog = gettwoblog();
    $showAllSanBay = showAllSanBay();
    // print_r($showAllSanBay);
if (!$_GET['act']) {
    require_once "views/layouts/header_home.php";
}

if (isset($_GET['act'])) {    
    $act = $_GET['act'];
    if($act == 'home'){
        require_once "views/layouts/header_home.php";
    }else{
        require_once "views/layouts/header_khac.php";
    }

    
        switch ($act) {
            case 'home':
                $blog = gettwoblog();
                require_once "views/home.php";
                break;
            case 'about':
                require_once "views/about.php";
                break;
            case 'contact':
                require_once "views/contact.php";
                break;
            case 'danhsachve':   // để sửa css
                $data = showDiemDi2();
                $data1 = showDiemDen2();
                require_once "views/danhsachve.php";
                break;
            case 'blog':
                $page_num = 1;
                $page_size = PAGE_SIZE;
                $getbestBlog = getBestBlog(); // lay blog nhieu luot xem    
                $getDmblog = getDmblog();
                if (isset($_GET['page_num']) == true) {
                    $page_num = $_GET['page_num'];
                }
                settype($page_num, "int");
                if (isset($_GET['iddm']) == true) {
                    $iddm = $_GET['iddm'];
                    $getDmblogbyid = getDmblogbyid($iddm); // để lay name danh muc
                    $allBlog = getBlogByiddm1($iddm, $page_num, $page_size); // lay blog theo id danh muc
                    $total_rows = countBlogbyiddm($iddm);
                    $baseurl = SITE_URL . "?act=blog&iddm=$iddm";
                } else {
                    $allBlog = getallBlog($page_num, $page_size);   // lay tat ca blog
                    $total_rows = countBlog();
                    $baseurl = SITE_URL . "?act=blog";
                }
                if ($page_num <= 0) {
                    $page_num = 1;
                }

                $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
                require_once "views/blog.php";
                break;
            case 'dtBlog':
                if (isset($_GET['idbl']) == true) {
                    $id = $_GET['idbl'];
                } // id blog

                if (isset($_SESSION['suser'])) { // get user
                    $user = $_SESSION['suser'];
                    $userr = getIdbyuser($user);
                } else {
                    $user = '0';
                }
                settype($id, "int");
                $getBlogbyid = getBlogbyid($id); //
                $getbestBlog = getBestBlog(); // blog hay
                $getDmblog = getDmblog();
                $binhluan = showCmt($id);
                $sobinhluan = rowcountCmt($id);
                $idkh = $binhluan[0]['idkh'];
                $getKhbyId = getKhbyId($idkh);

                if (isset($_GET['iddm']) == true) {
                    $iddm = $_GET['iddm'];
                }
                settype($iddm, "int");
                $getBlogByiddm = getBlogByiddm($iddm);
                require_once "views/blogdetail.php";
                break;
            case 'login':
                echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
                require_once "views/login.php";
                echo '<script src="views/jquery/login.js" type="text/javascript"></script>';
                break;
            case 'signup':
                echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
                require_once "views/signup.php";
                echo '<script src="views/jquery/signup.js" type="text/javascript"></script>';
                break;
            case 'user':
                if (isset($_GET['logout']) && ($_GET['logout']) == 1) {
                    unset($_SESSION['sid']);
                    unset($_SESSION['suser']);
                    echo '<script>window.location.href = "index.php"</script>';
                }
                break;
            case 'hsedit':
                echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
                echo '<link rel="stylesheet" href="views/css/buton.scss">';
                $iduser = $_SESSION['sid'];
                $showhs = showhs($iduser);
                if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
                    $_SESSION['idedit'] = $_GET['idedit'];
                    $showkhedit = showkhedit($_SESSION['idedit']);

                    if (isset($_POST['sua']) && ($_POST['sua'])) {
                        $ten = stripTags($_POST['ten']);
                        $email = stripTags($_POST['email']);
                        $id = $_POST['id'];
                        $sdt = $_POST['sdt'];
                        $diachi = stripTags($_POST['diachi']);
                        $thanhpho = stripTags($_POST['thanhpho']);
                        updatehs($id, $ten, $email, $sdt, $diachi, $thanhpho);

                        header("location: index.php?ctrl=index&act=showhs");
                    }
                    require_once "views/hsedit.php";
                }
                break;
            case 'showhs':
                echo ' <link rel="stylesheet" href="views/css/phuong/showhs.css">';
                $iduser = $_SESSION['sid'];
                $showhs = showhs($iduser);
                require_once "views/showhs.php";
                break;
            case 'kichhoat':
                if (isset($_GET['id']) && isset($_GET['rd'])) {//rd -> random
                    $id = $_GET['id'];
                    $rd = $_GET['rd'];
                    $user = user($id);
                    if ($user['randomkey'] == $rd) {
                        setThanhVien($id, $rd);
                        $_SESSION['sid'] = $user['id'];
                        $_SESSION['suser'] = $user['user'];
                        $_SESSION['role'] = 0;
                        $_SESSION['thongbao'] = "kích hoạt tài khoản thành công";
                        echo "<script>alert('Kích hoạt tài khoản thành công');</script>";
                        header("location: index.php?act=userprofile");
                    }
                }
                require_once "views/userprofile.php";
                break;
            case 'thongbao':
                if (isset($_SESSION['thongbao'])) {
                    $thongbao = $_SESSION['thongbao'];
                    unset($_SESSION['thongbao']);
                } else {
                    $thongbao = "Không có gì để thông báo";
                }
                // require_once "views/thongbao.php";
                break;
            case 'quenmk':
                echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
                echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
                echo '<link rel="stylesheet" href="scss/buton.scss">';
                if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {

                    $email = trim(stripTags(test_input($_POST['email'])));
                    $checkEmail = checkEmailTonTai($email);
                    $idUser = $checkEmail['id'];
                    $user = $checkEmail['user'];
                    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                        $thongbao = "$email Nhập Không Hợp Lệ!";
                        $thanhcong = false;
                    } elseif ($email == "") {
                        $thongbao = "Email Chưa Nhập<br>";
                        $thanhcong = false;
                    } elseif (empty($checkEmail)) {
                        $thongbao = "Email Này Không Có<br>";
                        $thanhcong = false;
                    } else {
                        $thanhcong = true;
                        $randomKey = rand(100000, 999999);
                        setcookie("randomKey", $randomKey, time() + 300);
                        // start mail
                        $userName = 'datvemaybayy@gmail.com';
                        $passWord = 'Datvemaybay123';
                        $from = 'datvemaybayy@gmail.com';
                        $title = 'Lấy lại Mật Khẩu';
                        $subject = 'Quên Mật Khẩu';
                        $linkKH = "<a href='" . $_SERVER['HTTP_HOST'] . SITE_URL .
                            "index.php?act=datlaimk&id=%d&rd=%s'>Nhấp vào đây</a>";
                        $linkKH = sprintf($linkKH, $idUser, $randomKey);
                        $body = "<h4>Lấy Lại Mật Khẩu</h4>Đặt Lại mật khẩu: " . $linkKH;
                        sendMail($userName, $passWord, $from, $email, $user, $title, $subject, $body);
                        // end mail
                        $_SESSION['thongbao'] = 'Vui lòng check email để lấy lại mật khẩu!Email chỉ có hiệu lực trong 5 phút';
                        // header("location: index.php?act=thongbao");

                    }
                    if ($thanhcong == false) {
                        $_SESSION['thongbao'] = $thongbao;
                        // header("location: index.php?act=thongbao");
                    }
                }
                require_once "views/quenmk.php";
                break;
            case 'checkin':
                echo ' <link rel="stylesheet" href="views/css/long/trangthanhtoan.css">';

                if (isset($_POST['checkin']) && ($_POST['checkin'])) {
                    $macho = $_POST['madatcho'];
                    $checkin = checkinonl($macho);
                    //  $views ="views/showcheckin.php";
                    require_once "views/checkinonline.php";
                }
                require_once "views/checkinonline.php";


                break;
                
            case 'datlaimk':
                echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
                echo '<link rel="stylesheet" href="views/css/buton.scss">';
                echo ' <link rel="stylesheet" href="views/css/phuong/showhs.css">';
                $iduser = $_SESSION['sid'];
                $showhs = showhs($iduser);
                if (isset($_POST['datlaimk']) && ($_POST['datlaimk'])) {
                    $id = $_GET['id'];
                    $rd = $_GET['rd'];
                    $newpass = $_POST['password'];
                    $user = user($id);
                    if ($_COOKIE["randomKey"] == $rd) {
                        setNewPass($id, $newpass);
                        $_SESSION['sid'] = $user['id'];
                        $_SESSION['suser'] = $user['user'];
                        $_SESSION['role'] = 0;
                        $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                        echo "<script>alert('Mật Khẩu Đã được thay đổi thành công');</script>";
                        header("location: index.php?act=thongbao");
                    } else {
                        $_SESSION['thongbao'] = "Đổi Mật Khẩu không thành công, Email đã hết hạn !";
                        header("location: index.php?act=thongbao");
                    }
                }
                require_once "views/datlaimk.php";
                break;
            case 'khuyenmai':
                $vekhuyenmai=showvekm();
                require_once "views/dsvekhuyenmai.php";
                break;
            case 'userprofile':
                echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
                echo '<link rel="stylesheet" href="views/css/buton.scss">';
                $iduser = $_SESSION['sid'];
                $showhs = showhs($iduser);
                if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                    $idUser = $_SESSION['sid'];
                    $mkcu = trim(stripTags(test_input($_POST['passhientai'])));
                    $user = user($idUser);
                    $pass = trim(stripTags(test_input($_POST['passmoi'])));
                    $repass = trim(stripTags(test_input($_POST['nhaplaipass'])));
                    if ($mkcu == "") {
                        $thongbao = "Password Cũ Chưa Nhập !";
                        $thanhcong = false;
                    } elseif ((strlen($mkcu)) <= 2) {
                        $thongbao = "Password Cũ Quá Ngắn";
                        $thanhcong = false;
                    } elseif ($user['pass'] !== $mkcu) {
                        $thongbao = "Password Cũ Không Đúng!";
                        $thanhcong = false;
                    } elseif ((strlen($pass)) <= 2) {
                        $thongbao = "Password Quá Ngắn";
                        $thanhcong = false;
                    } elseif ((strlen($repass)) <= 2) {
                        $thongbao = "Password Nhập lại Quá Ngắn";
                        $thanhcong = false;
                    } elseif ($pass !== $repass) {
                        $thongbao = "Mật Khẩu Và Mật Khẩu Nhập Lại Không Khớp";
                        $thanhcong = false;
                    } else {
                        $thanhcong = true;
                        setNewPass($idUser, $pass);
                        $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                        // header("location: index.php?act=thongbao");
                    }
                    if ($thanhcong == false) {
                        $_SESSION['thongbao'] = $thongbao;
                        // header("location: index.php?act=thongbao");
                    }
                }
                require_once "views/doimk.php";
                break;
            case 'timkiem';
                $Array = array();
                $showSanBay = showAllSanBay();
                $diemDi = $_GET['diemdi'];
                $diemDen = $_GET['diemden'];
                $ngayDi = $_GET['ngaydi'];
                $loaiGhe = $_GET['loaighe'];

                $nguoiLon = $_GET['nguoilon'];
                $treEm = $_GET['treem'];
                $emBe = $_GET['embe'];
                $soNguoi = $nguoiLon + $treEm;
                $showVeMotChieu1 = showVeMotChieu1($diemDi, $diemDen, $ngayDi);
                include 'views/timkiem.php';
                break;
            case 'chonghe':
                if (isset($_GET['idcb']) && ($_GET['idcb']) > 0) {

                    $idChuyenBay = $_GET['idcb'];

                    echo '<script src="https://js.pusher.com/7.0/pusher.min.js"></script>';
                    echo "<script src='views/jquery/chonghe.js'></script>";
                    echo ' <link rel="stylesheet" href="views/css/long/chonghe.css">';

                    $getGheTg = renderHtml($idChuyenBay, 'ttghethuonggia');
                    $getGheThuong = renderHtml($idChuyenBay, 'ttghethuong');
                    require_once 'views/chonghe.php';

                    echo "<script src='views/jquery/showghe.js'></script>";
                }
                break;
            default:
                require_once "views/home.php";
                break;
        }

    } else {
        require_once "views/home.php";
    }
    require_once "views/layouts/footer.php";
?>