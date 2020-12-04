<div class="col-lg-10">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>HOÁ ĐƠN</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                        <li class="breadcrumb-item"><a href="#">Thêm </a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-11">
                            <h3 class="mt-4 text-center">HOÁ ĐƠN CHI TIẾT</h3>
                            <p class="text-center">Bạn có thể thêm chuyến bay ở đây!</p>
                           
                            <?php 
                 
                                for ($i=0; $i < count($showHoaDonCt) ; $i++) { 
                            
                                if($showTTCb['0']['hangmb']==1){
                                    $hangMb = "VietJet Air";
                                    $img = 'views/img/vietjet.png';
                                }elseif($showTTCb['0']['hangmb']==2){
                                    $hangMb = "Vietnam Airlines";
                                    $img = 'views/img/vietnamairlines.png';
                                }elseif($showTTCb['0']['hangmb']==3){
                                    $hangMb = "Bamboo Airways";
                                    $img = 'views/img/bamboo.png';
                                } 
            
                                if($showHoaDonCt[$i]['hangghe'] == 1 ){
                                    $giaTien = $showTTCb[$i]['giavethuong'];
                                }
                                elseif($showHoaDonCt[$i]['hangghe'] == 2){
                                    $giaTien = $showTTCb[$i]['giavethuonggia'];
                                }
                                $showHoaDon = showHoaDon($showHoaDonCt[$i]['idhd']);
                                $idCb = $showHoaDon[$i]['idchuyenbay'];
                    
                                
                                
                                $maTinhDen = $showTTCb['0']['masb_den'];
                                $maTinhDi = $showTTCb['0']['masb_di'];
                                $maTinhDen=  explode("/",$maTinhDen)[1];
                                $maTinhDi =  explode("/",$maTinhDi)[1];
                                if($showHoaDonCt[$i]['gioitinh'] == 0) $gioiTinh =  "Nam"; elseif($showHoaDonCt[$i]['gioitinh'] == 1) $gioiTinh =  "Nữ"; else $gioiTinh = "Khác"; 
                                 if($showHoaDonCt[$i]['hangghe'] == 1) $hangGhe =  "Phổ Thông"; elseif($showHoaDonCt[$i]['hangghe'] == 2) $hangGhe= "Thương Gia";
                                echo '
                                    <!-- chuyến về -->
                                    <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <h5>Tên Khách Hàng:<strong> '.$showHoaDonCt[$i]['tenkh'].'</strong> </h5>
                                        <h5>Giới Tính:<strong> '.$gioiTinh.'</strong> </h5>
                                            <h5>Điện Thoại: <strong>'.$showHoaDonCt[$i]['dienthoai'].'</strong></h5>
                                            <h5>CMND/PASSPORT: <strong>'.$showHoaDonCt[$i]['cmnd'].'</strong></h5>
                                            <h5>Giá Tiền: <strong>'.forMatTien($showHoaDonCt[$i]['giatien']).' Đ</strong></h5>
                                            <h5>Hạng Ghế: <strong>'.$hangGhe.'</strong></h5>
                                        </div>
                                    
                                    </div>
                                    <div>
                                        <div class="row mt-3 showve">
                                        <div class="col-lg-3">
                                        <input type="hidden" id="loaighe" value="1">
                                            <img src="'.$img.'">
                                            '.$hangMb.'
                                        </div>
        
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="thoigiandi">'.$showTTCb['0']['giodi'].'</div>
                                                    <div class="thoigiandi">'.$showTTCb['0']['tinh_di'].' <br>('.$maTinhDi.')</div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="views/img/iconmb.svg" alt="">
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="thoigiandi">'.$showTTCb['0']['gioden'].'</div>
                                                    <div class="thoigiandi">'.$showTTCb['0']['tinh_den'].'<br>('.$maTinhDen.')</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="thoigiandi">'.tinhThoiGian($showTTCb['0']['giodi'],$showTTCb['0']['gioden']).'</div>
                                                    <div class="thoigiandi">Bay thẳng</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 ">
                                            '.forMatTien($giaTien) .' Đ
                                                    /khách<br>
                                            Ngày đi: '.$showTTCb['0']['ngaydi'].'<br>
                                            Vị trí: '.$showHoaDonCt[$i]['vitringoi'].'
                                        </div>
                                    </div> 
                                       
                                    </div>
                                    ';
                                }
                                echo '<div class="row mt-5 justify-content-end">
                                        <div class="col-lg-4"><h5>Tổng Tiền: <strong>'.forMatTien($showHoaDon['tongtien']).' Đ</strong></h5></div>
                                    </div>';
                            ?>
                            <div class="row mt-5">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9 ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <a href="index.php?ctrl=loaihang&act=index"> <input type="button"
                                                        name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <a href="index.php?ctrl=hoadon&act=hoantat&idhd=<?=$showHoaDon['id']?>"><input type="submit" name="them" id="" value="Thanh Toán"
                                                    class="btn btn-submit text-center"></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </div>
    </div>
</div>
</div>
