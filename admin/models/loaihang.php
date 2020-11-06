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
        exec1($sql);
    }
    function addCategories($name,$thutu,$anhien){
        $sql = "INSERT INTO danhmuc(name,thutu,anhien) values('{$name}','{$thutu}','{$anhien}')";
        exec1($sql);
        echo $sql;
    }
    function updateCategories($id,$name,$thutu,$anhien){
        $sql = "UPDATE danhmuc SET name='{$name}',thutu='{$thutu}',anhien='{$anhien}' WHERE id='{$id}'";
        execute1($sql);
    }
    function showDmEdit($id){
        $sql = "select * from danhmuc where id= {$id}";
        return result1(1,$sql);
    }
?>