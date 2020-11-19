<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showbl = showbl();
            require_once "views/binhluanindex.php";
        break;
        case 'add':
            $showallkh = showallkh();
            $showallbv = showallbv();
            $showAllSp= showAllSpAdmin();
            if(isset($_POST['them'])&&($_POST['them'])){
 
                $idbaiviet = $_POST['idbaiviet'];
                $star = $_POST['star'];
                $noidung = $_POST['noidung'];
                $idkh = $_POST['idkh'];
                $trangthai = $_POST['anhien'];
                addBinhLuan($star,$idkh,$idbaiviet,$noidung,$trangthai);
                 header("location: index.php?ctrl=binhluan&act=index");
            }
            require_once "views/binhluanadd.php";
        break;
        case 'edit':
            $showallkh = showallkh();
    
            if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showBlEdit = showBlEdit($_SESSION['idedit']);
                if(isset($_POST['sua'])&&($_POST['sua'])){
             
                    $idbaiviet = $_POST['idbaiviet'];
                    $star = $_POST['star'];
                    $noidung = $_POST['noidung'];
                    $idkh = $_POST['idkh'];
                    $trangthai = $_POST['anhien'];
                    editBinhLuan($id,$star,$idkh,$idbaiviet,$noidung,$trangthai);
                    print_r ($id);
                    header("location: index.php?ctrl=binhluan&act=index");
                }

            }
            require_once "views/binhluanedit.php";
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaBinhLuan($id);
            }
            $showbl = showbl();
        require_once "views/binhluanindex.php";
        break;
            default:
                break;
    }
?>