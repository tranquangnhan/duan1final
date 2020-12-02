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
            $idCb = $showHoaDonCt['0']['idchuyenbay'];
            $showTTCb = showVeAdmin($idCb);

            include_once "views/hoadonchitiet.php";
            break;
        case 'hoantat':
            if(isset($_GET['idhd'])&&($_GET['idhd'])>0){
                $idhd = $_GET['idhd'];
                settype($idhd,"int");
                setHoanTatHd($idhd);
            }
            $showallhd = showallhd();
            include_once "views/hoadonindex.php";
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
