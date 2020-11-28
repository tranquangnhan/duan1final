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
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){              
                $hoTenKh = stripTags($_POST['hotenkh']);                
                $ngayDatVe = date('Y-m-d H:i:s');
                $gioiTinh = $_POST['gioitinh'];
                $soDienThoai = $_POST['dienthoai'];
                $cmnd = $_POST['cmnd'];
                $idChuyenBay = $_SESSION['idchuyenbay'];
                $hangGhe = $_SESSION['hangghe'];


                if($hangGhe == 1){
                    $giaTien = showGiaVe($_SESSION['idchuyenbay'])['giavethuong'];
                }
                elseif($hangGhe == 2){
                    $giaTien = showGiaVe($_SESSION['idchuyenbay'])['giavethuonggia'];
                }
                if(isset($_SESSION['sid'])){
                    $idKh = $_SESSION['sid'];
                }
                $tongTien =  $giaTien * count($_SESSION['vitrighe']);


                settype($trangthai,"int");
                settype($gioiTinh,"int");
                settype($soDienThoai,"int");
                settype($cmnd,"int");
                settype($hangGhe,"int");

                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    
                }else{
                //    $lastId = addhoadon( $idChuyenBay,$ngayDatVe,1,$tongTien);
                //    for ($i=0; $i < count($_SESSION['vitrighe']); $i++) { 
                //         $viTriGhe =  $_SESSION['vitrighe'][$i];
                //        addHoaDonChiTiet($lastId,$viTriGhe,$hangGhe,$giaTien,$hoTenKh,$gioiTinh,$soDienThoai,$cmnd);
                //    }
                }
                // header("location: index.php?ctrl=hoadon&act=index");
                
            }
        echo '<script src="views/jquery/hoadon.js"></script>';
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
