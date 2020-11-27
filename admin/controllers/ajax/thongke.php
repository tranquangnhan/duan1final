<?php 
require_once '../../../system/config.php';
require_once '../../../system/database.php';
require_once '../../models/thongke.php';

 
if ($_POST['Action'])
{
    switch ($_POST['Action']) {
        case 'getThongke':
                $array = array();
                $kieuchart = $_POST['kieuchart'];
                $kieubaocao = $_POST['kieubaocao'];
                $ngaybatdau1 = $_POST['ngaybatdau1'];
                $ngaybatdau2 = $_POST['ngaybatdau2'];
                $ngayketthuc1 = $_POST['ngayketthuc1'];
                $ngayketthuc2 = $_POST['ngayketthuc2'];
                // them data vao array
                $array['bd1'] = $ngaybatdau1;
                $array['kt1'] = $ngayketthuc1;
                $array['bd2'] = $ngaybatdau2;
                $array['kt2'] = $ngayketthuc2;
                $array['kieubaocao'] = $kieubaocao; 
                $array['kieuchar'] = $kieuchart;
               
                if ($ngaybatdau2 != '' && $ngayketthuc2 != '') {
                    $array['data2'] = getThongke2($ngaybatdau2,$ngayketthuc2);
                    $array['Statuscode'] = 1;
                } else {
                    $array['Statuscode'] = 0;
                }
                $array['data1'] = getThongke($ngaybatdau1,$ngayketthuc1);
               
                echo json_encode($array);
                return;
            break;
        default:
            # code...
            break;
    }
}


?>