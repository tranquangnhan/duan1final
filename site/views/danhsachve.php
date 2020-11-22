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
            <form action="">
              <div class="form-ground">
                <div>Từ</div>
                <input class="mr-tb-4pt" type="text" placeholder="Hồ Chí Minh (SGN)"> 
              </div>
              <div class="form-ground">
                <div>Đến</div>
                <input class="mr-tb-4pt" type="text" placeholder="Hồ Chí Minh (SGN)"> 
              </div>
              <div class="form-ground">
                <div>Ngày Đi</div>
                <input class="mr-tb-4pt" type="date" placeholder="dd/mm/yy"> 
              </div>
              <div class="form-ground">
                <div>Ngày về</div>
                <input class="mr-tb-4pt" type="date" placeholder="dd/mm/yy"> 
              </div>
              <button type="submit" class="W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
            </form>    
          </div>      
          <div class="background-white pd-35px pd-top-25px border-grey1 mr-top-30px">
            <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>MỘT CHIỀU</span></div>
            <form action="">
              <div class="form-ground">
                <div>Từ</div>
                <input class="mr-tb-4pt" type="text" placeholder="Hồ Chí Minh (SGN)"> 
              </div>
              <div class="form-ground">
                <div>Đến</div>
                <input class="mr-tb-4pt" type="text" placeholder="Hồ Chí Minh (SGN)"> 
              </div>
              <div class="form-ground">
                <div>Ngày Đi</div>
                <input class="mr-tb-4pt" type="date" placeholder="dd/mm/yy"> 
              </div>
              <button type="submit" class="W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
            </form>    
          </div>   
          <div class="background-white pd-35px pd-top-25px border-grey1 mr-top-30px">
            <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>Mức Giá</span></div>
            <form action="">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                <label class="custom-control-label" for="customRadio">500.000 VND</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                <label class="custom-control-label" for="customRadio2">1.000.000 VND</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio3" name="example" value="customEx">
                <label class="custom-control-label" for="customRadio3">1.500.000 VND</label>
              </div>
              <button type="submit" class="W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
            </form>
          </div>   
        </div>
        
        <div class="box-right">
      <?php foreach ($showVe AS $k ){ ?>
       

          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
     <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:<?= $k['tinh_di']?> </span>Đến:<?= $k['tinh_den']?> </a></h3> 
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Đặt Ngay</a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Giờ đi:  
                    <span class="text-third-color mr-right-5px"><?= $k['giodi']?></span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                  Giở đến:  
                      <span class="text-third-color mr-right-5px"><?= $k['gioden']?></span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><?= $k['giavethuong']?></strong>VNĐ
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> <?= $k['ngaydi']?></i>
                </div>                    
              </div>
            </div>
          </div>
              
     <?php }?>

      <!-- <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div>
          <div class="row box_ve mr-bot-40px background-white mr-0px">
            <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                <div class="hotel-img position-relative line-height-150px">
                    <img src="views/img/vietject.png" alt="">
                    <div class="hover-option background-main-color opacity-6">
                        <h3 class="text-center text-white padding-top-n-25 "></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 border-grey1 pd-0px">
              <div class="pd-10px">
                <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">from: Riyadh</span>to: Paris</a></h3>  
                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase">Booking Now </a>
                <div class="date mr-lr-15px">
                  <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                    <i class="fa fa-chevron-up mr-right-5px"></i>
                    Desparture :  
                    <span class="text-third-color mr-right-5px">28/3/2017</span> 
                  </a>
                  <small class="text-uppercase text-extra-small">
                    <a href="#" class="cl-te-grey fz-0p7rem">
                      <i class="fa fa-chevron-down mr-right-5px"></i>
                      Return :  
                      <span class="text-third-color mr-right-5px">28/3/2017</span> </a>
                  </small>
                </div>
                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold">600.000VND</strong>Person
                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Oneway flight</span> 2 Sotp</i>
                </div>                    
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </main>
