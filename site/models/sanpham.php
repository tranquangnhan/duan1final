<?php 
 function test(){
     $sql = "SELECT *
     FROM chuyenbay
     INNER JOIN tuyenduong ON chuyenbay.idtuyenduong = tuyenduong.id 
     INNER JOIN sanbay ON tuyenduong.iddiemdi = sanbay.idsanbay
     ";
     return result1(1,$sql);
 }


?>