<?php 
    // b1 
        session_start();

    include "config.php";

    if(isset($_POST["submit"]) && $_POST["user"] != '' && $_POST["sodienthoai"] != '') {
        $user = $_POST["user"];
       
        $sodienthoai = $_POST["sodienthoai"];
      
       
        $sql = "SELECT * FROM khachhang WHERE user='$user' AND sodienthoai='$sodienthoai' ";
        $khachhang = mysqli_query($conn, $sql);
        if(mysqli_num_rows($khachhang) > 0){
            $_SESSION["khachhang"] = $user;
            header("location: index.php");
        }else{
            echo "that bai ";
        }
    }else{
        header("location: login.php");
    }
?>