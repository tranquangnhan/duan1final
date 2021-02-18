<?php 
    function topgiamGiaTheoHang($idmaybay) { // 1 = vietject, 2 = vietnam, 3 = bamboo, 4 = pacific
        $sql = "SELECT * FROM `giave` gv INNER JOIN chuyenbay cb on cb.id = gv.idchuyenbay 
        INNER JOIN tuyenduong td on td.id = cb.idtuyenduong
        WHERE cb.ngaydi > CURDATE() 
        HAVING gv.giamgia > 0 AND cb.idmaybay = $idmaybay
        LIMIT 1";
        return result1(1,$sql); 
    }
    function timSanBay($id) {
        $sql = "SELECT * FROM sanbay WHERE idsanbay = $id";
        return result1(1,$sql);
    }
?>