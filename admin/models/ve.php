<?php
function showAllLuotXem()
{
    $sql = "select sum(luotxem) as luotxem from sanpham";
    return result1(1, $sql);
}
function showAllHangHoa()
{
    $sql = "select count(*) as slhh from sanpham";
    return result1(1, $sql);
}
function showSpEdit($id)
{
    $sql = "select * from sanpham where id = '{$id}' ";
    return result1(1, $sql);
}
function showAllTenDm()
{
    $sql = "select * from danhmuc where 1 limit 10";
    return result1(0, $sql);
}
function showAllSp()
{
    $sql = "select * from sanpham where 1 limit 10";
    return result1(0, $sql);
}
function showAllSpAdmin()
{
    $sql = "select * from sanpham ";
    return result1(0, $sql);
}
// admin add product
function addProduct($img, $iddm, $tenmaybay, $gia, $giamgia, $diemdi, $diemden, $loaighe, $tgdi, $tgden, $hanhly, $giaitri, $loaimaybay)
{
    $sql = "INSERT INTO sanpham (anh,iddm,tenmaybay,gia,giamgia,diemdi,dieamden,loaighe,timestar,timeend,hanhly,giaitri,xuatan) VALUES 
        ('{$img}','{$iddm}','{$tenmaybay}','{$gia}','{$giamgia}','{$diemdi}','{$diemden}','{$loaighe}','{$tgdi}','{$tgden}','{$hanhly}','{$giaitri}','{$loaimaybay}')";
    exec1($sql);
}
// admin delete product
function xoaSanPham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    exec1($sql);
}
//admin update sp
function updateProduct($id,$img,$iddm,$tenmaybay,$gia,$giamgia,$diemdi,$diemden,$loaighe,$tgdi,$tgden,$hanhly,$giaitri,$loaimaybay)
{
    if (!$img) {
        $sql = "UPDATE sanpham SET iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
                giamgia='{$giamgia}',điemi='{$diemdi}',diemden='{$diemden}',loaighe='{$loaighe}',timestar='{$tgdi}',
                timeend='{$tgden}',hanhly='{$hanhly}',giaitri='{$giaitri}',loaimaybay='{$loaimaybay}'
         WHERE id=" . $id;
    } else {
        $sql = "UPDATE sanpham SET anh='{$img},'iddm='{$iddm}',tenmaybay='{$tenmaybay}',gia='{$gia}', 
        giamgia='{$giamgia}',điemi='{$diemdi}',diemden='{$diemden}',loaighe='{$loaighe}',timestar='{$tgdi}',
        timeend='{$tgden}',hanhly='{$hanhly}',giaitri='{$giaitri}',loaimaybay='{$loaimaybay}'
 WHERE id=" . $id;
    }
    execute1($sql);
}
