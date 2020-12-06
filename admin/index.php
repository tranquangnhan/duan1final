<?php
  ob_start();
  session_start();
  if(isset($_SESSION['role'])&&($_SESSION['role'])==1){
    require_once "../system/config.php";
    require_once "../system/database.php";
    require_once "../lib/myfunctions.php";
    require_once "views/layouts/header.php";
    require_once "models/allmodel.php";
    include_once '../lib/phpexcel/Classes/PHPExcel.php';
    require_once "../global.php";
    // require controllers
    define('ARR_CONTROLLER',["home","hanghoa","loaihang","binhluan","khachhang","lienhe","baiviet","ve","hoadon","timve"]);
    $ctrl = 'home';
    if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];
    if(in_array($ctrl,ARR_CONTROLLER)==false) die("Không thấy địa chỉ not found 404");
    $pathFile = "controllers/$ctrl.php";
    if(file_exists($pathFile)== true) require_once $pathFile;
    else echo "controllers $ctrl not found 404";
    require_once "views/layouts/footer.php";
  }else{
      header("location: controllers/login.php?act=login");
      // require_once "controllers/login.php?act=login";
  }
?>