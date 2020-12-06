<?php 
    function addlienhe($hoten,$email,$diachi,$noidung) {
        $sql = "INSERT INTO lienhe (hovaten,email,diachi,noidung) VALUES ('$hoten', '$email', '$diachi', '$noidung')";
        return exec1($sql);
    }
?>