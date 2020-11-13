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
             
               
                $user = stripTags($_POST['user']);
                $role = $_POST['role'];
                $pass= stripTags($_POST['pass']);
                $kichhoat = $_POST['kichhoat'];
                $ngaysinh = $_POST['ngaysinh'];
                $email =stripTags( $_POST['email']);
                $sodienthoai = stripTags($_POST['sodienthoai']);
                $diachi = stripTags($_POST['diachi']);
                $thanhpho = stripTags($_POST['thanhpho']);
                $quocgia = stripTags($_POST['quocgia']) ;
                $tichdiem= $_POST['tichdiem'];
                $randomkey =  stripTags($_POST['randomkey']);
                settype($role,"int");
                settype($kichhoat,"int");
                settype($nngaysinh,"datetime");
                settype($tichdiem,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updatekh($id,$user,$role,$pass,$kichhoat,$ngaysinh,$email,$sodienthoai,$diachi,$thanhpho,$quocgia,$tichdiem,$randomkey); 
                }else{
                    addkh($user,$role,$pass,$kichhoat,$ngaysinh,$email,$sodienthoai,$diachi,$thanhpho,$quocgia,$tichdiem,$randomkey);
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