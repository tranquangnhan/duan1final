<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllDm = showAllDm();
            include_once "views/loaihangindex.php";
        break;
        case 'add':
            if(isset($_GET['idedit'])&&($_GET['idedit']>0)){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showDmedit = showDmEdit($_SESSION['idedit']);
                include_once "views/loaihangedit.php";
            }else{
                include_once "views/loaihangadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $id = $_SESSION['idedit'];
                $name = stripTags($_POST['name']);
                $thutu = $_POST['thutu'];
                $anhien = $_POST['anhien'];
                settype($thutu,"int");
                settype($anhien,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateCategories($id,$name,$thutu,$anhien);
                }else{
                    addCategories($name,$thutu,$anhien);
                }
                header("location: index.php?ctrl=loaihang&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaDanhMuc($id);
            }
            $showAllDm = showAllDm();
        include_once "views/loaihangindex.php";
        break;
            default:
                break;
    }
?>