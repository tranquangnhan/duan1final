<?php
ob_start();
session_start();
include "../models/khachhang.php";
include "../../system/config.php";
include "../../system/database.php";
include "../../lib/myfunctions.php";
if(isset($_GET['act'])&&($_GET['act'])){
$act = $_GET['act'];
}else{
    $act = 'home';
}
switch ($act) {
    case 'login':
    if(isset($_POST['login'])&&($_POST['login'])){
        if(checkMiddleWare($_POST['token'])){//check token
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkUser($user,$pass);
               
                if(is_array($checkuser)){
                    //đăng nhâp thành công
                    $_SESSION['sid'] = $checkuser['id'];
                    $_SESSION['suser']= $checkuser['user'];
                    $_SESSION['role'] = $checkuser['role']; // role=1 =>admin
                    if($checkuser['role'] == 1) {
                        header('location: ../index.php');
                    }
                    else header('location: ../../index.php');
                }
                else{
                    $canhbao = '<h6 style="color:red">Mày là ai mà xâm nhập vào đây</h6>';
                }
        }else{
            $canhbao = '<h6 style="color:red">Thằng chó hack web tao</h6>';
        }
    }
    require_once "../views/login.php";
    break;
    case 'logout':
        if($_GET['idout']==1){
            unset($_SESSION['role']);
            unset($_SESSION['sid']);
            unset($_SESSION['suser']); 
            unset($_SESSION['adimg']);
            header('location: login.php?act=login');
        }
    break;
        default:
            break;
}

?>