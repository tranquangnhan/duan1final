<?php
    function showDsMb($id){
        $sql = "SELECT * FROM dsmaybay WHERE id =$id";
        return result1(1,$sql);
    }

    function getAllDiemDi()
    {
      $sql = "SELECT * FROM tuyenduong";
      return result1(1,$sql);
    }


  
?>