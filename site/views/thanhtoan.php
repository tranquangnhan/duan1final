
   <div class="padding-tb-40px background-light-grey">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-lg-9">
                   <div class="p-2 flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                   <?php    
                            echo '  <div class="row mt-3 ml-3 pt-3"><h4>VÉ ĐI</h4></div>';  
                            $Arr = showVeSite($_SESSION['idchuyenbay']);
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
                                '<div class=" row box_ve mr-bot-40px background-white mr-0px">
                                      <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                                          <div class="hotel-img position-relative line-height-150px">
                                              <img src="'.$img.'" alt="">
                                              <div class="hover-option background-main-color opacity-6">
                                                  <h3 class="text-center text-white padding-top-n-25 "></h3>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-8 border-grey1 pd-0px">
                                        <div class="pd-10px">
                               <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:'.$Arr['0']['tinh_di'].' </span>Đến:'.$Arr['0']['tinh_den'].'  </a></h3> 
                                          <div class="date mr-lr-15px">
                                            <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                              <i class="fa fa-chevron-up mr-right-5px"></i>
                                              Giờ đi:  
                                              <span class="text-third-color mr-right-5px">'.$Arr['0']['giodi'].'</span> 
                                            </a>
                                            <small class="text-uppercase text-extra-small">
                                              <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giở đến:  
                                                <span class="text-third-color mr-right-5px">'.$Arr['0']['gioden'].'</span> </a>
                                            </small>
                                          </div>
                                          <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                              <strong class="text-medium text-third-color padding-right-5px mr-4 font-weight-bold"> '.forMatTien($giaTien) .' <span >VNĐ</span></strong>
                          
                                              <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> '.$Arr['0']['ngaydi'].'</i>
                                          </div>  
                                        </div>
                                      </div>
                                       
                                    </div>';
                            } 
                            $ArrKh = showVeSite($_SESSION['idchuyenbaykh']);
                            echo '  <div class="row mt-3 ml-3"><h4>VÉ TRỞ LẠI</h4></div>';   
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
                                <div class="row box_ve mr-bot-40px background-white mr-0px">
                                      <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                                          <div class="hotel-img position-relative line-height-150px">
                                              <img src="'.$imgKh.'" alt="">
                                              <div class="hover-option background-main-color opacity-6">
                                                  <h3 class="text-center text-white padding-top-n-25 "></h3>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-8 border-grey1 pd-0px">
                                        <div class="pd-10px">
                               <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:'.$ArrKh['0']['tinh_di'].' </span>Đến:'.$ArrKh['0']['tinh_den'].'  </a></h3> 
                                          <div class="date mr-lr-15px">
                                            <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                              <i class="fa fa-chevron-up mr-right-5px"></i>
                                              Giờ đi:  
                                              <span class="text-third-color mr-right-5px">'.$ArrKh['0']['giodi'].'</span> 
                                            </a>
                                            <small class="text-uppercase text-extra-small">
                                              <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giở đến:  
                                                <span class="text-third-color mr-right-5px">'.$ArrKh['0']['gioden'].'</span> </a>
                                            </small>
                                          </div>
                                          <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                              <strong class="text-medium text-third-color padding-right-5px mr-4 font-weight-bold"> '.forMatTien($giaTienKh) .' <span >VNĐ</span></strong>
                                              <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> '.$ArrKh['0']['ngaydi'].' </i>
                                          </div>  
                                        </div>
                                      </div>
                                       
                                    </div>
                                ';
                            }
                          
                            ?>

                       <div class="bg-white border border-grey-1 padding-30px margin-tb-30px">
                           <div class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">
                               Nhập thông tin đặt vé:
                           </div>
                           <div class="pdt10px">
                                <form action="">
                           <?php 
                           for ($i=0; $i < count($_SESSION['vitrighekh']); $i++) { 
                                echo '<div class="form-row mt-3">
                                        <div class="form-group col-md-6">
                                            <label for="name">Họ Và Tên:</label>
                                            <input type="text" class="form-control" id="name" placeholder="TRAN QUANG NHAN">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Giới Tính</label>
                                            <select class="form-control w-100" name="" id="">
                                                <option value="" selected>Chọn</option>
                                                <option value="">Nam</option>
                                                <option value="">Nữ</option>
                                                <option value="">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="sdt">Số điện thoại:</label>
                                            <input type="text" class="form-control" id="sdt" placeholder="0924698776">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="diachi">CMND/Passport</label>
                                            <input type="text" class="form-control" id="diachi" placeholder="273122123">
                                        </div>
                                    </div>
                                  ';
                            }
                            ?>
                                    <a href="#" class="btn-sm btn-lg text-dark text-center font-weight-bold uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Về trang chủ</a>
                                    <a href="#" class="btn-sm btn-lg  background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-tb-10px padding-lr-30px">Đặt vé</a>
                                </form>
                            </div>

                       </div>

                   </div>


               </div>
           </div>
       </div>
   </div>