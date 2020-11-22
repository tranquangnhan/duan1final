<?php
    include_once '../../../system/config.php';
    include_once '../../../system/database.php';
    include_once '../../../lib/vendor/autoload.php';
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

                if(setGhe($_POST['idghe'],$_POST['idcb'],'ttghethuong')){
                  $data['message'] = $id ;
                  $Return['StatusCode'] = 1; 
                  $pusher->trigger('my-channel', 'my-event', $data);
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
          
              $Return['html'] = renderHtml ($_POST['idcb'],'ttghethuong');
              $Return['StatusCode'] = 1;

              echo json_encode($Return);
              return;              
              break;
            default:
                # code...
                break;
        }
    }

?>