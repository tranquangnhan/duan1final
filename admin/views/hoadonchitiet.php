<div class="col-lg-9">
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Tên Khách Hàng:<strong> <?=$showHoaDonCt['tenkh']?></strong> </h4>
                                    <h4>Giới Tính:<strong> <?php if($showHoaDonCt['gioitinh'] == 0) echo "Nam"; elseif($showHoaDonCt['gioitinh'] == 1) echo "Nữ"; else echo "Khác"; ?></strong> </h4>
                                    <h4>Điện Thoại: <strong><?=$showHoaDonCt['dienthoai']?></strong></h4>
                                    <h4>CMND/PASSPORT: <strong><?=$showHoaDonCt['cmnd']?></strong></h4>
                                    <h4>Giá Tiền: <strong><?=forMatTien($showHoaDonCt['giatien'])?> Đ</strong></h4>
                                    <h4>Hạng Ghế: <strong><?php if($showHoaDonCt['hangghe'] == 1) echo "Phổ Thông"; elseif($showHoaDonCt['hangghe'] == 2) echo "Thương Gia";?></strong></h4>
                                </div>
                            
                            </div>
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
                                
                                $maTinhDen = $showTTCb['0']['masb_den'];
                                $maTinhDi = $showTTCb['0']['masb_di'];
                                $maTinhDen=  explode("/",$maTinhDen)[1];
                                $maTinhDi =  explode("/",$maTinhDi)[1];

                                // print_r($showTTCb['tinh_den']);
                                // echo date('h:i:s',$days);
                                echo '
                                    <!-- chuyến về -->
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
                                            Vị trí: '.$showHoaDonCt['vitringoi'].'
                                        </div>
                                    </div>    
                                    </div>
                                    ';
                                }
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
                                                <input type="submit" name="them" id="" value="Thanh Toán"
                                                    class="btn btn-submit text-center">
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
