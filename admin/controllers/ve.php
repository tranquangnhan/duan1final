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
                include_once "views/veedit.php";
            }else{
                include_once "views/veadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $allFile = $_FILES['img'];
                //upload nhiều ảnh
                $img = checkUpLoadMany($allFile);
                $iddm = $_POST['iddm'];
                $tenmaybay = stripTags($_POST['tenmaybay']);
                // $slug = convert_name($name);
                $gia = $_POST['gia'];
                $giamgia = $_POST['giamgia'];   
                $diemdi =stripTags( $_POST['diemdi']); 
                $diemden =stripTags( $_POST['diemden']);
                $loaighe =stripTags( $_POST['loaighe']);
                $tgdi = $_POST['tgdi']; 
                $tgden = $_POST['tgden']; 
                $hanhly = $_POST['hangly'];
                $giaitri = stripTags($_POST['giaitri']);
                $loaimaybay = stripTags($_POST['loaimaybay']);
              
                if(isset($_POST['xuatan'])&&($_POST['xuatan'])){
                    $xuatan = $_POST['xuatan'];
                }else{
                    $xuatan = "0";
                }
                settype($gia,"float");
                settype($iddm,"int");
                settype($giamgia,"int");
                settype($gia,"int");
                settype($tgdi,"int");
                settype($tgden,"int");
                settype($hanhly,"int");  
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateProduct($id,$img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly,$giaitri,$loaimaybay); 
                }else{
                    addProduct($img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly,$giaitri,$loaimaybay);
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