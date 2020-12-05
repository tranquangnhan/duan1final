<?php
    session_start();
    include_once '../../../system/config.php';
    include_once '../../../system/database.php';
    include_once '../../../lib/vendor/autoload.php'; // require pusher
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/ve.php';
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'setghetg': 
                $Return = array(); 

                $options = array(
                    'cluster' => 'ap1',
                    'useTLS' => true
                  );
                  $pusher = new Pusher\Pusher(
                    '166bbd5af4fcbf088045',
                    '14c083c06113b8053d69',
                    '1103344',
                    $options
                  );
                  if(setGhe($_POST['idghe'],$_POST['idcb'],'ttghethuonggia')){
                    $data['message'] = $id ;
                    $Return['StatusCode'] = 1; 
                    $pusher->trigger('my-channel', 'my-event', $data);
                  }    

                echo json_encode($Return);
                return;
                break;
            
            case 'setghethuong': 
             
                $Return = array(); 

                $options = array(
                    'cluster' => 'ap1',
                    'useTLS' => true
                  );
                $pusher = new Pusher\Pusher(
                    '166bbd5af4fcbf088045',
                    '14c083c06113b8053d69',
                    '1103344',
                  $options
                );
                try {
                  if(setGhe($_POST['idghe'],$_POST['idcb'],'ttghethuong')){
                    $data['message'] = $id ;
                    $Return['StatusCode'] = 1; 
                    $pusher->trigger('my-channel', 'my-event', $data);
                  }   
                } catch (TypeException $Error) {  
                  LogFile($Error -> getMessage(), 'pusher', get_defined_vars());
                }
              echo json_encode($Return);
              return;
              break;
            
            case 'showghetg': 
                $Return = array(); 
            
                $Return['html'] = renderHtml ($_POST['idcb'],'ttghethuonggia');
                $Return['StatusCode'] = 1;

                echo json_encode($Return);
                return;
                break;
            case 'showghethuong': 
                $Return = array(); 
                try {
                  $Return['html'] = renderHtml ($_POST['idcb'],'ttghethuong');
                  $Return['StatusCode'] = 1;
                } 
                catch (TypeException $Error) {  
                  LogFile($Error -> getMessage(), 'showghethuong', get_defined_vars());
                }
                echo json_encode($Return);
                return;              
                break;
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

                if($_SESSION['ngayve']){
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