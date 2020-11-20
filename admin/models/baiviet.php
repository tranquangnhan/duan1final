<?php 
    function showAllBlog() {
        $sql = "select * from baiviet limit 10";
        return result1(0,$sql); 
    }
    function showAllDmBaiViet() {
        $sql = "select * from dmbaiviet limit 10";
        return result1(0,$sql); 
    }
?>
