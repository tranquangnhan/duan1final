
<?php if(!isset($_SESSION['idchuyenbay'])) {?>

<!-- chuyến 1 chiều -->
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
                        <div class="col-lg-10">
                            <h3 class="mt-4 text-center">THÊM HOÁ ĐƠN</h3>
                            <p class="text-center">Bạn có thể thêm hóa đơn ở đây!</p>
                                <?php
                                $Arr = showVeAdmin($_SESSION['idchuyenbaykh']);
                                for ($i=0; $i < count($_SESSION['vitrighekh']); $i++) { 
                                    if($_SESSION['hangghekh'] == 1 ){
                                        $giatien = $Arr['0']['giavethuong'];
                                    }
                                    elseif($_SESSION['hangghekh'] == 2){
                                        $giatien = $Arr['0']['giavethuonggia'];
                                    }
                                    if($Arr['0']['hangmb']==1){
                                        $hangMb = "VietJet Air";
                                        $img = 'views/img/vietjet.png';
                                    }elseif($Arr['0']['hangmb']==2){
                                        $hangMb = "Vietnam Airlines";
                                        $img = 'views/img/vietnamairlines.png';
                                    }elseif($Arr['0']['hangmb']==3){
                                        $hangMb = "Bamboo Airways";
                                        $img = 'views/img/bamboo.png';
                                    } 
                                    
                                    $maTinhDen = $Arr['0']['masb_den'];
                                    $maTinhDi = $Arr['0']['masb_di'];
                                    $maTinhDen =  explode("/",$maTinhDen)[1];
                                    $maTinhDi =  explode("/",$maTinhDi)[1];
                                    echo
                                    '<div>
                                    <div class="row  mt-5">
                                       <div class="col-lg-3">
                                           <label for=""><strong>Tên Khách Hàng</strong></label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input type="text" name="hotenkh" id="" class="form-control hotenkh" placeholder="Tên Khách Hàng" aria-describedby="helpId" >
                                       </div>
                                   </div>
                                   <div class="row mt-4">
                                       <div class="col-lg-3">
                                           <label for=""><strong>Giới Tính</strong></label>
                                       </div>
                                       <div class="col-lg-9">
                                           <div class="form-group">
                                           <select class="form-control gioitinh" name="gioitinh" id="" >
                                               <option value="">Giới Tính</option>
                                               <option value="0">Nam</option>
                                               <option value="1">Nữ</option>
                                               <option value="2">Khác</option>
                                           </select>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row mt-4">
                                       <div class="col-lg-3">
                                           <label for=""><strong>Điện Thoại</strong></label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input type="number" name="dienthoai" id="" class="form-control dienthoai" placeholder="Số Điện Thoại" aria-describedby="helpId" >
                                       </div>
                                   </div>
                                   <div class="row mt-4">
                                       <div class="col-lg-3">
                                           <label for=""><strong>CMND/Passport</strong></label>
                                       </div>
                                       <div class="col-lg-9">
                                           <input type="number" name="cmnd" id="" class="form-control cmnd" placeholder="CMND/Passport" aria-describedby="helpId" >
                                       </div>
                                   </div>
                                   <div class="row mt-3 showve">
                                   <div class="col-lg-3">
                                      <input type="hidden" id="loaighe" value="1">
                                       <img src="'.$img.'">
                                       '.$hangMb.'
                                   </div>

                                   <div class="col-lg-6">
                                       <div class="row">
                                           <div class="col-lg-3">
                                               <div class="thoigiandi">'.$Arr['0']['giodi'].'</div>
                                               <div class="thoigiandi">Cần Thơ <br>('.$maTinhDi.')</div>
                                           </div>
                                           <div class="col-lg-2">
                                               <img src="views/img/iconmb.svg" alt="">
                                           </div>
                                           <div class="col-lg-3">
                                               <div class="thoigiandi">'.$Arr['0']['gioden'].'</div>
                                               <div class="thoigiandi">Hà Nội <br>('.$maTinhDen.')</div>
                                           </div>
                                           <div class="col-lg-4">
                                               <div class="thoigiandi">2h 5m</div>
                                               <div class="thoigiandi">Bay thẳng</div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-3 ">
                                       RP '.forMatTien($giatien) .' Đ
                                               /khách<br>
                                        Ngày đi '.$Arr['0']['ngaydi'].'<br>
                                        Vị trí: '.$_SESSION['vitrighekh'][$i].'
                                   </div>
                               </div>    
                                  
                               </div>';
                                } ?>
                                 <div class="row mt-5">
                                       <div class="col-lg-12">
                                           <div class="row d-flex justify-content-end">
                                               <div class="col-lg-5">
                                                   <div class="form-group">
                                                       <a href="index.php?ctrl=hoadon&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 pr-2 mr-2">
                                                   <div class="form-group">
                                                       <input type="submit" name="them" id="themhd" value="Thêm Hóa Đơn" class="btn btn-submit text-center">
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
<?php  }else{ ?>
<!-- chuyến khứ hồi -->
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
                    <div class="col-lg-10">
                        <h3 class="mt-4 text-center">THÊM HOÁ ĐƠN</h3>
                        <p class="text-center">Bạn có thể thêm hóa đơn ở đây!</p>
                            <?php
                            $Arr = showVeAdmin($_SESSION['idchuyenbay']);
                            echo '  <div class="row"><h2>VÉ Đi</h2></div>';   
                            for ($i=0; $i < count($_SESSION['vitrighe']); $i++) { 
                                // chuyến đầu tiên
                                if($_SESSION['hangghe'] == 1 ){
                                    $giaTien = $Arr['0']['giavethuong'];
                                }
                                elseif($_SESSION['hangghe'] == 2){
                                    $giaTien = $Arr['0']['giavethuonggia'];
                                }
                                if($Arr['0']['hangmb']==1){
                                    $hangMb = "VietJet Air";
                                    $img = 'views/img/vietjet.png';
                                }elseif($Arr['0']['hangmb']==2){
                                    $hangMb = "Vietnam Airlines";
                                    $img = 'views/img/vietnamairlines.png';
                                }elseif($Arr['0']['hangmb']==3){
                                    $hangMb = "Bamboo Airways";
                                    $img = 'views/img/bamboo.png';
                                } 
                                $maTinhDen = $Arr['0']['masb_den'];
                                $maTinhDi = $Arr['0']['masb_di'];
                                $maTinhDen=  explode("/",$maTinhDen)[1];
                                $maTinhDi =  explode("/",$maTinhDi)[1];
                              
                                echo
                                '<div>
                                <div class="row mt-3 showve">
                               <div class="col-lg-3">
                                  <input type="hidden" id="loaighe" value="1">
                                   <img src="'.$img.'">
                                   '.$hangMb.'
                               </div>

                               <div class="col-lg-6">
                                   <div class="row">
                                       <div class="col-lg-3">
                                           <div class="thoigiandi">'.$Arr['0']['giodi'].'</div>
                                           <div class="thoigiandi">'.$Arr['0']['tinh_di'].' <br>('.$maTinhDi.')</div>
                                       </div>
                                       <div class="col-lg-2">
                                           <img src="views/img/iconmb.svg" alt="">
                                       </div>
                                       <div class="col-lg-3">
                                           <div class="thoigiandi">'.$Arr['0']['gioden'].'</div>
                                           <div class="thoigiandi">'.$Arr['0']['tinh_den'].' <br>('.$maTinhDen.')</div>
                                       </div>
                                       <div class="col-lg-4">
                                           <div class="thoigiandi">2h 5m</div>
                                           <div class="thoigiandi">Bay thẳng</div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-3 ">
                                   RP '.forMatTien($giaTien) .' Đ
                                           /khách<br>
                                    Ngày đi '.$Arr['0']['ngaydi'].'<br>
                                    Vị trí: '.$_SESSION['vitrighe'][$i].'
                               </div>
                           </div>    
                           </div>';
                            } 
                            $ArrKh = showVeAdmin($_SESSION['idchuyenbaykh']);
                            echo '  <div class="row mt-3"><h2>VÉ TRỞ LẠI</h2></div>';   
                            for ($i=0; $i < count($_SESSION['vitrighekh']); $i++) { 
                                  // chuyến sau
                                  if($_SESSION['hangghekh'] == 1 ){
                                    $giaTienKh = $ArrKh['0']['giavethuong'];
                                }
                                elseif($_SESSION['hangghekh'] == 2){
                                    $giaTienKh = $ArrKh['0']['giavethuonggia'];
                                }
                               
                                if($Arr['0']['hangmb']==1){
                                    $hangMbKh = "VietJet Air";
                                    $imgKh = 'views/img/vietjet.png';
                                }elseif($Arr['0']['hangmb']==2){
                                    $hangMbKh = "Vietnam Airlines";
                                    $imgKh = 'views/img/vietnamairlines.png';
                                }elseif($Arr['0']['hangmb']==3){
                                    $hangMbKh = "Bamboo Airways";
                                    $imgKh = 'views/img/bamboo.png';
                                } 
                                
                                $maTinhDenKh = $ArrKh['0']['masb_den'];
                                $maTinhDiKh = $ArrKh['0']['masb_di'];
                                $maTinhDenKh =  explode("/",$maTinhDenKh)[1];
                                $maTinhDiKh =  explode("/",$maTinhDiKh)[1];

                                echo '
                                <!-- chuyến về -->
                                <div>
                                     <div class="row mt-3 showve">
                                    <div class="col-lg-3">
                                       <input type="hidden" id="loaighe" value="1">
                                        <img src="'.$imgKh.'">
                                        '.$hangMbKh.'
                                    </div>
     
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="thoigiandi">'.$ArrKh['0']['giodi'].'</div>
                                                <div class="thoigiandi">'.$ArrKh['0']['tinh_di'].' <br>('.$maTinhDiKh.')</div>
                                            </div>
                                            <div class="col-lg-2">
                                                <img src="views/img/iconmb.svg" alt="">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="thoigiandi">'.$ArrKh['0']['gioden'].'</div>
                                                <div class="thoigiandi">'.$ArrKh['0']['tinh_den'].'<br>('.$maTinhDenKh.')</div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="thoigiandi">2h 5m</div>
                                                <div class="thoigiandi">Bay thẳng</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 ">
                                        RP '.forMatTien($giaTienKh) .' Đ
                                                /khách<br>
                                         Ngày đi '.$ArrKh['0']['ngaydi'].'<br>
                                         Vị trí: '.$_SESSION['vitrighekh'][$i].'
                                    </div>
                                </div>    
                                </div>
                                ';
                            }
                            for ($i=0; $i < count($_SESSION['vitrighekh']); $i++) { 
                                echo '<div class="row  mt-5">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Khách Hàng</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="hotenkh" id="" class="form-control hotenkh" placeholder="Tên Khách Hàng" aria-describedby="helpId" >
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giới Tính</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                    <select class="form-control gioitinh" name="gioitinh" id="" >
                                        <option value="">Giới Tính</option>
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                        <option value="2">Khác</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Điện Thoại</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="dienthoai" id="" class="form-control dienthoai" placeholder="Số Điện Thoại" aria-describedby="helpId" >
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>CMND/Passport</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="cmnd" id="" class="form-control cmnd" placeholder="CMND/Passport" aria-describedby="helpId" >
                                </div>
                            </div> ';


                            }
                            ?>
                             <div class="row mt-5">
                                   <div class="col-lg-12">
                                       <div class="row d-flex justify-content-end">
                                           <div class="col-lg-5">
                                               <div class="form-group">
                                                   <a href="index.php?ctrl=hoadon&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                               </div>
                                           </div>
                                           <div class="col-lg-6 pr-2 mr-2">
                                               <div class="form-group">
                                                   <input type="submit" name="them" id="themhd" value="Thêm Hóa Đơn" class="btn btn-submit text-center">
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


<?php }?>




<!-- <div class="row  mt-5">
                                   <div class="col-lg-3">
                                       <label for=""><strong>Tên Khách Hàng</strong></label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input type="text" name="hotenkh" id="" class="form-control hotenkh" placeholder="Tên Khách Hàng" aria-describedby="helpId" >
                                   </div>
                               </div>
                               <div class="row mt-4">
                                   <div class="col-lg-3">
                                       <label for=""><strong>Giới Tính</strong></label>
                                   </div>
                                   <div class="col-lg-9">
                                       <div class="form-group">
                                       <select class="form-control gioitinh" name="gioitinh" id="" >
                                           <option value="">Giới Tính</option>
                                           <option value="0">Nam</option>
                                           <option value="1">Nữ</option>
                                           <option value="2">Khác</option>
                                       </select>
                                       </div>
                                   </div>
                               </div>
                               <div class="row mt-4">
                                   <div class="col-lg-3">
                                       <label for=""><strong>Điện Thoại</strong></label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input type="number" name="dienthoai" id="" class="form-control dienthoai" placeholder="Số Điện Thoại" aria-describedby="helpId" >
                                   </div>
                               </div>
                               <div class="row mt-4">
                                   <div class="col-lg-3">
                                       <label for=""><strong>CMND/Passport</strong></label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input type="number" name="cmnd" id="" class="form-control cmnd" placeholder="CMND/Passport" aria-describedby="helpId" >
                                   </div>
                               </div> -->