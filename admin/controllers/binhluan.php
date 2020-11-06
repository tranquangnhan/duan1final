<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showBinhLuan = showBinhLuan();
            require_once "views/binhluanindex.php";
        break;
        case 'add':
            $showAllkh = showAllkh();
            $showAllSp= showAllSpAdmin();
            if(isset($_POST['them'])&&($_POST['them'])){
                $idsp = $_POST['idsp'];
                $star = $_POST['star'];
                $noidung = $_POST['noidung'];
                $iduser = $_POST['idkh'];
                $trangthai = $_POST['anhien'];
                addBinhLuan($star,$iduser,$idsp,$noidung,$trangthai);
                header("location: index.php?ctrl=binhluan&act=index");
            }
            require_once "views/binhluanadd.php";
        break;
        case 'edit':
            $showAllkh = showAllkh();
            $showAllSp= showAllSp();
            if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showBlEdit = showBlEdit($_SESSION['idedit']);
                if(isset($_POST['sua'])&&($_POST['sua'])){
                    $id = $_SESSION['idedit'];
                    $idsp = $_POST['idsp'];
                    $star = $_POST['star'];
                    $noidung = $_POST['noidung'];
                    $iduser = $_POST['idkh'];
                    $trangthai = $_POST['anhien'];
                    editBinhLuan($id,$star,$iduser,$idsp,$noidung,$trangthai);
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
        $showBinhLuan = showBinhLuan();
        require_once "views/binhluanindex.php";
        break;
            default:
                break;
    }
?>