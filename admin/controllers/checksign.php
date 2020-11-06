<?php
    require_once "../../system/config.php";
    require_once "../../system/database.php";
    if(isset($_POST['name'])&&($_POST['name'])){
        $name = $_POST['name'];
        $sql ="select * from khachhang where name = '$name'";
        $kq = result1(0,$sql);
        if(!empty($kq)){
            echo '<div class="alert alert-danger" role="alert">
                    <h5 class="alert-heading">Tài Khoản Đã Tồn Tại</h5>
                </div>';
        }
    }
    if(isset($_POST['email'])&&($_POST['email'])){
        $email = $_POST['email'];
        $sql ="select * from khachhang where email = '$email'";
        $kq = result1(0,$sql);
        if(!empty($kq)){
            echo '<div class="alert alert-danger" role="alert">
                    <h5 class="alert-heading">Email Đã Tồn Tại</h5>
                </div>';
        }
    }
?>  