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
            $tuyenBay = tuyenBay();
            $dsMayBay = dsMayBay();

            if(isset($_GET['idedit'])&&($_GET['idedit'])){
                $_SESSION['idedit'] = $_GET['idedit'];
                // $showveedit = showveedit($_SESSION['idedit']);
                include_once "views/veedit.php";
            }else{
                include_once "views/veadd.php";
            }
            if(isset($_POST['them'])&&($_POST['them'])||isset($_POST['sua'])&&($_POST['sua'])){
                $idMayBay = $_POST['idmaybay'];
                $idTuyenDuong = $_POST['idtuyenduong'];

                $giaVeThuongGia = $_POST['giavethuonggia'];
                $giaVeThuong = $_POST['giavethuong'];

                $ngayDi = $_POST['ngaybay'];
                $gioDi = $_POST['tgdi'];
                $gioDen = $_POST['tgden'];
                
                settype($idMayBay,"int");
                settype($diemDi,"int");
                settype($diemDen,"int");

                settype($giaVeThuongGia,"float");
                settype($giaVeThuong,"float");

                
                if(isset($_GET['idedit'])&&($_GET['idedit'])){
                    //updateve($id,$img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly);
                }else{

                    $idChuyenBay =  addve($idTuyenDuong,$idMayBay,$ngayDi,$gioDi,$gioDen);
                    
                    addTTVe($idMayBay,$idChuyenBay);
                    
                    $_SESSION['idchuyenbay'] = $idChuyenBay;

                    header('location: index.php?ctrl=ve&act=chonghe');
                }
            }
        break;
        case 'chonghe':
            $idChuyenBay = $_SESSION['idchuyenbay'];
            if(isset($_SESSION['idchuyenbay'])&&($_SESSION['idchuyenbay'])){
                $soGheThuongGia = getGhe($_SESSION['idchuyenbay'],'ttghethuonggia');
                $soGheThuong = getGhe($_SESSION['idchuyenbay'],'ttghethuong');
                include_once "views/chonghe.php";
            }else{
                echo "không có chuyến bay này !";
            }
            break;
        case 'done':
            if(isset($_GET['done'])){
                unset($_SESSION['idchuyenbay']);
                header('location: ?ctrl=ve&act=index');
            }
            include_once "views/veindex.php";
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