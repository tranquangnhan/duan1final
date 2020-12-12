<?php 
    function showAllLienhe() {
        $sql = "select * from lienhe";
        return result1(0,$sql); 
    }
    function xoaLienhe($id) {
        $sql = "DELETE FROM lienhe WHERE id=?";
        exec1($sql,$id);
    }
?>
