<?php


function showveedit($id)
{
    $sql = "select * from chuyenbay where id = '{$id}' ";
    return result1(1, $sql);
}
// function showAllTenDm()
// {
//     $sql = "select * from danhmuc where 1 limit 10";
//     return result1(0, $sql);
// }
function showAllve()
{
    $sql = "select * from chuyenbay where 1 limit 10";
    return result1(0, $sql);
}
function showTenmaybay($id){
    $sql ="select * from dsmaybay where id= '$id'";
    return result1(1,$sql)['name'];
}
function showdiemdi(){
    $sql = "select  tensanbay,chuyenbay.idtuyenduong,tuyenduong.id,tuyenduong.iddiemdi,sanbay.idsanbay
     FROM chuyenbay
    INNER JOIN tuyenduong ON chuyenbay.idtuyenduong = tuyenduong.id 
    INNER JOIN sanbay ON tuyenduong.iddiemdi = sanbay.idsanbay
    "
    ;  return result1(0, $sql);
}
function showdiemden(){
    $sql = "select  tensanbay,chuyenbay.idtuyenduong,tuyenduong.id,tuyenduong.iddiemden,sanbay.idsanbay
     FROM chuyenbay
    INNER JOIN tuyenduong ON chuyenbay.idtuyenduong = tuyenduong.id 
    INNER JOIN sanbay ON tuyenduong.iddiemden = sanbay.idsanbay
    "
    ;  return result1(0, $sql);
}
function showsanbay()
{
    $sql = "select * from sanbay ";
    return result1(0, $sql);
}

// admin delete product
function xoaSanPham($id)
{
    $sql = "DELETE FROM chuyenbay WHERE id=" . $id;
    exec1($sql);
}
//admin update sp
function updateve($id, $img, $iddm, $tenmaybay, $gia, $giamgia, $diemdi, $diemden, $loaighe, $tgdi, $tgden, $hanhly)
{
    if (!$img) {
        $sql = "UPDATE chuyenbay SET iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
                giamgia='{$giamgia}',loaighe='{$loaighe}',tgdi='{$tgdi}',
                tgden='{$tgden}',hanhly='{$hanhly}'
         WHERE id=" . $id;
    } else {
        $sql = "UPDATE chuyenbay SET anh='{$img},'iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
        giamgia='{$giamgia}',loaighe='{$loaighe}',tgdi='{$tgdi}',
        tgden='{$tgden}',hanhly='{$hanhly}'
 WHERE id=" . $id;
    }
    execute1($sql);
}
// insert data from import excel
function insertData($sheetData,$highestRow){
    for ($i=2; $i <= $highestRow; $i++) { 
        $tenmaybay = $sheetData[$i]['A'];
        $anh = $sheetData[$i]['B'];
        $gia = $sheetData[$i]['C'];
        $giamgia = $sheetData[$i]['D'];
        $iddm = $sheetData[$i]['E'];
        $diemdi = $sheetData[$i]['F'];
        $diemden = $sheetData[$i]['G'];
        $loaighe = $sheetData[$i]['H'];
        $tgdi = $sheetData[$i]['I'];
        $tgden = $sheetData[$i]['J'];
        $hanhly = $sheetData[$i]['K'];
        $suatan = $sheetData[$i]['L'];
        $sql = "INSERT INTO chuyenbay (tenmaybay,anh,gia,giamgia,iddm,diemdi,diemden,loaighe,tgdi,tgden,hanhly,suatan) VALUES 
        (?,?,?,?,?,?,?,?,?,?,?,?)";
        exec1($sql,$tenmaybay,$anh, $gia, $giamgia,$iddm,$diemdi,$diemden,$loaighe,$tgdi, $tgden, $hanhly,$suatan);
    }
    return true;
}

function tuyenBay()
{
 $sql = "SELECT * FROM tuyenduong WHERE 1";
 return result1(0,$sql);
}

function addIdtuyenDuong($diemdi,$diemden)
{
    $sql = "INSERT INTO tuyenduong (iddiemdi,iddiemden) VALUES 
        ('$diemdi','$diemden')";
    $lastId = getLastId($sql);
    return $lastId;
}

function addve($idTuyenDuong,$idMayBay,$ngayDi,$gioDi,$gioDen)
{
    $sql = "INSERT INTO chuyenbay (idtuyenduong,idmaybay,ngaydi,giodi,gioden) VALUES 
        ('$idTuyenDuong','$idMayBay','$ngayDi','$gioDi','$gioDen')";
     $lastId = getLastId($sql);
     return $lastId;
}
function getGheOfMb($idChuyenBay)
{
    $sql = "SELECT * FROM dsmaybay WHERE id = '$idChuyenBay'";
    return result1(1,$sql);
};


function addTTVe($idMayBay,$idChuyenBay)
{
    $soGheThuong = getGheOfMb($idMayBay)['soghethuong'];
    $soGheThuongGia = getGheOfMb($idMayBay)['soghethuonggia'];
    $TTGheThuong = '';
    for ($i=0; $i < $soGheThuong; $i++) {
        if($i === ($soGheThuong - 1)){
            $TTGheThuong .= '0';
        }else{
            $TTGheThuong .= '0,'; 
        }
    }
    
    $TTGheThuongGia = '';
    for ($i=0; $i < $soGheThuongGia; $i++) {
        if($i === ($soGheThuongGia - 1)){
            $TTGheThuongGia .= '0';
        }else{
            $TTGheThuongGia .= '0,'; 
        }
    }
    $sql = "INSERT INTO trangthaidatve (ttghethuong,ttghethuonggia,idchuyenbay) VALUES 
        ('$TTGheThuong','$TTGheThuongGia','$idChuyenBay')";
    exec1($sql);
}

function setGheAdmin($id,$idMayBay,$loaiGhe){
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay=".$idMayBay;
    $result = result1(1,$sql)[$loaiGhe];
    $arr =  explode(",",$result);
    $vitri =($id-1);
    if($arr[$vitri] == '1') {
        $arr[$vitri] = 0;
    }
    else{
        $arr[$vitri] = 1;
    }
    $kq = implode(",",$arr);
    $sql = "UPDATE trangthaidatve  SET ".$loaiGhe."='{$kq}' WHERE idchuyenbay=".$idMayBay;
    return exec1($sql);
}
function dsMayBay()
{
    $sql = "SELECT * FROM dsmaybay";    
    return result1(0,$sql);
}

function getGhe($idChuyenBay,$loaiGhe)
{
    $sql = "SELECT ".$loaiGhe." FROM trangthaidatve WHERE idchuyenbay ='$idChuyenBay'";
    $return =  result1(1,$sql)[$loaiGhe];
    $kq = '';
    $slTT = explode(",",$return);

    if($loaiGhe === 'ttghethuonggia'){
        $class = 'l-ghe-thuonggia tg';
    }else{
        $class = 'l-ghe-phothong pt';
    }
   
    if(count($slTT)>8){
        for ($i=0; $i< count($slTT); $i++) {
            if($slTT[$i] == 1){
                $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-large  bg-red" >' . ($i+1). '</div>';
            }else{
                $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-large " >' . ($i+1). '</div>';
            }
            
        }
    }
    if(count($slTT)<=8){
        for ($i=0; $i< count($slTT); $i++) {
            if($slTT[$i] == 1){
                $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-small  bg-red">' . ($i+1). '</div>';
            }else{
                $kq .= '<div class="'.$class.' l-div-hover d-inline-block s-large  " >' . ($i+1). '</div>';
            }
        }
    }
    
    $Array = array();
    $Array['idchuyenbay'] = $idChuyenBay;
    $Array['html'] =$kq;
    
    return json_encode($Array);
}

function showNameSb($id){
    $sql = "SELECT tensanbay FROM sanbay WHERE idsanbay =".$id;
    return result1(1,$sql)['tensanbay'];
}