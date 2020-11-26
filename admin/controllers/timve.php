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
        break;
    case 'showve':
        $Array = array();
        $showSanBay = showsanbay();
        $diemDi = $_GET['diemdi'];
        $diemDen = $_GET['diemden'];
        $ngayDi = $_GET['ngaydi'];
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
        $Array = json_encode($Array);
        require_once "views/timveindex.php";
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