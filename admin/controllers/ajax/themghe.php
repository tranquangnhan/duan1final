<?php 
require_once '../../../system/config.php';
require_once '../../../system/database.php';
require_once '../../models/ve.php';

 
if ($_POST['Action'])
{
    switch ($_POST['Action']) {
        case 'setttghetg':
            setGheAdmin($_POST['id'],$_POST['idmaybay'],'ttghethuonggia');
            print_r(getGhe($_POST['idmaybay'],'ttghethuonggia'));
            return;
            break;
        case 'setttghept':
            setGheAdmin($_POST['id'],$_POST['idmaybay'],'ttghethuong');
            print_r(getGhe($_POST['idmaybay'],'ttghethuong'));
            return;
            break;
        default:
            # code...
            break;
    }
}


?>