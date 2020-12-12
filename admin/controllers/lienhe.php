<?php
    // session_start();
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllLienhe = showAllLienhe();
            include_once "views/lienheindex.php";
        break;
        case 'add':
           
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaLienhe($id);
            }
            $showAllLienhe = showAllLienhe(10);
        include_once "views/lienheindex.php";
        break;
            default:
                break;
    }
?>