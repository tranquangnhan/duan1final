<?php
function showSlKh(){
    $sql = "select count(*) as slkh from khachhang";
    return result1(1,$sql);
}
function showAllkh(){// show tất cả khách hàng
    $sql ="select * from khachhang order by id desc";
    return result1(0,$sql);// thì ở đây hàm chỉ cần thêm 2 tham số
                            // tham số đầu tiên là 0: show tất cả, tham số 2 là $sql
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
function showUserEdit($id){ //xác định trả về một hay nhiều giá trị ?
    $sql = "select * from khachhang where id=?";
    return result1(1,$sql,$id);
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
    $sql = "select * from khachhang where user=? and pass=?";
    return result1(1,$sql,$user,$pass);
    //tham số 1: trả về 1 giá trị,
    // $sql bằng câu sql ở trên
    // những tham số ở sau có thể có hoặc không
    // có bao nhiêu dấu ? thì truyền vào hàm bấy nhiên biến
}

?>