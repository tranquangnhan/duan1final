<?php 
    function getThongke($ngaybatdau1,$ngayketthuc1) {
        $sql = "SELECT cb.idmaybay, sum(hdct.tongtien) as 'tongtheohang' from hoadon hd 
        INNER JOIN hdchitiet hdct on hd.id = hdct.idhd 
        INNER JOIN chuyenbay cb on cb.id = hdct.idchuyenbay 
        WHERE ngaydatve >= '$ngaybatdau1.T00:00:00.000' AND ngaydatve <= '$ngayketthuc1.T23:53:04.000' 
        GROUP BY cb.idmaybay";
        return result1(0,$sql); 
    }
    function getThongke2($ngaybatdau2,$ngayketthuc2) {
        $sql = "SELECT cb.idmaybay, sum(hdct.tongtien) as 'tongtheohang' from hoadon hd 
        INNER JOIN hdchitiet hdct on hd.id = hdct.idhd 
        INNER JOIN chuyenbay cb on cb.id = hdct.idchuyenbay 
        WHERE ngaydatve >= '$ngaybatdau2.T00:00:00.000' AND ngaydatve <= '$ngayketthuc2.T23:53:04.000' 
        GROUP BY cb.idmaybay";
        return result1(0,$sql); 
    }
?>