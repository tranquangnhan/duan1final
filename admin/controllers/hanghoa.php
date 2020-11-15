<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllSp = showAllSp();
            include_once "views/hanghoaindex.php";
        break;
        case 'add':
            $showdmsp = showAllTenDm();
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                 $showspedit = showSpEdit($_SESSION['idedit']);
                include_once "views/hanghoaedit.php";
            }else{
                include_once "views/hanghoaadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $allFile = $_FILES['img'];
                //upload nhiều ảnh
                $img = checkUpLoadMany($allFile);
                $iddm = $_POST['iddm'];
                $name = stripTags($_POST['name']);
                $slug = convert_name($name);
                $namsanxuat = $_POST['date'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];
                $nhienlieu = stripTags($_POST['nhienlieu']);
                if($nhienlieu == 0) $nhienlieu='Xăng';elseif($nhienlieu==1) $nhienlieu="Dầu";else $nhienlieu="Điện";
                $soluong = $_POST['soluong'];
                $video = stripTags($_POST['video']);
                $chongoi = $_POST['chongoi'];
                $maylanh = $_POST['maylanh'];
                $bocungphanh = $_POST['bocungphanh'];
                $trodien = $_POST['trodien'];
                $tuikhi = $_POST['tuikhi'];
                $daucd = $_POST['daucd'];
                $noibat = $_POST['noibat'];
                $luotxem = $_POST['luotxem'];
                $soluong =$_POST['soluong'];
                $mota = stripTags($_POST['mota']);
                $anhien = $_POST['anhien'];
                if(isset($_POST['dacbiet'])&&($_POST['dacbiet'])){
                    $dacbiet = $_POST['dacbiet'];
                }else{
                    $dacbiet = "0";
                }
                if(isset($_POST['anhien'])&&($_POST['anhien'])){
                    $anhien = $_POST['anhien'];
                }else{
                    $anhien = "0";
                }
                settype($gia,"float");
                settype($iddm,"int");
                settype($giamgia,"int");
                settype($chongoi,"int");
                settype($luotxem,"int");
                settype($maylanh,"int");
                settype($bocungphanh,"int");
                settype($trodien,"int");
                settype($tuikhi,"int");
                settype($daucd,"int");
                settype($noibat,"int");
                settype($luotxem,"int");
                settype($soluong,"int");
                settype($anhien,"int");
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateProduct($id,$name,$slug,$img,$iddm,$namsanxuat,$gia,$giamgia,$nhienlieu,$chongoi,$maylanh,$bocungphanh,$trodien,$tuikhi,$daucd,$noibat,$luotxem,$soluong,$video,$mota,$anhien); 
                }else{
                    addProduct($name,$slug,$img,$iddm,$namsanxuat,$gia,$giamgia,$nhienlieu,$chongoi,$maylanh,$bocungphanh,$trodien,$tuikhi,$daucd,$noibat,$luotxem,$soluong,$video,$mota,$anhien);
                }
                header("location: index.php?ctrl=hanghoa&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaSanPham($id);
            }
        $showAllSp = showAllSp();
        include_once "views/hanghoaindex.php";
        break;
            default:
                break;
    }
?>