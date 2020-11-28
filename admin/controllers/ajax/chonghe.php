<?php 
    session_start();
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'chonghe':
                $_SESSION['vitrighe'] = $_POST['idghe'];
                $_SESSION['idchuyenbay'] = $_POST['idcb'];
                $_SESSION['hangghe'] = $_POST['hangghe'];
                return;
                break;
            case 'checkKhuHoi':
                // $Array = array();
                // if(isset($_SESSION['ngayve'])){
                //     // $Array['ngayve'] = $_SESSION['ngayve'];
                //     $currentQuery = $_GET;
                //     $currentQuery['ngaydi'] = $_SESSION['ngayve'];
                //     header('location: '.http_build_query($CurrentQuery).'') ;
                // }else{
                //     $Array['ngayve'] = 0;
                // }
                print_r($_SESSION['ngayve']);
                return;
                break;   
            default:
                # code...
                break;
        }
    }

?>