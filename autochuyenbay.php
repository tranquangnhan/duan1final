<?php
//Cronjob chay moi 5p
//Lap qua cac hoa don co trang thai chua thanh toan
//Va kiem tra thoi gian neu vuot khoi muc quy dinh
//Thi tra l?i tr?ng thái ghe là chua chon d?ng th?i h?y hóa don và hdct
require_once "system/config.php";
require_once "system/database.php";
require_once "admin/models/ve.php";
include_once 'lib/vendor/autoload.php'; // require pusher
function selectData()
{
    $sql = "SELECT * FROM chuyenbay";
    return result1(0,$sql); 
}
// gi? di: l?y gi? di c?ng thêm 4 ti?ng
// gi? d?n : l?y gi? d?n công thêm 4 ti?ng
// ngày: n?u quá 24h thì tang thêm 1 ngày

if ($_POST['Action'])
{
  
    switch ($_POST['Action']) {
        case 'setttghe':
            $Array = array();
            $selectData = selectData();
            foreach ($selectData as $ve) {
            $today_date = strtotime(date("Y-m-d"));

            $today_time = strtotime(date('H:i:s'));

            $another_date = $ve['ngaydi'];

            if ($today_date > strtotime($another_date)) {
                setTrangThai($ve['id']);
            } else {
                if($ve['ngaydi'] == date("Y-m-d")&& strtotime($ve['gioden']) <= $today_time){
                    setTrangThai($ve['id']);
                }
            }
            }  
            $Array['StatusCode'] = 1;
            echo json_encode($Array);
            return;
            break;
        case 'getkqghe':
            $Array = array();
            $Array['StatusCode'] = (setAutoChuyenBay() === true) ? 1 : 0;
            echo json_encode($Array);
            return;
            break;
        case 'showkqghe':
            $Array = array();
            $Array['StatusCode'] = selectTime();
            echo json_encode($Array);
            return;
            break;
        default:
            # code...
            break;
    }
}
function setAutoChuyenBay(){
    $Array = array();
    $selectData = selectData();
    foreach ($selectData as $ve) {
        $today_date = strtotime(date("Y-m-d"));
    
        $today_time = strtotime(date('H:i:s'));
    
    
        if ( $ve['trangthai'] == 1) {
            
            // setTrangThai($ve['id']);
            $id = $ve['id'];

            $idTuyenDuong = $ve['idtuyenduong'];
            $idMayBay = $ve['idmaybay'];
            $gioDi = date('H:i:s',strtotime('+4 hour',strtotime($ve['giodi'])));
            
            $gioDen = date('H:i:s',strtotime('+4 hour',strtotime($ve['gioden'])));
            
            if(strtotime('+4 hour',strtotime($ve['giodi'])) >= strtotime('24:00:00')){
                $ngayDi =  date('Y-m-d',strtotime('+1 day',strtotime($ve['ngaydi'])));
            }else{
                $ngayDi =  $ve['ngaydi'];
            }

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
            
              if(updateveAuto($id,$idTuyenDuong,$idMayBay,$ngayDi,$gioDi,$gioDen,0)== true){
                $data['message'] = $id ;
                $Return['StatusCode'] = 1; 
                $pusher->trigger('my-channel', 'my-event', $data);
              }    
        } 
    }
    return true;
}
// set lại ghế trạng thái chưa đặt
// function SelectGhe($loaiGhe){
//     $sql = "SELECT * FROM `trangthaidatve` WHERE 1"; 
//     $result = result1(0,$sql);
    
//     for ($i=0; $i < count($result); $i++) { 
//         if(explode("-",$result[$i]['ttghethuong'])[0] == 2){
//             // echo '1';
//             // echo $i;
//             // print_r($result[$i]['id']);
//             print_r($result[$i]['ttghethuong']);
//             print_r("<br>");
//         }
//     }
// }
// print_r(SelectGhe('ttghethuong'));

?>