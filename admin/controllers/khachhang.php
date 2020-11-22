<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showallkh = showallkh();
            include_once "views/khachhangindex.php";
        break;
        case 'add':
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showkhedit = showkhedit($_SESSION['idedit']);
                include_once "views/khachhangedit.php";
            }else{
                include_once "views/khachhangadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $allFile = $_FILES['avatar1'];                
                // //upload nhiều ảnh
                $imgupload = checkUpLoadMany($allFile);

                $tenkh = stripTags($_POST['tenkh']);
                $user = stripTags($_POST['tenuser']);

                $gioitinh = $_POST['gioitinh'];
                $pass= stripTags($_POST['pass']);
                $role = $_POST['vaitro'];
                $ngaysinh = $_POST['ngaysinh'];

                $email =stripTags( $_POST['email']);
                $sodienthoai = stripTags($_POST['sodienthoai']);
                $diachi = stripTags($_POST['diachi']);

                $thanhpho = stripTags($_POST['thanhpho']);
                $tichdiem= $_POST['tichdiem'];
                $randomkey = md5(rand(0,99999));

                settype( $gioitinh,"int");
                settype($role,"int");
                settype($kichhoat,"int");

                settype($tichdiem,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updatekh($_GET['idedit'],$tenkh,$user,$gioitinh,$role,$pass,$email,$imgupload,$sodienthoai,$diachi,$thanhpho,$tichdiem,$randomkey); 
                }else{
                    $lastId = addkh($tenkh,$user,$gioitinh,$role,$pass,$email,$imgupload,$sodienthoai,$diachi,$thanhpho,$tichdiem,$randomkey);
                    // start mail
                    $idUser = $lastId;

                    $userName = 'tranquangnhan1606@gmail.com';
                    $passWord = 'Tranquangnhan@1606';
                    $from = 'tranquangnhan1606@gmail.com';
                    $title = 'Xác Nhận Đăng Ký Tài Khoản';
                    $subject = 'Kích hoạt tài khoản';
                    $linkKH ="<a href='". $_SERVER['HTTP_HOST'].SITE_URL.
                    "index.php?act=kichhoat&id=%d&rd=%s'>Nhấp vào đây</a>";
                    $linkKH = sprintf($linkKH,$idUser, $randomkey);
                    $body = "<h4>Chào mừng thành viên mới</h4>Kích hoạt tài khoản: ". $linkKH;
                    sendMail($userName,$passWord,$from,$email,$user,$title,$subject,$body);
                    //end mail
                }
                header("location: index.php?ctrl=khachhang&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoakhachhang($id);
            }
            $showallkh = showallkh();
        include_once "views/khachhangindex.php";
        break;
            default:
                break;
    }
?>