<?php
//id điểm đi và điểm đến bằng với bảng tuyến đường
//ngày khởi hành bằng với ngày đi trong bảng chuyến bay
//giá vé phù hợp với loại

//cần các bảng  chuyến bay,tuyến đường,giá vé

// SELECT iddiemdi,iddiemden, ngaydi,giavethuonggia,giavethuong,ttghethuong,ttghethuonggia
// FROM tuyenduong
// INNER JOIN chuyenbay
// ON tuyenduong.id = chuyenbay.idtuyenduong
// INNER JOIN giave 
// ON chuyenbay.id = giave.idchuyenbay
// INNER JOIN trangthaidatve
// ON trangthaidatve.idchuyenbay = giave.idchuyenbay


// input : điểm đi, điểm đến
//ngày đi
// số lượng người


// output show ra vé trống bằng hàm show vé 

//
 $sql = "select o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,o.masb_den,q.masb_di,p.giavethuong, p.giavethuonggia,b.hangmb,
 hd.tenkh,hd.dienthoai,hd.tongtien

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

 inner join
 
 (select hdct.tenkh, hdct.idchuyenbay,hdct.dienthoai,hd.tongtien  from hoadon hd
 inner join hdchitiet hdct on hd.id = hdct.idhd) as hd
 
 on o.id=q.id and q.id=p.id and o.id=b.id and o.id = hd.idchuyenbay";


 

?>