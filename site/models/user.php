<?php 
    session_start();     
    function checkUser($user,$pass,$remember){
        if($remember) {
            $_COOKIE['sessionId'] = session_id();
        } else{
            unset($_COOKIE);
        } 
        $user = str_replace(";","",$user);
        $user = str_replace("'","",$user);
        $user = str_replace('"',"",$user);
        $pass = str_replace(";","",$pass);
        $pass = str_replace("'","",$pass);
        $pass = str_replace('"',"",$pass);
        $user = addslashes($user);
        $pass = addslashes($pass);
        $sql = "select * from khachhang where user=? and pass=?";
        $user = result1(1,$sql,$user,$pass);
        if(is_array($user)){
            $_SESSION['sid'] = $user['id'];
            $_SESSION['suser']= $user['user'];
            $_SESSION['role'] = $user['role'];
            return true;
        }else{
            return false;
        }
    }

    function checkUserSignup($user,$pass){
        $user = str_replace(";","",$user);
        $user = str_replace("'","",$user);
        $user = str_replace('"',"",$user);
        $pass = str_replace(";","",$pass);
        $pass = str_replace("'","",$pass);
        $pass = str_replace('"',"",$pass);
        $user = addslashes($user);
        $pass = addslashes($pass);
        $sql = "select * from khachhang where user=? and pass=?";
        $user = result1(1,$sql,$user,$pass);
        if(is_array($user)){
            $_SESSION['sid'] = $user['id'];
            $_SESSION['suser']= $user['user'];
            $_SESSION['role'] = $user['role'];
            return true;
        }else{
            return false;
        }
    }
 
 
    function checkUser2($user){
        $sql = "select * from khachhang where user=?";
        return result1(1,$sql,$user);
    }
    function IsExist ($user){ // kiểm tra xem user đã tồn tại hay chưa
        $sql = "select * from khachhang where user='{$user}'";
        return result1(1,$sql);
    }
    function checkEmailTonTai($email){
        $sql = "select * from khachhang where email='{$email}'";
        return result1(1,$sql);
    }
    function checkPhoneTonTai($phone){
        $sql = "select * from khachhang where sodienthoai='{$phone}'";
        return result1(1,$sql);
    }
    function addUser($userName,$passWord,$active,$email,$phone,$randomKey){
        $sql = "INSERT INTO khachhang (user,pass,kichhoat,email,sodienthoai,randomkey) VALUES (?,?,?,?,?,?)";
        return exec1($sql,$userName,$passWord,$active,$email,$phone,$randomKey);
    }
    function user($idUser){
        $sql = "select * from khachhang where id='{$idUser}'";
        return result1(1,$sql);
    }
    function setNewPass($id,$newpass){
        $sql = "UPDATE khachhang SET pass='{$newpass}'  WHERE id=".$id;
        execute1($sql);  
    }
    function showNameUser($iduser){
        $sql = "select * from khachhang where id='{$iduser}'";
        return result1(1,$sql)['user'];
    } 
    function setThanhVien($id,$rd){
        $sql = "UPDATE khachhang SET kichhoat='1'  WHERE id=".$id;
        execute1($sql);  
    }
    function setPass($email){
        $sql = "UPDATE khachhang SET pass='123456'  WHERE email='{$email}'";
        echo $sql;
        execute1($sql);
    }
?>