<?php 
    session_start();
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'chonghe':
                $_SESSION['vitrighe'] = $_POST['idghe'];
                $_SESSION['idchuyenbay'] = $_POST['idcb'];
                $_SESSION['hangghe'] = $_POST['hangghe'];
                return;
                break;
            case 'chonghekhuhoi':
                $_SESSION['vitrighekh'] = $_POST['idghekh'];
                $_SESSION['idchuyenbaykh'] = $_POST['idcbkh'];
                $_SESSION['hangghekh'] = $_POST['hangghekh'];
                return;
                break;
            case 'checkkhuhoi':
                $Array = array();

                if(isset($_SESSION['ngayve'])&&($_SESSION['ngayve'])){
                    $Array["StatusCode"] = '1';
                    $Array['urlve'] = $_SESSION['urlve']; // chuyến đi
                }else{
                    $Array["StatusCode"] = '0'; // chuyến về
                }
                echo json_encode($Array);
                unset($_SESSION['ngayve']);
                return;
                break; 
            case 'checkslghe':
                $Array = array();
                if(isset($_SESSION['vitrighe'])&&isset($_SESSION['vitrighekh'])&&count($_SESSION['vitrighe']) !== count($_SESSION['vitrighekh'])){
                    $Array['StatusCode'] = 1;
                    $Array['slghe'] = count($_SESSION['vitrighe']);
                }else{
                    $Array['StatusCode'] = 0;
                }
                echo json_encode($Array);
                return;
                break;    
            default:
                # code...
                break;
        }
    }

?>