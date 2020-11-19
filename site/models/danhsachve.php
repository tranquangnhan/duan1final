<?php
    function showDsMb($id){
        $sql = "SELECT * FROM dsmaybay WHERE id =$id";
        return result1(1,$sql);
    }
?>