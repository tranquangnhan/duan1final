<?php


function showveedit($id)
{
    $sql = "select * from sanpham where id = '{$id}' ";
    return result1(1, $sql);
}
// function showAllTenDm()
// {
//     $sql = "select * from danhmuc where 1 limit 10";
//     return result1(0, $sql);
// }
function showAllve()
{
    $sql = "select * from sanpham where 1 limit 10";
    return result1(0, $sql);
}

function showsanbay()
{
    $sql = "select * from sanbay ";
    return result1(0, $sql);
}
// admin add product
// function addve($img, $iddm, $tenmaybay, $gia, $giamgia, $diemdi, $diemden, $loaighe, $tgdi, $tgden, $hanhly)
// {
//     $sql = "INSERT INTO sanpham (anh,iddm,tenmaybay,gia,giamgia,diemdi,dieamden,loaighe,tgdi,tgden,hanhly) VALUES 
//         ('{$img}','{$iddm}','{$tenmaybay}','{$gia}','{$giamgia}','{$diemdi}','{$diemden}','{$loaighe}','{$tgdi}','{$tgden}','{$hanhly}')";
//     exec1($sql);
// }
function addve($img, $iddm, $tenmaybay, $gia, $giamgia,  $tgdi, $tgden, $hanhly)
{
    $sql = "INSERT INTO sanpham (anh,iddm,tenmaybay,gia,giamgia,tgdi,tgden,hanhly) VALUES 
        ('{$img}','{$iddm}','{$tenmaybay}','{$gia}','{$giamgia}','{$tgdi}','{$tgden}','{$hanhly}')";
    exec1($sql);
}
// admin delete product
function xoaSanPham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    exec1($sql);
}
//admin update sp
function updateve($id, $img, $iddm, $tenmaybay, $gia, $giamgia, $diemdi, $diemden, $loaighe, $tgdi, $tgden, $hanhly)
{
    if (!$img) {
        $sql = "UPDATE sanpham SET iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
                giamgia='{$giamgia}',loaighe='{$loaighe}',tgdi='{$tgdi}',
                tgden='{$tgden}',hanhly='{$hanhly}'
         WHERE id=" . $id;
    } else {
        $sql = "UPDATE sanpham SET anh='{$img},'iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
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
        $sql = "INSERT INTO sanpham (tenmaybay,anh,gia,giamgia,iddm,diemdi,diemden,loaighe,tgdi,tgden,hanhly,suatan) VALUES 
        (?,?,?,?,?,?,?,?,?,?,?,?)";
        exec1($sql,$tenmaybay,$anh, $gia, $giamgia,$iddm,$diemdi,$diemden,$loaighe,$tgdi, $tgden, $hanhly,$suatan);
    }
    return true;
}
