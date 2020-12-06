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
        return result1(1,$sql)['tinh'];
    } 
    function showiddiemdi_($id){ // t thêm dấu sếp gạch để sửa tạm thôi nhé
        $sql ="select * from tuyenduong  where id = '$id'";
        return result1(1,$sql)['iddiemdi'];
    } 
    function showiddiemden_($id){
        $sql ="select * from tuyenduong  where id = '$id'";
        return result1(1,$sql)['iddiemden'];
    } 
    function sendmailve($idhd){
        $sql ="
        select * , hdchitiet.idhd ,hoadon.id from hdchitiet 
            inner join hoadon on hdchitiet.idhd = hoadon.id 
            where hoadon.id = '$idhd'
        ";
        return result1(0,$sql);
    }
    function idmaybay($id){
        $sql ="select * from chuyenbay  where id = '$id'";
        return result1(1,$sql)['idmaybay'];
    } 
    function tenmaybay($id){
        $sql ="select * from dsmaybay  where id = '$id'";
        return result1(1,$sql)['name'];
    }
?>