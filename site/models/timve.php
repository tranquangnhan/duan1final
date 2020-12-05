<?php 
session_start();
function timve($user,$sodienthoai) { 
    $sql = "SELECT * FROM khachhang WHERE user='$user' AND sodienthoai='$sodienthoai'";
    return result1(1,$sql); 
    }

    function ltt(){
        $sql ="SELECT o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,o.masb_den,q.masb_di,p.giavethuong, p.giavethuonggia,b.hangmb,
        hd.tenkh,hd.dienthoai,hd.tongtien
       
        FROM 
        (SELECT r.gioden,r.giodi,r.ngaydi, r.id, s.tinh AS 'tinh_den',s.masanbay AS 'masb_den' FROM chuyenbay r 
        INNER JOIN tuyenduong i ON r.idtuyenduong=i.id
        INNER JOIN sanbay s ON i.iddiemden = s.idsanbay) AS o
        
        INNER JOIN
        
        (SELECT r.gioden,r.giodi,r.ngaydi,r.id, s.tinh AS 'tinh_di',s.masanbay AS 'masb_di' FROM chuyenbay r 
        INNER JOIN tuyenduong i ON r.idtuyenduong=i.id
        INNER JOIN sanbay s ON i.iddiemdi = s.idsanbay) AS q
        
        INNER JOIN
        
        (select r.id, w.giavethuong, w.giavethuonggia from giave w
        INNER JOIN chuyenbay r on w.idchuyenbay = r.id) as p
        
        INNER JOIN
        
        (select r.id, d.hangmb from dsmaybay d
        INNER JOIN chuyenbay r on d.id = r.idmaybay) as b
       
        INNER JOIN
        
        (select hdct.tenkh, hdct.idchuyenbay,hdct.dienthoai,hd.tongtien  from hoadon hd
        INNER JOIN hdchitiet hdct on hd.id = hdct.idhd) as hd
        
        on o.id=q.id and q.id=p.id and o.id=b.id and o.id = hd.idchuyenbay";
        return result1(1,$sql);
    }
?>