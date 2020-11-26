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





?>