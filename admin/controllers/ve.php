<?php
    if(isset($_GET['act'])&&($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'home';
    }
    switch ($act) {
        case 'index':
            $showAllve = showAllve();
            include_once "views/veindex.php";
        break;
        case 'import':
            if(isset($_POST['import'])&&($_POST['import'])){
                $file = $_FILES['file']['tmp_name'];
                
                $objReader = PHPExcel_IOFactory::createReaderForFile($file);
                $objReader->setLoadSheetsOnly("vemaybay"); // tên sheet

                $objExcel = $objReader->load($file); //load file
                $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);

                $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
                if(insertData($sheetData,$highestRow)) header("location: ?ctrl=ve&act=index"); 
                else echo 'Lỗi insert dữ liệu vào database';
            }
            include_once "views/importexcel.php";
        break;
        case 'add':
            $showdmsp = showAllTenDm();
            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                $showveedit = showveedit($_SESSION['idedit']);
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
                // $diemdi =stripTags( $_POST['diemdi']); 
                // $diemden =stripTags( $_POST['diemden']);
                // $loaighe =stripTags( $_POST['loaighe']);
                $tgdi = $_POST['tgdi']; 
                $tgden = $_POST['tgden']; 
                $hanhly = $_POST['hanhly'];
                if(isset($_POST['xuatan'])&&($_POST['xuatan'])){
                    $xuatan = $_POST['xuatan'];
                }else{
                    $xuatan = "0";
                }
                settype($gia,"float");
                settype($iddm,"int");
                settype($giamgia,"int");
                settype($gia,"int");
                settype($tgdi,"datetime");
                settype($tgden,"datetime");
                settype($hanhly,"int");  
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    updateve($id,$img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly); 
                }else{
                    // addve($img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly);
                    addve($img,$iddm,$tenmaybay,$gia,$giamgia,$tgdi,$tgden,$hanhly);
                }
                header("location: index.php?ctrl=ve&act=index");
            }
        break;
        case 'del':
            if(isset($_GET['iddel'])&&($_GET['iddel'])>0){
                $id = $_GET['iddel'];
                xoaSanPham($id);
            }
            $showAllve = showAllve();
        include_once "views/veindex.php";
        break;
            default:
                break;
    }
?>