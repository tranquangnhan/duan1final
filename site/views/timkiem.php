<nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">
    <div class="container">
      <div class="fz-12vw d-inline-block padding-tb-7px">Danh Sách Chuyến Bay</div>
      <div class="float-right">
          <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>
          <div class="d-inline-block pd-right-10px"><a href="#"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Pages</div></a>
          <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Flights</div>                
      </div>
    </div>
  </nav>
  <main class="padding-20px background-light-grey">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 box-left margin-0px">
          <div class="background-white pd-35px pd-top-25px border-grey1">
            <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>KHỨ HỒI</span></div>
              <div class="form-ground">
                <div>Từ</div>
                <select name="" id="select_awe_1" class="selectawe" data-callback="my_callback_tu" data-placeholder="Từ">
                    <?php
                        foreach ($showAllSanBay as $motsb) {
                            $maSb = explode("/",$motsb['masanbay'])[1];
                            echo '<option data-id="'.$motsb['idsanbay'].'" value="'.$maSb.'">'.$motsb['tinh'].'('.$maSb.')</option>';
                        }             
                    ?>
                </select>
              </div>
              <div class="form-ground">
                <div>Đến</div>
                <select name="" id="select_awe_2" class="selectawe" data-callback="my_callback_den" data-placeholder="Đến">
                        <?php
                            foreach ($showAllSanBay as $motsb) {
                                $maSb = explode("/",$motsb['masanbay'])[1];
                                echo '<option data-id="'.$motsb['idsanbay'].'" value="'.$maSb.'">'.$motsb['tinh'].'('.$maSb.')</option>';
                            }             
                        ?>
                </select>
              </div>
              <div class="form-ground">
                <div>Hạng ghế</div>
                <select name="" id="select_awe_tren-2" class="selectawe l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Phổ Thông">
                        <option value="1"><i class="fas fa-fighter-jet" selected></i>Phổ thông</option>
                        <option value="2"><i class="fas fa-fighter-jet"></i>Thương gia</option>
                </select>         
              </div>
              <div class="form-ground">
                  <!-- Loại -->
                  <input type="hidden"  id="select_awe_tren-1" value="1">
                      <!-- người lớn  -->
                  <input type="hidden" id="nguoilon" value="1">  
                  <input type="hidden" id="betren2" value="0">        
                  <input type="hidden" id="beduoi2" value="0">       
              </div>
              <div class="form-ground">
                <div>Ngày Đi</div>
                <input type="text" name="khuhoi_ngaydi" class="l-input l-date placeholder-icon" id="khuhoi_ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
              </div>
              <div class="form-ground">
                <div>Ngày về</div>
                <input type="text" name="khuhoi_ngayve" class="l-input l-date placeholder-icon" id="khuhoi_ngayve" placeholder="&#xf073; Ngày Về" style="font-family:Arial, FontAwesome"> 
              </div>
              <button type="submit" id="l-bt-searchkh" class="mt-3 W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>    
          </div>      
          <div class="background-white pd-35px pd-top-25px border-grey1 mr-top-30px">
            <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>MỘT CHIỀU</span></div>
              <div class="form-ground">
                <div>Từ</div>
                <select name="" id="select_awe_1_motchieu" class="selectawe" data-callback="my_callback_tu" data-placeholder="Từ">
                    <?php
                        foreach ($showAllSanBay as $motsb) {
                            $maSb = explode("/",$motsb['masanbay'])[1];
                            echo '<option data-id="'.$motsb['idsanbay'].'" value="'.$maSb.'">'.$motsb['tinh'].'('.$maSb.')</option>';
                        }             
                    ?>
                </select>
              </div>
              <div class="form-ground">
                <div>Đến</div>
                <select name="" id="select_awe_2_motchieu" class="selectawe" data-callback="my_callback_den" data-placeholder="Đến">
                        <?php
                            foreach ($showAllSanBay as $motsb) {
                                $maSb = explode("/",$motsb['masanbay'])[1];
                                echo '<option data-id="'.$motsb['idsanbay'].'" value="'.$maSb.'">'.$motsb['tinh'].'('.$maSb.')</option>';
                            }             
                        ?>
                </select>
              </div>
              <div class="form-ground">
                <div>Hạng ghế</div>
                <select name="" id="select_awe_tren-2" class="selectawe l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Phổ Thông">
                        <option value="1"><i class="fas fa-fighter-jet" selected></i>Phổ thông</option>
                        <option value="2"><i class="fas fa-fighter-jet"></i>Thương gia</option>
                </select>         
              </div>
              <div class="form-ground">
                  <!-- Loại(khứ hồi, một chiều) -->
                  <input type="hidden"  id="select_awe_tren-1" value="0">
                      <!-- người lớn  -->
                  <input type="hidden" id="nguoilon" value="1">        
                  <input type="hidden" id="betren2" value="0">        
                  <input type="hidden" id="beduoi2" value="0">         
              </div>
              <div class="form-ground">
                <div>Ngày Đi</div>
                <input type="text" name="motchieu-ngaydi" class="l-input l-date placeholder-icon" id="motchieu-ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
              </div>
              <button  id="l-bt-searchmc" type="submit" class="mt-3 W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
          </div>   
            
        </div>
        <div class="box-right">
      <?php
        $Arr = json_decode($Array, true);

     for ($i=0; $i < count($Arr); $i++) { 

        if($Arr[$i]['0']['hangmb']==1){
            $hangMb = "VietJet Air";
            $img = 'views/img/vietjet.png';
        }elseif($Arr[$i]['0']['hangmb']==2){
            $hangMb = "Vietnam Airlines";
            $img = 'views/img/vietnamairlines.png';
        }elseif($Arr[$i]['0']['hangmb']==3){
            $hangMb = "Bamboo Airways";
            $img = 'views/img/bamboo.png';
        }
        $maTinhDen = $Arr[$i]['0']['masb_den'];
        $maTinhDi = $Arr[$i]['0']['masb_di'];
        $maTinhDen =  explode("/",$maTinhDen)[1];
        $maTinhDi =  explode("/",$maTinhDi)[1];
        
        if($loaiGhe == 1){
            $giaVe =  $Arr[$i]['0']['giavethuong'];
        }
        elseif($loaiGhe == 2){
            $giaVe = $Arr[$i]['0']['giavethuonggia'];
        }
          ?>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="<?=$img?>" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
                <input type="hidden" id="loaighe" value="<?=$loaiGhe?>">
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:<?=$Arr[$i]['0']['tinh_di']?> </span>Đến:<?=$Arr[$i]['0']['tinh_den']?> </a></h3> 
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(<?=$Arr[$i]['0']['id']?>)">Đặt Ngay</a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Giờ đi:  
                    <span class="text-third-color mr-right-5px"><?=$Arr[$i]['0']['giodi']?></span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                  Giở đến:  
                      <span class="text-third-color mr-right-5px"><?= $Arr[$i]['0']['gioden']?></span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px mr-4 font-weight-bold"><span class="mr-1" style="color: black;">Tiền:</span> <?= forMatTien($giaVe)?> <span class="mr-1" style="color: black;">VNĐ</span></strong>

                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> <?=$Arr[$i]['0']['ngaydi'] ?></i>
                </div>   
              </div>
            </div>
          </div>
     <?php }?>
        </div>
      </div>
    </div>
  </main>
 
