<?php 
    session_start();
    require_once '../../../system/config.php';
    require_once '../../../system/database.php';
    require_once '../../models/ve.php';
    require_once '../../models/hoadon.php';
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'hoadon':
                $Array = array();
        
                $Array['hotenkh'] = explode(',',$_POST['hotenkh']);

                $Array['gioitinh'] = explode(',',$_POST['gioitinh']);

                $Array['dienthoai'] = explode(',',$_POST['dienthoai']);

                $Array['cmnd'] = explode(',',$_POST['cmnd']);
                
                $ngayDatVe = date('Y-m-d H:i:s');

                $idChuyenBay = $_SESSION['idchuyenbay'];

                $hangGhe = $_SESSION['hangghe'];

                if($hangGhe == 1){
                    $giaTien = showGiaVe($_SESSION['idchuyenbay'])['giavethuong'];
                }
                elseif($hangGhe == 2){
                    $giaTien = showGiaVe($_SESSION['idchuyenbay'])['giavethuonggia'];
                }
                $tongTien =  $giaTien * count($_SESSION['vitrighe']);
           
                 $lastId = addhoadon( $idChuyenBay,$ngayDatVe,1,$tongTien);
                for ($i=0; $i < count($_SESSION['vitrighe']); $i++) { 
                    $Array['StatusCode'] = (addHoaDonChiTiet($lastId,$_SESSION['vitrighe'][$i],$hangGhe,$giaTien,$Array['hotenkh'][$i],$Array['gioitinh'][$i],$Array['dienthoai'][$i],$Array['cmnd'][$i])) ? 1 : 0;
                }
                echo json_encode($Array);
                return;
                break;
            default:
                # code...
                break;
        }
    }

?>