<?php
    function showDsMb($id){
        $sql = "SELECT * FROM dsmaybay WHERE id =$id";
        return result1(1,$sql);
    }

    function showDiemDi()
    {
        $sql = "SELECT sanbay.tinh FROM sanbay WHERE EXISTS 
        (SELECT * FROM tuyenduong WHERE sanbay.idsanbay = tuyenduong.iddiemdi)
        ";                     
        return result1 (0,$sql);
    }
    function showDiemDen()
    {
        $sql = "SELECT sanbay.tinh FROM sanbay WHERE EXISTS 
        (SELECT * FROM tuyenduong WHERE sanbay.idsanbay = tuyenduong.iddiemden)
        ";
        return result1 (0,$sql);
    }
   

  
?>