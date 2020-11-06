<?php
function connect(){
    try {
        $conn = new PDO("mysql:host=".HOST_DB.";dbname=".NAME_DB."",USER_DB, PASS_DB);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
      echo "Kết nối lỗi : " . $e->getMessage();
    }
}

function result1($fe,$sql){ // 0 là show tất cả
    $conn = connect();  // 1 là show 1
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($fe==0)return $stmt->fetchAll();elseif($fe==1)return $stmt->fetch();
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