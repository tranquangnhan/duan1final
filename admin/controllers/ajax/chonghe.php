<?php 
    // session_start();
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'chonghe':
                session_start();
                $_SESSION['vitrighe'] = $_POST['idghe'];
                $_SESSION['idchuyenbay'] = $_POST['idcb'];
                $_SESSION['hangghe'] = $_POST['hangghe'];
                return;
                break;
            default:
                # code...
                break;
        }
    }

?>