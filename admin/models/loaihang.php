<?php
    function showAllHangXe(){
        $sql = "select count(*) as sldm from danhmuc";
        return result1(1,$sql);
    }
    function showAllDm(){
        $sql = "select * from danhmuc where 1 order by id desc ";
        return result1(0,$sql);
    }
    function xoaDanhMuc($id){
        $sql = "DELETE FROM danhmuc WHERE id=".$id;
        return exec1($sql);
    }
    function addCategories($name,$anhien){
        $sql = "INSERT INTO danhmuc(name,anhien) values('{$name}','{$anhien}')";
        exec1($sql);
    }
    function updateCategories($id,$name,$anhien){
        $sql = "UPDATE danhmuc SET name='{$name}',anhien='{$anhien}' WHERE id='{$id}'";
        execute1($sql);
    }
    function showDmEdit($id){
        $sql = "select * from danhmuc where id= {$id}";
        return result1(1,$sql);
    }
?>