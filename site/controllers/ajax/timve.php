<?php
if ($_POST['Action'])
{
    switch ($_POST['Action']) {
        case 'showve': //check tài khoản có tồn tại không
            $Url = array();
            $Url['diemdi'] = $_POST['diemdi'];
            $Url['diemden'] = $_POST['diemden'];
            $Url['ngaydi'] = $_POST['ngaydi'];
            if($_POST['ngayve']){
                $Url['ngayve'] = $_POST['ngayve'];
            }
            $Url['loaighe'] = $_POST['loaighe'];
            $Url['nguoilon'] = $_POST['nguoilon'];
            $Url['treem'] = $_POST['treem'];
            $Url['embe'] = $_POST['embe'];
            $Url['act'] = 'showve';
            $urlMain = http_build_query($Url);
            echo json_encode($urlMain);
            return;
            break;

    }
}


?>