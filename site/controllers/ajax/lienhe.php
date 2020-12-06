<?php
    include_once '../../../system/config.php';
    include_once '../../../system/database.php';
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/lienhe.php';
    //thêm dữ liệu vào database
    // show dữ liệu ra mh;

    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'addlienhe': 
                $Array = array();
                $hoten = trim(stripTags($_POST['hoten']));
                $diachi = trim(stripTags($_POST['diachi']));
                $email = trim(stripTags($_POST['email']));
                $noidung = trim(stripTags($_POST['noidung']));
        
                $Array['StatusCode']  = (int) (addlienhe($hoten,$email,$diachi,$noidung) ==true) ? 1 : 0 ;
                echo json_encode($Array);
                return;         
            break;
        }
    }
?>