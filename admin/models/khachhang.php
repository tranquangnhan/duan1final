<?php
function showSlKh(){
    $sql = "select count(*) as slkh from khachhang";
    return result1(1,$sql);
}
function showAllkh(){
    $sql ="select * from khachhang order by id desc";
    return result1(0,$sql);
}
function showTenKh($id){
    $sql ="select * from khachhang where id= '$id'";
    return result1(1,$sql)['user'];
}
function xoaKhachHang($id){
    $sql = "DELETE FROM khachhang WHERE id=".$id;
    exec1($sql);
}
function addUser($name,$pass,$hoten,$kichhoat,$img,$email,$vaitro,$anhien){
    $sql = "INSERT INTO khachhang (name,pass,hoten,kichhoat,img,email,vaitro,anhien) VALUES 
        ('{$name}', '{$pass}', '{$hoten}','{$kichhoat}','{$img}','{$email}','{$vaitro}','{$anhien}')";
    exec1($sql);
}
function showUserEdit($id){
    $sql = "select * from khachhang where id= {$id}";
    return result1(1,$sql);
}
function editUser($id,$name,$pass,$hoten,$kichhoat,$img,$email,$vaitro,$anhien){
    if(!$img){
        $sql = "UPDATE khachhang SET name='{$name}', pass = '{$pass}' , hoten = '{$hoten}', kichhoat= '{$kichhoat}',email='{$email}',vaitro='{$vaitro}',anhien='{$anhien}'  WHERE id=".$id;
    }else{
        $sql = "UPDATE khachhang SET name='{$name}', pass = '{$pass}' , hoten = '{$hoten}', kichhoat= '{$kichhoat}', img= '{$img}',email='{$email}',vaitro='{$vaitro}',anhien='{$anhien}'  WHERE id=".$id;
    }
    execute1($sql);  
}
function checkUser($user,$pass){
    $sql = "select * from khachhang where user='{$user}' and pass='{$pass}'";
    return result1(1,$sql);
}
?>