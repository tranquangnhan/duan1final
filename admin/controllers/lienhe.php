<?php
    // session_start();
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllLienhe = showAllLienhe(10);
            include_once "views/lienheindex.php";
        break;
        case 'add':
           
        break;
        case 'del':
        break;
            default:
                break;
    }
?>