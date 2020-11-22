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
function addkh($tenkh,$user,$gioitinh,$role,$pass,$email,$imgupload,$sodienthoai,$diachi,$thanhpho,$tichdiem,$randomkey){
    $sql = "INSERT INTO khachhang (tenKh,user,gioitinh,role,pass,email,avatar,sodienthoai,diachi,thanhpho,tichdiem,randomkey) VALUES 
        ('{$tenkh}','{$user}','{$gioitinh}', '{$role}', '{$pass}','{$email}','{$imgupload}','{$sodienthoai}','{$diachi}','{$thanhpho}', '{$tichdiem}', '{$randomkey}')";
    return getLastId($sql);
}
function showkhedit($id){ //xác định trả về một hay nhiều giá trị ?
    $sql = "select * from khachhang where id=?";
    return result1(1,$sql,$id);
}
function updatekh($id,$tenkh,$user,$gioitinh,$role,$pass,$email,$imgupload,$sodienthoai,$diachi,$thanhpho,$tichdiem,$randomkey){
    if(!$imgupload)   {
        $sql = "UPDATE khachhang SET tenKH='{$tenkh}', user='{$user}',gioitinh ='{$gioitinh}', role = '{$role}', pass = '{$pass}' ,email='{$email}',sodienthoai='{$sodienthoai}',diachi='{$diachi}', thanhpho = '{$thanhpho}', tichdiem = '{$tichdiem}'  WHERE id=".$id;
    }else{
        $sql = "UPDATE khachhang SET tenKH='{$tenkh}', user='{$user}',gioitinh ='{$gioitinh}', role = '{$role}', pass = '{$pass}' ,email='{$email}',avatar='{$imgupload}',sodienthoai='{$sodienthoai}',diachi='{$diachi}', thanhpho = '{$thanhpho}', tichdiem = '{$tichdiem}'  WHERE id=".$id;
    }
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
function checkUserSignupAdmin($user,$pass){
    $user = str_replace(";","",$user);
    $user = str_replace("'","",$user);
    $user = str_replace('"',"",$user);
    $pass = str_replace(";","",$pass);
    $pass = str_replace("'","",$pass);
    $pass = str_replace('"',"",$pass);
    $user = addslashes($user);
    $pass = addslashes($pass);
    $sql = "select * from khachhang where user=? and pass=?";
    $user = result1(1,$sql,$user,$pass);
    if(is_array($user)){
        $_SESSION['sid'] = $user['id'];
        $_SESSION['suser']= $user['user'];
        $_SESSION['role'] = $user['role'];
        return true;
    }else{
        return false;
    }
}