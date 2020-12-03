<?php
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'home';
}
switch ($act) {
    case 'timve':
        $showSanBay = showsanbay();

        require_once "views/timve.php";
        echo '<script src="views/javascripts/datve.js"></script>';
        break;
    case 'showve':
        $Array = array();
        $showSanBay = showsanbay();
        $diemDi = $_GET['diemdi'];
        $diemDen = $_GET['diemden'];
        $ngayDi = $_GET['ngaydi'];
  
        $urlve = http_build_query($_GET);
        
        // lưu session
        if(isset($_GET['ngayve'])&&($_GET['ngayve'])){
            $_SESSION['diemdi'] = $_GET['diemdi'];
            $_SESSION['diemden'] = $_GET['diemden'];
            $_SESSION['ngayve'] = $_GET['ngayve'];
            $_SESSION['urlve'] = $urlve;
        }

        if(isset($_GET['khuhoi'])&&($_GET['khuhoi'] == 1)){
            $ngayDi = $_SESSION['ngayve'];
            $diemDi = $_SESSION['diemden'];
            $diemDen = $_SESSION['diemdi'];
            unset($_SESSION['ngayve']);
            unset($_SESSION['diemdi']);
            unset($_SESSION['diemden']);
        }

        $loaiGhe = $_GET['loaighe'];

        $nguoiLon = $_GET['nguoilon'];
        $treEm = $_GET['treem'];
        $emBe = $_GET['embe'];

        $soNguoi = $nguoiLon + $treEm;
        $showVeMotChieu = showVeMotChieu($diemDi, $diemDen, $ngayDi, $loaiGhe);
        if ($loaiGhe == 1) {
            foreach ($showVeMotChieu as $motGhe) {
                $arr = explode(',', $motGhe['ttghethuong']);
                if (array_count_values($arr)['0'] >= $soNguoi) {
                    array_push($Array, showVeAdmin($motGhe['id']));
                }
            }
        } elseif ($loaiGhe == 2) {
            foreach ($showVeMotChieu as $motGhe) {
                $arr = explode(',', $motGhe['ttghethuonggia']);
                if (array_count_values($arr)['0'] >= $soNguoi) {
                    array_push($Array, showVeAdmin($motGhe['id']));
                }
            }
        }
        ($Array) ?  $Array = json_encode($Array) :  $Array = 'Không có chuyến bay nào cả';

        require_once "views/timveindex.php";
        echo '<script src="views/jquery/chonve.js"></script>';
        break;
        case 'chonve':
            $idChuyenBay = $_GET['idcb'];
            if(isset($_GET['idcb'])&&($_GET['idcb'])){
                if(isset($_GET['loaighe'])&&($_GET['loaighe'])==1){
                    $soGheThuong = getGhe($_GET['idcb'],'ttghethuong');
                    include_once "views/chonghethuong.php";
                }
                if(isset($_GET['loaighe'])&&($_GET['loaighe'])==2){
                    $soGheThuongGia = getGhe($_GET['idcb'],'ttghethuonggia');
                    include_once "views/chonghethuonggia.php";
                }
            }else{
                echo "không có chuyến bay này !";
            } 
        $Array = json_encode($Array);
        require_once "views/timveindex.php";
        echo '<script src="views/jquery/chonve.js"></script>';
        break;
    case 'chonve':
        if (isset($_GET['idcb']) && ($_GET['idcb'])) {
            $soGheThuongGia = getGhe($_GET['idcb'], 'ttghethuonggia');
            $soGheThuong = getGhe($_GET['idcb'], 'ttghethuong');
            include_once "views/chonghe.php";
        } else {
            echo "không có chuyến bay này !";
        }

        break;
    default:
        break;
}
?>