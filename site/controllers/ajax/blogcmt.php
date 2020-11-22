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
                $idbaiviet = trim(stripTags($_POST['Idbv']));

                $Array['StatusCode']  = (int) (addCmt($content,$idUser,$idbaiviet,5) ==true) ? 1 : 0 ;
                // $Array['rowcount'] = rowcountCmt($idbaiviet);
                $Array['content'] = showCmt($idbaiviet);
                // $output = '';
                // foreach($Array['content'] as $row) {
                //     $output .= '
                //         <div class="binhluan">
                //             <div class="tenKH">'. $row[''].'</div>
                //             <div class="noidung">'. $row[''].'</div>
                //         </div>
                //     '
                
                // }
                echo json_encode($Array);
                return;         
            break;
        }
    }
?>