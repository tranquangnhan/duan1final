<nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">
    <div class="container">
      <div class="fz-12vw d-inline-block padding-tb-7px">Danh Sách Chuyến Bay</div>
      <div class="float-right">
          <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>
          <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Khuyến Mãi</div>                
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
      $pImg = 'views/img/';
      foreach ($vekhuyenmai AS $k){
          $hangmb = showhangmb($k['idchuyenbay']);
          if ($hangmb == 1) {
            $img = $pImg.'vietjet.png';
          } else if ($hangmb == 2) {
            $img = $pImg.'vietnamairlines.png';
          } else if ($hangmb == 3) {
            $img = $pImg.'pacific.png';
          } else if ($hangmb == 4) {
            $img = $pImg.'bambo.png';
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
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <div class="l-w-tenduong">
                  <a href="#" class="text-dark mr-lr-15px">
                    <span class="mr-right-30px">  Từ: <?=  showtensanbay(showiddiemdi(showidtuyenduong($k['idchuyenbay'])))?> </span>
                    Đến: <?= showtensanbay(showiddiemden(showidtuyenduong($k['idchuyenbay'])))?> 
                  </a>
                </div>           
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(<?=$k['idchuyenbay']?>);">Đặt Ngay</a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Giờ đi:  
                    <span class="text-third-color mr-right-5px"><?= showgiodi($k['idchuyenbay'])?></span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                  Giờ đến:  
                      <span class="text-third-color mr-right-5px"><?= showgioden($k['idchuyenbay'])?></span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                  <?php 
                    $giamcon = ($k['giavethuonggia'] * (100 - $k['giamgia'])) / 100;
                  ?>
                    <a class="text-medium padding-right-5px mr-4"><span class="mr-1">Giá:</span class="text-line-through"><?=number_format($k['giavethuonggia'],0,",",".");?> <span class="mr-1">VNĐ</span></a>
                    <a class="text-medium padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red"><?=number_format($giamcon,0,",",".");?></span><span class="mr-1"> VNĐ</span></a>

                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> <?= showngaydi($k['idchuyenbay']) ?></i>
                </div>   
                <!-- <div class="text-uppercase  mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> <?= $k['giamgia']?></strong>VNĐ
                </div>                  -->
              </div>
            </div>           
          </div>
     <?php }?>
          <input type="hidden" id="loaighe" value="2">
          <nav aria-label="...">
            <ul class="pagination">
                <?php echo $links; ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </main>
 
