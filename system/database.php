<?php

define('HOST_DB','localhost');
define('NAME_DB','qnhan_datvemaybay');
define('USER_DB','root');
define('PASS_DB','');// anh em dung nho xoa dum pass
define('ROOT_URL','/duan1final');
define('ADMIN_URL',ROOT_URL.'/admin');
define('SITE_URL',ROOT_URL.'/site/');
define('SYSTEM_PATH',ROOT_URL.'/system');
define('PAGE_SIZE',6);
date_default_timezone_set("Asia/Bangkok");

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
// Long
function query($sql)   {
    $conn = connect();
    $result = $conn->query($sql);        
    return $result;
}


// hàm này có chức năng truy vấn dữ liệu
// truyền vào 2 hoặc nhiều hơn các giá trị
// tham số đầu tiên: 0 là trả về tất cả sản phẩm, 1 là chỉ trả về 1 sản phẩm
// tham số thứ 2 là câu sql
function result1($fe,$sql){ 
    $sqlValue = array_slice(func_get_args(),2);
    try {
        $conn = connect(); //connect database
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?
        $stmt->execute($sqlValue);// thực thi
        if($fe===0)return $stmt->fetchAll();elseif($fe===1)return $stmt->fetch(PDO::FETCH_ASSOC);// nếu tham số đầu tiên ===0 trả về tất cả sản phẩm, === 1 trả về 1 sản phẩm
        
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
    finally{
        unset($conn);
    }
}
function exec1($sql){//thêm, xoá ....
    $sqlValue = array_slice(func_get_args(),1); 

    try {
        $conn = connect(); //connect database
        
        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?

        $stmt->execute($sqlValue);// thực thi
        return true;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
function getLastId($sql){//get LastId
    $sqlValue = array_slice(func_get_args(),1);
    try {
        $conn = connect(); //connect database

        $stmt = $conn->prepare($sql); // select * from sanpham where id = ?

        $stmt->execute($sqlValue);// thực thi

        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
function execute1($sql){ //update
    $sqlValue = array_slice(func_get_args(),2);
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute($sqlValue);
    return $result;
} 



?>