
<?php
    function showAllLuotXem(){
        $sql = "select sum(luotxem) as luotxem from hoadon";
        return result1(1,$sql);
    }
    function showAllHangHoa(){
        $sql = "select count(*) as slhh from hoadon";
        return result1(1,$sql);
    }
    function showSpEdit($id){
        $sql = "select * from hoadon where id = '{$id}' ";
        return result1(1,$sql);
    }
    function showAllTenDm(){
        $sql = "select * from danhmuc where 1 limit 10";
        return result1(0,$sql);
    }
    function showAllSp(){
        $sql = "select * from hoadon where 1 limit 10";
        return result1(0,$sql); 
    }
    function showAllSpAdmin(){
        $sql = "select * from hoadon ";
        return result1(0,$sql); 
    }
    // admin add product
    function addhoadon($hotenkh,$ngaydatve,$trangthai,$makh){
        $sql = "INSERT INTO hoadon (hotenKH,ngaydatve,trangthai,idkh) VALUES 
        ('{$hotenkh}','{$ngaydatve}','{$trangthai}','{$makh}')";
        exec1($sql);
    }
    // admin delete product
    function xoahoadon($id){
        $sql = "DELETE FROM hoadon WHERE id=".$id;
        exec1($sql);
    }
    //admin update sp
    function updatehoadon($id,$hotenkh,$ngaydatve,$trangthai,$makh){
            $sql = "UPDATE hoadon SET hotenKH='{$hotenkh}',ngaydatve='{$ngaydatve}', trangthai = '{$trangthai}', idkh= '{$makh}'
              WHERE id=".$id;
        execute1($sql);  
    }

?>