<?php
function showSlKh(){
    $sql = "select count(*) as slkh from khachhang";
    return result1(1,$sql);
}
function showallkh(){// show tất cả khách hàng
    $sql ="select * from khachhang order by id desc";
    return result1(0,$sql);// thì ở đây hàm chỉ cần thêm 2 tham số
                            // tham số đầu tiên là 0: show tất cả, tham số 2 là $sql
}
function showTenKh($id){
    $sql ="select * from khachhang where id= '$id'";
    return result1(1,$sql)['user'];
}
function xoakhachhang($id){
    $sql = "DELETE FROM khachhang WHERE id=".$id;
    exec1($sql);
}
function addkh($user,$role,$pass,$kichhoat,$ngaysinh,$email,$sodienthoai,$diachi,$thanhpho,$quocgia,$tichdiem,$randomkey){
    $sql = "INSERT INTO khachhang (user,role,pass,kichhoat,ngaysinh,email,sodienthoai,diachi,thanhpho,quocgia,tichdiem,randomkey) VALUES 
        ('{$user}', '{$role}', '{$pass}','{$kichhoat}','{$ngaysinh}','{$sodienthoai}','{$diachi}','{$thanhpho}', '{$quocgia}', '{$tichdiem}', '{$randomkey}')";
    exec1($sql);
}
function showkhedit($id){ //xác định trả về một hay nhiều giá trị ?
    $sql = "select * from khachhang where id=?";
    return result1(1,$sql,$id);
}
function updatekh($id,$user,$role,$pass,$kichhoat,$ngaysinh,$email,$sodienthoai,$diachi,$thanhpho,$quocgia,$tichdiem,$randomkey){
  
        $sql = "UPDATE khachhang SET user='{$user}', role = '{$role}', pass = '{$pass}' , kichhoat= '{$kichhoat}', ngaysinh= '{$ngaysinh}',email='{$email}',sodienthoai='{$sodienthoai}',diachi='{$diachi}', thanhpho = '{$thanhpho}', quocgia = '{$quocgia}', tichdiem = '{$tichdiem}', randomkey = '{$randomkey}'  WHERE id=".$id;
    
    execute1($sql);  
}
function checkUser($user,$pass){
    $sql = "select * from khachhang where user=? and pass=?";
    return result1(1,$sql,$user,$pass);
    //tham số 1: trả về 1 giá trị,
    // $sql bằng câu sql ở trên
    // những tham số ở sau có thể có hoặc không
    // có bao nhiêu dấu ? thì truyền vào hàm bấy nhiên biến
}
