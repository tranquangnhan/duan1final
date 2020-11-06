<?php
function  addBinhLuan($star,$iduser,$idsp,$noidung,$trangthai){
    $sql = "INSERT INTO binhluan (star,iduser,idsp,noidung,trangthai) VALUES 
    ('{$star}', '{$iduser}', '{$idsp}','{$noidung}','{$trangthai}')";
    exec1($sql);
}
function editBinhLuan($id,$star,$iduser,$idsp,$noidung,$trangthai){
    $sql = "UPDATE binhluan SET star='{$star}', iduser = '{$iduser}' , idsp = '{$idsp}', noidung= '{$noidung}', trangthai= '{$trangthai}'  WHERE id=".$id;
    execute1($sql);  
}
function showBinhLuan(){
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
function showBlEdit($id){
    $sql = "select * from binhluan where id = $id" ;
    return result1(1,$sql);
}
?>