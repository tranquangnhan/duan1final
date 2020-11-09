<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllSp = showAllSp();
            include_once "views/hoadonindex.php";
        break;
        case 'add':
            $showdmsp = showAllTenDm();
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showspedit = showSpEdit($_SESSION['idedit']);
                include_once "views/hoadonaedit.php";
            }else{
                include_once "views/hoadonaadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){              
                $hotenkh = stripTags($_POST['hotenkh']);                
                $ngaydatve = $_POST['ngaydatve'];
                if($trangthai == 0) $trangthai='Mới order';elseif($trangthai==1) $trangthai="Thanh toán";else $trangthai="Hủy";
                $makh = $_POST['makh']; 
                settype($ngaydatve,"date");
                settype($trangthai,"int");
                settype($makh,"int");
          
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updatehoadon($id,$hotenkh,$ngaydatve,$trangthai,$makh); 
                }else{
                    addhoadon($hotenkh,$ngaydatve,$trangthai,$makh);
                }
                header("location: index.php?ctrl=hoadon&act=index");

            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];

                xoaSanPham($id);

                xoahoadon($id);

            }
        $showAllSp = showAllSp();
        include_once "views/hoadonindex.php";
        break;
            default:
                break;
    }
?>
