<?php
   
function showhs($iduser){
        $sql = "select * from khachhang where id = $iduser";
        return result1(0,$sql);
    }

   
function   updatehs($id,$ten,$email,$sdt,$diachi,$thanhpho) {
    $sql = " UPDATE khachhang SET user='{$ten}',email='{$email}' ,sodienthoai='{$sdt}', diachi='{$diachi}',thanhpho='{$thanhpho}' WHERE id='{$id}'";
    execute1($sql);
}
function showkhedit($id){
    $sql = "select * from khachhang where id = $id" ;
    return result1(1,$sql);
}
function showallhs(){// show tất cả khách hàng
    $sql ="select * from khachhang order by id desc";
    return result1(0,$sql);// thì ở đây hàm chỉ cần thêm 2 tham số
                            // tham số đầu tiên là 0: show tất cả, tham số 2 là $sql
}
?>