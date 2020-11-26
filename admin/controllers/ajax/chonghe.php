<?php 
    // session_start();
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'chonghe':
                $Array = array();
                $_SESSION['idchuyenbay'] =  $_POST['idchuyenbay'];
                $Array['StatusCode'] = $_SESSION['idchuyenbay'];
                echo json_encode($Array);
                return;
                break;
            default:
                # code...
                break;
        }
    }

?>