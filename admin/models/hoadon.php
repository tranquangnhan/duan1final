
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
    function addhoadon($ngayDatVe,$trangThai,$tongTien){
        $sql = "INSERT INTO hoadon (ngaydatve,trangthai,tongtien) VALUES 
        ('$ngayDatVe','$trangThai','$tongTien')";
      
        return getLastId($sql);
    }
    function addHoaDonChiTiet($lastId,$idChuyenBay,$viTriGhe,$hangGhe,$giaTien,$hoTenKh,$gioiTinh,$soDienThoai,$cmnd){
        $sql = "INSERT INTO hdchitiet (idhd,idchuyenbay,vitringoi,hangghe,giatien,tenkh,gioitinh,dienthoai,cmnd) VALUES 
        ('$lastId','$idChuyenBay','$viTriGhe','$hangGhe','$giaTien','$hoTenKh','$gioiTinh','$soDienThoai','$cmnd')";
       return exec1($sql);
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
    function demSoluong($idhd){
        $sql = "SELECT count(*) as 'sl' FROM `hdchitiet` WHERE idhd='$idhd' GROUP BY idhd ";
        return result1(1,$sql);
    }
    function showHoaDonCt($idHd){
        $sql = 'SELECT * FROM hdchitiet WHERE idhd='.$idHd;
        return result1(0,$sql);
    }

    function showHoaDon($idHd){
        $sql = 'SELECT * FROM hoadon WHERE id='.$idHd;
        return result1(1,$sql);
    }
    function setHoanTatHd($idhd){
        $sql = 'UPDATE hoadon SET trangthai ="2" WHERE id='.$idhd;
        return exec1($sql); 
    }
?>