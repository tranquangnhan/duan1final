<?php
if ($_POST['Action'])
{
    switch ($_POST['Action']) {
        case 'timve': //check tài khoản có tồn tại không
            $Url = array();
            $Url['diemdi'] = $_POST['diemdi'];
            $Url['diemden'] = $_POST['diemden'];
            $Url['ngaydi'] = $_POST['ngaydi'];
            $Url['loaighe'] = $_POST['loaighe'];
            $Url['nguoilon'] = $_POST['nguoilon'];
            $Url['treem'] = $_POST['treem'];
            $Url['embe'] = $_POST['embe'];
            $Url['act'] = 'timkiem';
            $testUrl = http_build_query($Url);
            echo json_encode($testUrl);
            return;
            break;

    }
}


?>