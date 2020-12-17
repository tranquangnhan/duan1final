<?php
// set value seet admin = 1 or 0
function setGhe($idGhe,$idChuyenBay,$loaiGhe,$ip)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay=".$idChuyenBay;
    $result = result1(1,$sql)[$loaiGhe];
    $arr =  explode(",",$result);
    $vitri =($idGhe-1);
    
    $temp = explode('-',$arr[$vitri]);

    if($temp[0] == '0'){
        $arr[$vitri] = 2 .'-'. $ip ;
    }
  
    $kq = implode(",",$arr);
    $sql = "UPDATE trangthaidatve  SET ".$loaiGhe."='{$kq}' WHERE idchuyenbay=".$idChuyenBay;
    return exec1($sql);
}
function setGheThanhCong($idGhe,$idChuyenBay,$loaiGhe)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay=".$idChuyenBay;
    $result = result1(1,$sql)[$loaiGhe];
    $arr =  explode(",",$result);
    for ($i=0; $i < count($idGhe); $i++) { 
        $vitri =($idGhe[$i]-1);
        $temp = explode('-',$arr[$vitri]);

        if($temp[0] == '2'){
            $arr[$vitri] = 1 ;
        }
        $kq = implode(",",$arr);
        $sql = "UPDATE trangthaidatve  SET ".$loaiGhe."='{$kq}' WHERE idchuyenbay=".$idChuyenBay;
        exec1($sql);
    }
    return true;
}


function huyGhe($idGhe,$idChuyenBay,$loaiGhe,$ip)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay=".$idChuyenBay;
    $result = result1(1,$sql)[$loaiGhe];
    $arr =  explode(",",$result);
    for ($i=0; $i < count($idGhe); $i++) { 
        $vitri =($idGhe[$i]-1);
        $temp = explode('-',$arr[$vitri]);

        if($temp[0] == '2'){
            $arr[$vitri] = 0 .'-'. $ip ;
        }
        $kq = implode(",",$arr);
        $sql = "UPDATE trangthaidatve  SET ".$loaiGhe."='{$kq}' WHERE idchuyenbay=".$idChuyenBay;
        exec1($sql);
    }
    return true;
}
// render html to view
function renderHtml($idChuyenBay,$loaiGhe)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay ='$idChuyenBay'";
    $return =  result1(1,$sql)[$loaiGhe];
    $kq = '';
    $slTT = explode(",",$return);
    //trả về kết quả ghế thương gia hoặc thường
    if($loaiGhe === 'ttghethuonggia'){
        $class = 'l-ghe-thuonggia';
    }else{
        $class = 'l-ghe-phothong';
    }
    // set class
    // render html
    $bien = -2;
    for ($i=0; $i< count($slTT); $i++) {
        $bien ++;
        $temp = explode("-",$slTT[$i]);
        if($temp[0] == 2){
            if($temp[1] === get_client_ip()){
                $active = 'l-ghe-active';
            }else{
                $active = 'l-bg-gray';
            }
        }
        if($slTT[$i] == 1){
            $active = 'l-bg-gray';
        }
        if($slTT[$i] == 0){
            $active = '';
        }
        if(($bien % 4) ===0 ){
            $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-large '.$active.' mr-right-10pt">' . ($i+1). '</div>';
        }else{
            $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-large '.$active.'" >' . ($i+1). '</div>';
        }
    }
    return $kq;
}

function idTuyenDuong()
{
 $sql = "SELECT idtuyenduong FROM chuyenbay";
    return result1(0,$sql);
}

function showDiaChi($idTuyenDuong)
{
    $sql = "SELECT * FROM tuyenduong WHERE id ='{$idTuyenDuong}'";
    return result1(0,$sql);
}
function showTenDc($id){
    $sql = "SELECT * FROM sanbay WHERE idsanbay ='{$id}'";
    return result1(0,$sql);
}
function showAllSanBay(){
    $sql = "SELECT * FROM sanbay WHERE 1";
    return result1(0,$sql);
}
function showsanbay1()
{
    $sql = "select * from sanbay ";
    return result1(0, $sql);
}
function showvekm($page_num, $page_size){
    $start_row_vekm = ($page_num - 1) * $page_size;
    $sql = "SELECT * FROM giave WHERE giamgia LIMIT $start_row_vekm, $page_size";
    return result1(0, $sql);
}

function countvekm() {
    $sql = "SELECT COUNT(*) AS numberRow FROM giave WHERE giamgia";
    $row = result1(1,$sql);
    $rowcount = $row['numberRow'];
    return $rowcount;
}

function showVeMotChieu($diemDi,$diemDen,$ngayDi,$loaiGhe){
    if($loaiGhe == 1){
        $loaiGhe = 'ttghethuong';
    }
    if($loaiGhe == 2){
        $loaiGhe = 'ttghethuonggia';
    }

    $sql = "SELECT chuyenbay.id,iddiemdi,iddiemden, ngaydi,".$loaiGhe."
    FROM tuyenduong
    INNER JOIN chuyenbay
    ON tuyenduong.id = chuyenbay.idtuyenduong
    INNER JOIN giave
    ON chuyenbay.id = giave.idchuyenbay
    INNER JOIN trangthaidatve
    ON trangthaidatve.idchuyenbay = giave.idchuyenbay
    WHERE iddiemdi ='$diemDi' AND iddiemden = '$diemDen' AND ngaydi = '$ngayDi'";
    return result1(0,$sql);
}

function showVeSite($id)
{
    $sql = "select o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,o.masb_den,q.masb_di,p.giavethuong, p.giavethuonggia,b.hangmb
	from 
    (select r.gioden,r.giodi,r.ngaydi, r.id, s.tinh as 'tinh_den',s.masanbay as 'masb_den' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemden = s.idsanbay) as o
    
    inner join
    
    (select r.gioden,r.giodi,r.ngaydi,r.id, s.tinh as 'tinh_di',s.masanbay as 'masb_di' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemdi = s.idsanbay) as q
    
    inner join
    
    (select r.id, w.giavethuong, w.giavethuonggia from giave w
    inner join chuyenbay r on w.idchuyenbay = r.id) as p
    
    inner join
    
    (select r.id, d.hangmb from dsmaybay d
    inner join chuyenbay r on d.id = r.idmaybay) as b
    
    on o.id=q.id and q.id=p.id and o.id=b.id where o.id='$id'";


    return result1(0,$sql);
}

function showhangmb($id) {
    $sql ="SELECT * FROM chuyenbay cb INNER JOIN dsmaybay dsmb on dsmb.id = cb.idmaybay WHERE cb.id = '$id'";
    return result1(1,$sql)['hangmb'];
}
function setThanhCong($idhd){
    $sql = "UPDATE hoadon SET trangthai = '2' WHERE id = '$idhd'";
    return exec1($sql);
}

?>