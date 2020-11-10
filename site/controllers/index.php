<?php
session_start();
ob_start();
require_once "../system/config.php";
require_once "../system/database.php";
require_once "models/loaihang.php";
require_once "../global.php";
include_once '../lib/myfunctions.php';

require_once "views/layouts/header.php";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'home':
            require_once "views/home.php";
            break;
        case 'singleproduct':  
            if(isset($_GET['id'])&&$_GET['id']>0){
                $id = $_GET['id'];
                settype($id,"int");
                $showAllCmt = showAllCmt($id);
                $single = showSingleProduct($_GET['id']);
            }
            require_once 'views/singleproduct.php';
            break;
        case 'cat':
            if(isset($_GET['maloai'])==true&&($_GET['maloai']>0)) $maloai= $_GET['maloai'];
            $pagenum=1;
            if(isset($_GET['pagenum'])==true) $pagenum = $_GET['pagenum'];

            settype($maloai,"int");
            settype($pagenum,"int");
            if($pagenum<=0) $pagenum = 1;
            $pagesize = PAGE_SIZE;
            $ds = getHangHoaTheoLoai($maloai,$pagenum,$pagesize);
            $totalrows = demHangHoaTheoLoai($maloai);
            $baseurl = SITE_URL."index.php?act=cat&maloai={$maloai}";
            $link = taolinks($baseurl,$pagenum,$pagesize,$totalrows);
            require_once 'views/shop.php';
            break;
        case 'login':
          
            if(isset($_POST['login'])&&($_POST['login'])&&($_SERVER["REQUEST_METHOD"] == "POST")){
                        $user = trim(stripTags(test_input($_POST['user'])));
                        $pass = trim(stripTags(test_input($_POST['pass'])));
                        $checkuser = checkUser($user,$pass); 
                        if(is_array($checkuser)){ 
                            if($checkuser['role'] == 1) {
                                $canhbao = 'Hack à! mơ đi';
                            }elseif($checkuser['kichhoat'] == 0){
                                $canhbao = 'Tài Khoản Chưa Được Kích Hoạt, Vui Lòng Check Gmail!';
                            }
                            else{
                                $_SESSION['sid'] = $checkuser['id'];
                                $_SESSION['suser']= $checkuser['user'];
                                $_SESSION['role'] = $checkuser['role'];
                                header('location: index.php');
                            } 
                        }
                        else{
                            $canhbao = 'Cảnh Báo! Username hoặc password không đúng!';
                        }
                        $_SESSION['canhbao'] = $canhbao;
            }
        require_once "views/login.php";
        break;
        case 'signup':
            echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
            if(isset($_POST['signup'])&&($_POST['signup'])&&($_SERVER["REQUEST_METHOD"] == "POST")){
                        $user = trim(stripTags(test_input($_POST['user'])));
                        $pass = trim(stripTags(test_input($_POST['pw1'])));
                        $email = trim(stripTags(test_input($_POST['email'])));
                        $repass = trim(stripTags(test_input($_POST['repass'])));
                        $checkuser2 = checkUser2($user);
                        $checkEmail = checkEmailTonTai($email);
                        $thongbao = "";
                        $thanhcong = FALSE;
    
                        if($user == "") {
                            $thongbao = "Username Chưa Nhập<br>"; $thanhcong = FALSE;
                        }
                        elseif((strlen($user))<=2){
                            $thongbao ="Username Quá Ngắn<br>"; $thanhcong = FALSE;
                        }
                        elseif(!empty($checkuser2)){
                            $thongbao ="Username Đã Tồn Tại<br>"; $thanhcong = FALSE;
                        }
                        elseif($pass == ""){
                            $thongbao ="Password Chưa Nhập<br>"; $thanhcong = FALSE;
                        }
                        elseif((strlen($pass))<=2){
                            $thongbao= "Password Quá Ngắn<br>"; $thanhcong = FALSE;
                        }
                        elseif($pass !== $repass){
                            $thongbao= "Mật Khẩu Và Mật Khẩu Nhập Lại Không Khớp"; 
                            $thanhcong = FALSE;
                        }
                        elseif($email == "") {
                            $thongbao = "Email Chưa Nhập<br>"; $thanhcong = FALSE;
                        }elseif(!empty($checkEmail)){
                            $thongbao = "Email Đã Tồn Tại<br>"; $thanhcong = FALSE;
                        }else{
                            $thanhcong = TRUE;
                            $randomKey = md5(rand(0,99999));
                            $active = 0;
                            addUser($user,$pass,$active,$email,$randomKey);
                            $gansi = checkUser($user,$pass);
                            $idUser = $gansi['id'];
                            // start mail
                            $userName = 'tranquangnhan1606@gmail.com';
                            $passWord = 'Tranquangnhan@1606';
                            $from = 'tranquangnhan1606@gmail.com';
                            $title = 'Xác Nhận Đăng Ký Tài Khoản';
                            $subject = 'Kích hoạt tài khoản';
                            $linkKH ="<a href='". $_SERVER['HTTP_HOST'].SITE_URL.
                            "index.php?act=kichhoat&id=%d&rd=%s'>Nhấp vào đây</a>";
                            $linkKH = sprintf($linkKH,$idUser, $randomKey);
                            $body = "<h4>Chào mừng thành viên mới</h4>Kích hoạt tài khoản: ". $linkKH;
                            sendMail($userName,$passWord,$from,$email,$user,$title,$subject,$body);
                            // end mail
                            $_SESSION['thongbao'] = "Check email để xác nhận tài khoản<br>";
                            header("location: index.php?act=thongbao");
                        }
                        if($thanhcong == FALSE){
                            $_SESSION['thongbao'] = $thongbao;
                            header("location: index.php?act=thongbao");
                        }
            }
        require_once "views/signup.php";
        echo '<script src="views/jquery/signup.js" type="text/javascript"></script>';
        break;
        case 'user':
            if(isset($_GET['logout'])&&($_GET['logout'])==1){
                unset($_SESSION['sid']);
                unset($_SESSION['suser']);
                echo '<script>window.location.href = "index.php"</script>';
            }
        break;
        case 'kichhoat':
            if(isset($_GET['id'])&&isset($_GET['rd'])){//rd -> random   
                $id = $_GET['id'];
                $rd = $_GET['rd'];
                $user = user($id);
                if($user['randomkey']==$rd){
                    setThanhVien($id,$rd);
                    $_SESSION['sid'] = $user['id'];
                    $_SESSION['suser']= $user['user'];
                    $_SESSION['role'] = 0;
                    $_SESSION['thongbao'] = "kích hoạt tài khoản thành công";
                    echo "<script>alert('Kích hoạt tài khoản thành công');</script>";
                    header("location: index.php?act=userprofile");
                }
            }
        require_once "views/userprofile.php";
        break;
        case 'thongbao':
            if(isset($_SESSION['thongbao'])){
                $thongbao = $_SESSION['thongbao'];
                unset($_SESSION['thongbao']);
            }else{
                $thongbao = "Không có gì để thông báo";
            }
            require_once "views/thongbao.php";
        break;
        case 'quenmk':
            if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                $email = trim(stripTags(test_input($_POST['email'])));
                $checkEmail = checkEmailTonTai($email);
                $idUser =  $checkEmail['id'];
                $user = $checkEmail['name'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $thongbao = "$email Nhập Không Hợp Lệ!"; $thanhcong = FALSE;
                }elseif($email == "") {
                    $thongbao = "Email Chưa Nhập<br>"; $thanhcong = FALSE;
                }elseif(empty($checkEmail)){
                    $thongbao = "Email Này Không Có<br>"; $thanhcong = FALSE;
                }else{
                    $thanhcong = TRUE;
                    $randomKey = rand(100000,999999);
                    setcookie("randomKey", $randomKey, time()+300); 
                    // start mail
                    $userName = 'tranquangnhan1606@gmail.com';
                    $passWord = 'Tranquangnhan@1606';
                    $from = 'tranquangnhan1606@gmail.com';
                    $title = 'Lấy lại Mật Khẩu';
                    $subject = 'Quên Mật Khẩu';
                    $linkKH ="<a href='". $_SERVER['HTTP_HOST'].SITE_URL.
                    "index.php?act=datlaimk&id=%d&rd=%s'>Nhấp vào đây</a>";
                    $linkKH = sprintf($linkKH,$idUser, $randomKey);
                    $body = "<h4>Lấy Lại Mật Khẩu</h4>Đặt Lại mật khẩu: ". $linkKH;
                    sendMail($userName,$passWord,$from,$email,$user,$title,$subject,$body);
                    // end mail
                    $_SESSION['thongbao'] = 'Vui lòng check email để lấy lại mật khẩu!Email chỉ có hiệu lực trong 5 phút';
                    header("location: index.php?act=thongbao");
                }
                if($thanhcong == FALSE){
                    $_SESSION['thongbao'] = $thongbao;
                    header("location: index.php?act=thongbao");
                }
            }
        require_once "views/forgotpass.php";
        break;
        case 'datlaimk':
            if(isset($_POST['datlaimk'])&&($_POST['datlaimk'])){
                $id = $_GET['id'];
                $rd = $_GET['rd'];
                $newpass = $_POST['password'];
                $user = user($id);
                if($_COOKIE["randomKey"]==$rd){
                    setNewPass($id,$newpass);
                    $_SESSION['sid'] = $user['id'];
                    $_SESSION['suser']= $user['user'];
                    $_SESSION['role'] = 0;
                    $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                    echo "<script>alert('Mật Khẩu Đã được thay đổi thành công');</script>";
                    header("location: index.php?act=thongbao");
                }else{
                    $_SESSION['thongbao'] = "Đổi Mật Khẩu không thành công, Email đã hết hạn !";
                    header("location: index.php?act=thongbao");
                }
            }
            require_once "views/datlaimk.php";
        break;
        case 'userprofile':
            if(isset($_POST['doimk'])&&($_POST['doimk'])){
                $idUser = $_SESSION['sid'];
                $mkcu = trim(stripTags(test_input($_POST['mkcu'])));
                $user = user($idUser);
                $pass = trim(stripTags(test_input($_POST['pw1'])));
                $repass = trim(stripTags(test_input($_POST['repass'])));
                if($mkcu == ""){
                    $thongbao ="Password Cũ Chưa Nhập !"; $thanhcong = FALSE;
                }elseif((strlen($mkcu))<=2){
                    $thongbao= "Password Cũ Quá Ngắn"; $thanhcong = FALSE;
                }elseif($user['pass'] !== $mkcu){
                    $thongbao ="Password Cũ Không Đúng!"; $thanhcong = FALSE;
                }elseif((strlen($pass))<=2){
                    $thongbao= "Password Quá Ngắn"; $thanhcong = FALSE;
                }elseif((strlen($repass))<=2){
                    $thongbao= "Password Nhập lại Quá Ngắn"; $thanhcong = FALSE;
                }elseif($pass !== $repass){
                    $thongbao= "Mật Khẩu Và Mật Khẩu Nhập Lại Không Khớp"; 
                    $thanhcong = FALSE;
                }else{
                    $thanhcong = TRUE;
                    setNewPass($idUser,$pass);
                    $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                    header("location: index.php?act=thongbao");
                }if($thanhcong == FALSE){
                    $_SESSION['thongbao'] = $thongbao;
                    header("location: index.php?act=thongbao");
                }
            }
            require_once "views/userprofile.php";
        break;
        default:
            require_once "views/home.php";
            break;
    }

}else{
    require_once "views/home.php";
}
require_once "views/layouts/footer.php";
?>