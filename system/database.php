<?php
function connect(){
    try {

        $ConnectionOption = array
            (
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
            );

        $conn = new PDO ('mysql:host='.HOST_DB.';dbname='.NAME_DB.';charset=utf8', USER_DB, PASS_DB, $ConnectionOption);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
      echo "Lỗi Kết Nối database: " . $e->getMessage();
    }
}

function result1($fe,$sql){ 
    $sqlValue = array_slice(func_get_args(),2);
    try {
        $conn = connect(); 
        $stmt = $conn->prepare($sql);
        $stmt->execute($sqlValue);
        if($fe==0)return $stmt->fetchAll();elseif($fe==1)return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}


function exec1($sql){//thêm, xoá ....
    $conn = connect();
    $result = $conn->exec($sql);
    return $result;
}
function execute1($sql){ //update
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} 
?>