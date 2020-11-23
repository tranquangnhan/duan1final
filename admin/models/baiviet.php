<?php 
    function showAllBlog() {
        $sql = "select * from baiviet limit 10";
        return result1(0,$sql); 
    }
    function showdmbv() {
        $sql = "select * from dmbaiviet";
        return result1(0,$sql); 
    }
    function addBlog($name,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public) {
        $sql="insert into baiviet (name, img, iddm, date, noidung, tacgia, tag, mota, public)
        values('$name','$imgupload', '$iddm', '$date', '$noidung', '$tacgia', '$tag', '$mota', '$public')";
        exec1($sql);
    }
    function xoaBlog($id) {
        $sql = "DELETE FROM baiviet WHERE id=?";
        exec1($sql,$id);
    }
    function motbaiviet($id) {
        $sql = "SELECT * from baiviet where id='$id'";
        return result1(0,$sql); 
    }
    function showAllDmBaiViet() {
        $sql = "SELECT * FROM dmbaiviet";
        return result1(0,$sql);
    }
    function updateBlog($id,$name,$imgupload,$iddm,$date,$noidung,$tacgia,$tag,$mota,$public) {
        $sql = "UPDATE baiviet SET name='$name', img='$imgupload', iddm='$iddm', date='$date', noidung='$noidung', tacgia='$tacgia', tag='$tag', mota='$mota', public='$public' where id='$id';";
        execute1($sql); 
    }  
?>
