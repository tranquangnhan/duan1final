<?php
function addBinhLuan($star,$idkh,$idbaiviet,$noidung,$trangthai){
    $sql = "INSERT INTO binhluan (star,idkh,idbaiviet,noidung,trangthai) VALUES 
    ('{$star}', '{$idkh}', '{$idbaiviet}','{$noidung}','{$trangthai}')";
    exec1($sql);
}
function editBinhLuan($id,$star,$idkh,$idbaiviet,$noidung,$trangthai){
    $sql = "UPDATE binhluan SET star='{$star}', idkh = '{$idkh}' , idbaiviet = '{$idbaiviet}', noidung= '{$noidung}', trangthai= '{$trangthai}'  WHERE id=".$id;
    execute1($sql);  
}
function showTenbv($id){
    $sql ="select * from baiviet where id = '$id'";
    return result1(1,$sql)['name'];
}
function showallbv(){// show tất cả khách hàng
    $sql ="select * from baiviet order by id desc";
    return result1(0,$sql);// thì ở đây hàm chỉ cần thêm 2 tham số
                            // tham số đầu tiên là 0: show tất cả, tham số 2 là $sql
}
function showbl(){
    $sql = "select * from binhluan where 1";
    return result1(0,$sql);
}
function spCmt($id){
    $sql = "select * from sanpham where id =".$id;
    return result1(1,$sql);
}
function xoaBinhLuan($id){
    $sql = "DELETE FROM binhluan WHERE id=".$id;
    exec1($sql);
}
function showbledit($id){
    $sql = "select * from binhluan where id = $id" ;
    return result1(1,$sql);
}
?>