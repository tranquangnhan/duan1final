<?php
    function showDsMb($id){
        $sql = "SELECT * FROM dsmaybay WHERE id =$id";
        return result1(1,$sql);
    }
function showVe()
{
    $sql = "select o.id,o.gioden,o.giodi,o.ngaydi,o.tinh_den,q.tinh_di,p.giavethuong from 
    (select r.gioden,r.giodi,r.ngaydi, r.id, s.tinh as 'tinh_den' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemden = s.idsanbay) as o
    
    inner join
    
    (select r.gioden,r.giodi,r.ngaydi,r.id, s.tinh as 'tinh_di' from chuyenbay r 
    inner join tuyenduong i on r.idtuyenduong=i.id
    inner join sanbay s on i.iddiemdi = s.idsanbay) as q
    
    inner join 
    (select r.id, w.giavethuong  from giave w
    inner join chuyenbay r on w.idchuyenbay = r.id) as p
    
    on o.id=q.id and q.id=p.id";
    return result1(0,$sql);
}
  
?>