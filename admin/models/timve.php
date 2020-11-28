<?php 

function showVeMotChieu($diemDi,$diemDen,$ngayDi,$loaiGhe){
    if($loaiGhe == 1){
        $loaiGhe = 'ttghethuong';
    }
    if($loaiGhe == 2){
        $loaiGhe = 'ttghethuonggia';
    }

    $sql = "SELECT chuyenbay.id,iddiemdi,iddiemden, ngaydi,".$loaiGhe."
    FROM tuyenduong
    INNER JOIN chuyenbay
    ON tuyenduong.id = chuyenbay.idtuyenduong
    INNER JOIN giave
    ON chuyenbay.id = giave.idchuyenbay
    INNER JOIN trangthaidatve
    ON trangthaidatve.idchuyenbay = giave.idchuyenbay
    WHERE iddiemdi ='$diemDi' AND iddiemden = '$diemDen' AND ngaydi = '$ngayDi'";

    return result1(0,$sql);
}
function showVeAdmin($id)
{
    $sql = "select o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,o.masb_den,q.masb_di,p.giavethuong, p.giavethuonggia,b.hangmb
	from 
    (select r.gioden,r.giodi,r.ngaydi, r.id, s.tinh as 'tinh_den',s.masanbay as 'masb_den' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemden = s.idsanbay) as o
    
    inner join
    
    (select r.gioden,r.giodi,r.ngaydi,r.id, s.tinh as 'tinh_di',s.masanbay as 'masb_di' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemdi = s.idsanbay) as q
    
    inner join
    
    (select r.id, w.giavethuong, w.giavethuonggia from giave w
    inner join chuyenbay r on w.idchuyenbay = r.id) as p
    
    inner join
    
    (select r.id, d.hangmb from dsmaybay d
    inner join chuyenbay r on d.id = r.idmaybay) as b
    
    on o.id=q.id and q.id=p.id and o.id=b.id where o.id='$id'";

    return result1(0,$sql);
}



// select o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,p.giavethuong, p.giavethuonggia,b.hangmb
// 	from 
//     (select r.gioden,r.giodi,r.ngaydi, r.id, s.tinh as 'tinh_den' from chuyenbay r 
//     inner join tuyenduong i on r.idtuyenduong=i.id
//     inner join sanbay s on i.iddiemden = s.idsanbay) as o
    
//     inner join
    
//     (select r.gioden,r.giodi,r.ngaydi,r.id, s.tinh as 'tinh_di' from chuyenbay r 
//     inner join tuyenduong i on r.idtuyenduong=i.id
//     inner join sanbay s on i.iddiemdi = s.idsanbay) as q
    
//     inner join
    
//     (select r.id, w.giavethuong, w.giavethuonggia from giave w
//     inner join chuyenbay r on w.idchuyenbay = r.id) as p
    
//     inner join
    
//     (select r.id, d.hangmb from dsmaybay d
//     inner join chuyenbay r on d.id = r.idmaybay) as b
    
//     on o.id=q.id and q.id=p.id and o.id=b.id
?>