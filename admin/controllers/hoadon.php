<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showallhd = showallhd();
            include_once "views/hoadonindex.php";
        break;
        case 'add':
            $showkh=  showkh();
            $showallkh = showallkh();

            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showhdedit = showhdedit($_SESSION['idedit']);
                require_once "views/hoadonedit.php";
            }else{
                require_once "views/hoadonadd.php";
            }
            
        echo '<script src="views/jquery/hoadon.js"></script>';
        break;
        case 'hdct':
            $idHd = $_GET['idhd'];

            settype($idHd,'int');

            $showHoaDonCt = showHoaDonCt($idHd);

            $showHoaDon = showHoaDon($idHd);

            $idCb = $showHoaDon['idchuyenbay'];

            $showTTCb = showVeAdmin($idCb);
        
            // print_r($showTTCb);
            include_once "views/hoadonchitiet.php";
            break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoahoadon($id);
            }
            $showallhd = showallhd();
        include_once "views/hoadonindex.php";
        break;
            default:
                break;
    }
?>
