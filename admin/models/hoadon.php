
<?php
    function showkh(){
        $sql = "select * from khachhang where 1 limit 10";
        return result1(0,$sql);
    }
    function showhdedit($id){
        $sql = "select * from hoadon where id = '{$id}' ";
        return result1(1,$sql);
    }
    function showAllTenDm(){
        $sql = "select * from danhmuc where 1 limit 10";
        return result1(0,$sql);
    }
    function showallhd(){
        $sql = "select * from hoadon where 1 limit 10";
        return result1(0,$sql); 
    }
    function showAllSpAdmin(){
        $sql = "select * from hoadon ";
        return result1(0,$sql); 
    }
    // admin add product
    function addhoadon($idChuyenBay,$ngayDatVe,$trangThai,$tongTien){
        $sql = "INSERT INTO hoadon (idchuyenbay,ngaydatve,trangthai,tongtien) VALUES 
        ($idChuyenBay,'$ngayDatVe','$trangThai','$tongTien')";
        return getLastId($sql);
    }
    // admin delete product
    function xoahoadon($id){
        $sql = "DELETE FROM hoadon WHERE id=".$id;
        return exec1($sql);
    }
    //admin update sp
    function updatehoadon($id,$hotenkh,$ngaydatve,$trangthai,$makh){
            $sql = "UPDATE hoadon SET hotenKH='{$hotenkh}',ngaydatve='{$ngaydatve}', trangthai = '{$trangthai}', idkh= '{$makh}'
              WHERE id=".$id;
        return execute1($sql);  
    }
    function addHoaDonChiTiet($lastId,$viTriGhe,$hangGhe,$giaTien,$hoTenKh,$gioiTinh,$soDienThoai,$cmnd){
        $sql = "INSERT INTO hdchitiet (idhd,vitringoi,hangghe,giatien,tenkh,gioitinh,dienthoai,cmnd) VALUES 
        ('$lastId','$viTriGhe','$hangGhe','$giaTien','$hoTenKh','$gioiTinh','$soDienThoai','$cmnd')";
        return exec1($sql);
    }
?>