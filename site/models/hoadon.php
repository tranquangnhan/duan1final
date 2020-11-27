<?php
   
function checkinonl($macho){
        $sql = "select * from hdchitiet where id = $macho";
        return result1(1,$sql);
    }
 
    function showidtuyenduong($id){
        $sql ="select * from chuyenbay  where id = '$id'";
        return result1(1,$sql)['idtuyenduong'];
    } 
    function showngaydi($id){
        $sql ="select * from chuyenbay  where id = '$id'";
        return result1(1,$sql)['ngaydi'];
    } 
    function showgiodi($id){
        $sql ="select * from chuyenbay  where id = '$id'";
        return result1(1,$sql)['giodi'];
    } 
    function showgioden($id){
        $sql ="select * from chuyenbay  where id = '$id'";
        return result1(1,$sql)['gioden'];
    } 


?>