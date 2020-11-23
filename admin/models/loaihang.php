<?php
    function showAllHangXe(){
        $sql = "select count(*) as sldm from dmbaiviet";
        return result1(1,$sql);
    }
    function showAllDm(){
        $sql = "select * from dmbaiviet where 1 order by id desc ";
        return result1(0,$sql);
    }
    function xoaDanhMuc($id){
        $sql = "DELETE FROM dmbaiviet WHERE id=".$id;
        return exec1($sql);
    }
    function addCategories($name,$anhien){
        $sql = "INSERT INTO dmbaiviet(name,anhien) values('{$name}','{$anhien}')";
        exec1($sql);
    }
    function updateCategories($id,$name,$anhien){
        $sql = "UPDATE dmbaiviet SET name='{$name}',anhien='{$anhien}' WHERE id='{$id}'";
        execute1($sql);
    }
    function showDmEdit($id){
        $sql = "select * from dmbaiviet where id= {$id}";
        return result1(1,$sql);
    }
?>