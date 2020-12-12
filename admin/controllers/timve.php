<?php
if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
} else {
    $act = 'home';
}
switch ($act) {
    case 'timve':
        unsetSs();
        $showSanBay = showsanbay();
        require_once "views/timve.php";
        echo '<script src="views/javascripts/datve.js"></script>';
        break;
    case 'showve':
        echo '<script src="views/jquery/chonve.js"></script>';
        $Array = array();

        $showSanBay = showsanbay();
        $diemDi = $_GET['diemdi'];
        $diemDen = $_GET['diemden'];
        $ngayDi = $_GET['ngaydi'];
        $loaiGhe = $_GET['loaighe'];

        $nguoiLon = $_GET['nguoilon'];
        $treEm = $_GET['treem'];
        $emBe = $_GET['embe'];

        settype($diemDi,"int");
        settype($diemDen,"int");
        settype($loaiGhe,"int");
        settype($nguoiLon,"int");
        settype($treEm,"int");
        settype($emBe,"int");
        $tb = 'Thông báo';
        if($diemDi == '')
        {
            $error = "Vui lòng chọn điểm đi.";
        }
        elseif($diemDen == '')
        {
            $error = "Vui lòng chọn điểm đến.";
        }
        elseif($loaiGhe == '')
        {
            $error = "Vui lòng chọn loại ghế.";
        }
        elseif($nguoiLon <= 0)
        {
            $error = "Số người phải lớn hơn 0.";
        }
        elseif($emBe>$nguoiLon)
        {
            $error = "Số em bé không được lớn hơn số người lớn.";
        }elseif($treEm< 0)
        {
            $error = "Số trẻ em phải lớn hơn hoặc bằng 0";
        }
        elseif($emBe<0){
            $error = "Số em bé phải lớn hơn hoặc bằng 0";
        }
        if($error){
            echo $error;
        }   
        else{
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
            if($Array){
                $Array = json_encode($Array);
            }else{
                echo '<div class="col-lg-8">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6 pr-2 mr-2">
                                        <h3>Không có chuyến bay nào cả</h3>
                                    </div>
                                    <div class="col-lg-2 pr-2 mr-2">
                                        <div class="form-group">
                                            <a href="http://localhost/duan1final/admin/index.php?ctrl=timve&act=timve"><button type="submit" name="act" id="" value="showve" class="btn btn-submit text-center">Đổi chuyến</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            } 
        }
    
        require_once "views/timveindex.php";
      
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