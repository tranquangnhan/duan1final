<?php
    include_once '../../../system/config.php';
    include_once '../../../system/database.php';
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/blog.php';
    //thêm dữ liệu vào database
    // show dữ liệu ra mh;

    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'AddCmt': 
                $Array = array();
                $content = trim(stripTags($_POST['Ct']));
                $idUser = trim(stripTags($_POST['idUs']));
                $id = trim(stripTags($_POST['Idbv']));
                $datetime = date("Y-m-d H:i:s");
                //$Array['StatusCode']  = (int) (addCmt($content,$idUser,$id,5) ==true) ? 1 : 0 ;

                $Array['StatusCode']  = (int) (addCmt($content,$idUser,$id,5,$datetime) ==true) ? 1 : 0 ;
                // $Array['rowcount'] = rowcountCmt($idbaiviet);
                $Array['datetim'] = $datetime;
                $Array['content'] = showbinhluan($id);
                $Array['countCmt'] = rowcountCmt($id);
                $Array['id'] = $Array['content'][0]['idkh'];
                
                echo json_encode($Array);
                return;         
            break;
        }
    }
?>