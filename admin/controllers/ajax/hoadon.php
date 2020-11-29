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
                // hoá đơn 1 chiếu
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

                // add hoá đơn khứ hồi
                if(isset($_SESSION['idchuyenbaykh'])){
                    $idChuyenBayKh = $_SESSION['idchuyenbaykh'];

                     $hangGheKh = $_SESSION['hangghekh'];

                     if($hangGheKh == 1){
                        $giaTienKh = showGiaVe($_SESSION['idchuyenbaykh'])['giavethuong'];
                    }
                    elseif($hangGheKh == 2){
                        $giaTienKh = showGiaVe($_SESSION['idchuyenbaykh'])['giavethuonggia'];
                    }

                    $tongTienKh =  $giaTienKh * count($_SESSION['vitrighekh']);

                    $lastIdKh = addhoadon($idChuyenBayKh,$ngayDatVe,1,$tongTienKh);
                    for ($i=0; $i < count($_SESSION['vitrighe']); $i++) { 
                        $Array['StatusCode'] = (addHoaDonChiTiet($lastIdKh,$_SESSION['vitrighekh'][$i],$hangGheKh,$giaTienKh,$Array['hotenkh'][$i],$Array['gioitinh'][$i],$Array['dienthoai'][$i],$Array['cmnd'][$i])) ? 1 : 0;
                    }
                }
                unset($_SESSION['idchuyenbay']);
                unset($_SESSION['hangghe']);
                unset($_SESSION['urlve']);
                unset($_SESSION['vitrighe']);
                unset($_SESSION['vitrighekh']);
                unset($_SESSION['idchuyenbaykh']);
                unset($_SESSION['hangghekh']);

                echo json_encode($Array);
                return;
                break;
            default:
                # code...
                break;
        }
    }

?>