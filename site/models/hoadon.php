<?php
   
function checkinonl($macho){
        $sql = "select * from hdchitiet where id = '$macho'";
        return result1(0,$sql);
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
    function showtensanbay($id){
        $sql ="select * from sanbay  where idsanbay = '$id'";
        return result1(1,$sql)['tensanbay'];
    } 
    function showiddiemdi_($id){
        $sql ="select * from tuyenduong  where id = '$id'";
        return result1(1,$sql)['iddiemdi'];
    } 
    function showiddiemden_($id){
        $sql ="select * from tuyenduong  where id = '$id'";
        return result1(1,$sql)['iddiemden'];
    } 

?>