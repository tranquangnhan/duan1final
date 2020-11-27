<?php
// set value seet admin = 1 or 0
function setGhe($idGhe,$idChuyenBay,$loaiGhe)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay=".$idChuyenBay;
    $result = result1(1,$sql)[$loaiGhe];
    $arr =  explode(",",$result);
    $vitri =($idGhe-1);
    
    //Kiem tra so ghe da chon > 3 thi ko cho chon nua
    
    if($arr[$vitri] === '2'){
        $arr[$vitri] = 0;
    }
    if($arr[$vitri] === '0')
    {
        $arr[$vitri] = 2;
    }
    $kq = implode(",",$arr);
    $sql = "UPDATE trangthaidatve  SET ".$loaiGhe."='{$kq}' WHERE idchuyenbay=".$idChuyenBay;
    return exec1($sql);
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
        if($slTT[$i] == 2){
            $active = 'l-ghe-active';
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
?>