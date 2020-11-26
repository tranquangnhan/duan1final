<?php

function showVeMotChieu1($diemDi, $diemDen, $ngayDi)
{
    $sql = "select o.ngaydi,q.tinh_di,o.tinh_den,p.giavethuong, p.giavethuonggia 
from (select r.gioden,r.giodi,r.ngaydi, r.id, s.tinh as 'tinh_den' from chuyenbay r 
inner join tuyenduong i on r.idtuyenduong=i.id 
inner join sanbay s on i.iddiemden = s.idsanbay) as o 
inner join (select r.gioden,r.giodi,r.ngaydi,r.id, s.tinh as 'tinh_di' from chuyenbay r 
inner join tuyenduong i on r.idtuyenduong=i.id inner join sanbay s on i.iddiemdi = s.idsanbay) as q 
inner join (select r.id, w.giavethuong, w.giavethuonggia from giave w inner join chuyenbay r on w.idchuyenbay = r.id) as p 
on o.id=q.id and q.id=p.id and q.tinh_di like '%$diemDi%' and o.tinh_den like '%$diemDen%' and o.ngaydi like '%$ngayDi%' ";
    return result1(0, $sql);
}


