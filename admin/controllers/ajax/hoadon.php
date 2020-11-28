<?php 
    // session_start();
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'hoadon':
                $Array = array();
        
                $Array['hotenkh'] = explode(',',$_POST['hotenkh']);

                $Array['gioitinh'] = explode(',',$_POST['gioitinh']);

                $Array['dienthoai'] = explode(',',$_POST['dienthoai']);

                $Array['cmnd'] = explode(',',$_POST['cmnd']);

                
    
                return;
                break;
            default:
                # code...
                break;
        }
    }

?>