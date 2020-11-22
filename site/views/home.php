<div class="box_header">
  <div class="baner-gb position-relative">
    <div class="owl-carousel owl-theme owl-loaded" id="owl-1">
      <div class="owl-stage-outer">
        <div class="owl-stage">
          <div class="owl-item">
            <div class="pn1-img"></div>
            <img src="views/img/panner1.jpg" alt="">
            <div class="anim-pn1">
              <div class="anim1-pn1 animated fadeInDownBig light-hight-50px">Chúng tôi <br> Muốn </div>
              <div class="animate-delay-0p4s anim2-pn1 animated fadeInRightBig">Khách hàng / Nhanh chóng / Đẳng cấp</div>
              <div class="animate-delay-0p7s anim3-pn1 animated fadeInRightBig">Mọi thứ bạn cần. Ở đâu rẻ hơn Travelz hoàn tiền. </div>
              <a href="#" class="">
                  <div class="animate-delay-0p9s anim4-pn1 animated fadeInRightBig">Đặt vé hôm nay</div>
              </a>
            </div>
          </div>
          <div class="owl-item">
            <div class="pn2-img"></div>
            <img src="views/img/panner2.jpg" alt="">
            <div class="anim-pn2">
              <div class="anim1-pn2 animated fadeInUp">All Day Happy</div>
              <div class="animate-delay-0p4s anim2-pn2 animated fadeInUp"><img src="views/img/5saodiscount.png" alt=""></div>
              <div class="animate-delay-1s anim3-pn2 animated fadeInUp">travelz@gmail.com <br> +1900 333 019 <br> Tuần Lễ Vàng muôn vàng giảm giá </div>
            </div>
          </div>
          <div class="owl-item">
            <div class="pn2-img"></div>
            <img src="views/img/panner3.jpg" alt="">
            <div class="anim-pn3">
              <div class="anim1-pn3 animated fadeInDown">plans your trip</div>
              <div class="animate-delay-0p7s anim2-pn3 animated fadeInUp"><img src="views/img/86311-Holidays-today.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="background-light-grey">
  <div class="container">
    <div id="search-filter-2" class="pull-top-8pt z-index-21 position-relative">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item filght mr-right-1pt" id="li-motchieu">
          <a class="nav-link a_filght text-white active show" style="border-radius: none;" id="a-motchieu" data-toggle="tab" href="#home" role="tab"><i class="fas fa-plane-departure"></i> Một chiều</a>
        </li>
        <li class="nav-item filght mr-right-1pt" id="li-khuhoi">
          <a class="nav-link a_filght text-white " style="border-radius: none;" id="a-khuhoi" data-toggle="tab" href="#home" role="tab"><i class="fas fa-plane-arrival"></i> Chuyến đi khứ hồi</a>
        </li>
      </ul>
              <!-- <li class="nav-item filght mr-right-1pt" id="id-nhieudiemden">
        <a class="nav-link a_filght text-white" id="id-nhieudiemden" data-toggle="tab" href="#home" role="tab"><i class="fas fa-plane"></i> Nhiều điểm đến</a>
      </li> -->          
      <div class="padding-30px box-shadow background-white">
        <div class="active" id="home" role="tabpanel">
            <form action="" method="get">
          <div class="row">
            <div class="form-group col-lg-2" id="noiden">
              <label>Địa điểm</label>
              <div class="form-group">
                <select class="form-control" name="" id="">
                  <option value="" selected>Chọn</option>
                  <?php $showAllSanBay = showAllSanBay();
                  foreach ($showAllSanBay as $motdd) {
                    echo '<option value="'.$motdd['id'].'">'.$motdd['tinh'].'</option>';
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group col-lg-2" id="noiden">
              <label>Nơi đến</label>
              <div class="form-group">
                <select class="form-control" name="" id="">
                    <option value="" selected>Chọn</option>
                  <?php foreach ($showAllSanBay as $motdd) {
                    echo '<option value="'.$motdd['id'].'">'.$motdd['tinh'].'</option>';
                  } ?>
                </select>
              </div>
            </div>
            <div class="form-group col-lg-2" id="khoihanh">
              <label>Khởi hành</label>
              <div class="date-input"><input type="date" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1604379882087"></div>
            </div>
            <div class="form-group col-lg-2" id="trove">
              <label>Trở Về</label>
              <div class="date-input"><input type="date" class="input-text datepicker full-width hasDatepicker" placeholder="15 / 5 / 2017" id="dp1604379882087"></div>
            </div>
            <div class="col-lg-2">
              <label>Vé</label>
              <div class="ticket"><input type="text" class="input-text full-width" placeholder="1"></div>
            </div>
            <div class="col-lg-2">
              <label>Trẻ em</label>
              <div class="children"><input type="text" class="input-text full-width" placeholder="0"></div>
            </div>
            <div class="col-lg-2">
              <label>Em bé</label>
              <div class="children"><input type="text" class="input-text full-width" placeholder="0"></div>
            </div>
            <div class="col-lg-2">
              <label>Hạng ghế</label>
              <div class="form-group">
                <select class="form-control" name="" id="">
                  <option value="" selected>Chọn</option>
                  <option value="0">Phổ Thông</option>
                  <option value="1">Thương Gia</option>
                </select>
              </div>
            </div>
            <div class="col-lg-2 mr-0-at">
              <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase margin-top-32px padding-7px"> TÌM KIẾM</a>
            </div>
          </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box_main background-light-grey">
  <div class="container pd-bot-100px">
    <div class="section-title-center">
      <h1 class="title fz-2vw"><span class="color_main">Hot</span> Flight</h1>
      <span class="section-title-des fz-1vw">Nhấp vào đăng kí để nhận nhiều thông tin ưu đãi ngay</span>
    </div>
    <div class="row mr-top-8pt">
      <div class="l-box-ud">
        <a href="google.com">
          <div class="l-box-ud-img">
            <img src="views/img/phanthiet.jpg" alt="">
          </div>
          <div class="l-thongtin-ud">
            <h2 class="fz-1vw te-al-left">Hồ Chí Minh (SGN) To <br> Phan Thiết (PTN)</h2>
            <p><span>650.000 VNĐ</span> <b class="l-ud-giam-gia">  320.000 VNĐ</b></p>
            <p class="l-ud-date-flight">15 08 2020</p>           
          </div>       
        </a>
      </div>
      <div class="l-box-ud">
        <a href="google.com">
          <div class="l-box-ud-img">
            <img src="views/img/phanthiet.jpg" alt="">
          </div>
          <div class="l-thongtin-ud text-uppercase">
            <h2 class="fz-1vw te-al-left">Hồ Chí Minh (SGN) To <br> Phan Thiết (PTN)</h2>
            <p><span>650.000 VNĐ</span> <b class="l-ud-giam-gia">  320.000 VNĐ</b></p>
            <p class="l-ud-date-flight">15 08 2020</p>            
          </div>
        </a>
      </div>      
      <div class="l-box-ud">
        <a href="google.com">
          <div class="l-box-ud-img">
            <img src="views/img/phanthiet.jpg" alt="">
          </div>
          <div class="l-thongtin-ud">
            <h2 class="fz-1vw te-al-left">Hồ Chí Minh (SGN) To <br> Phan Thiết (PTN)</h2>
            <p><span>650.000 VNĐ</span><b class="l-ud-giam-gia">  320.000 VNĐ</b></p>
            <p class="l-ud-date-flight">15 08 2020</p>           
          </div>
        </a>   
      </div>   
      <div class="l-box-ud mr-0">
        <a href="google.com">
          <div class="l-box-ud-img">
            <img src="views/img/phanthiet.jpg" alt="">
          </div>
          <div class="l-thongtin-ud ">
            <h2 class="fz-1vw te-al-left">Hồ Chí Minh (SGN) To <br> Phan Thiết (PTN)</h2>
            <p><span>650.000 VNĐ</span> <b class="l-ud-giam-gia">  320.000 VNĐ</b> </p>
            <p class="l-ud-date-flight">15 08 2020</p>
          </div>       
          </div>
        </a>
      </div>
    </div>
    <div class="row box-map">
      <!-- <div class="map pd-t-100px"> -->
        <div class="container pd-t-100px">
          <div class="row justify-content-end">
            <div class="col-lg-8 te-al-left">
              <div class="section-title-left mr-bot-60px">
                <h1 class="title fz-2vw"><span class="color_main">Top</span> Cities</h1>
                <span class="section-title-des fz-1vw">
                  với một vài đất nước, dẫu cho nơi đây là lần đầu tiên người ta đến. </span>
              </div>
              <div class="row mr-top-10pt">
                <div class="col-md-6">
                  <div class="box-city background-white border mr-bot-6pt">
                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img src="views/img/citie-1.jpg" alt=""></a></div>
                    <div class="city-body">
                      <div class="pd-14px">
                        <!--  -->
                        <a class="d-block text-uppercase name-city" href="#">Đà Lạt </a>
                        <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span class="text-third-color">673</span></a>
                        <a href="#" class="fz-07 cl-te-grey">Sức chứa: <span class="text-third-color"> 38.000</span> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-city background-white border mr-bot-6pt">
                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img src="views/img/citie-2.jpg" alt=""></a></div>
                    <div class="city-body">
                      <div class="pd-14px">
                        <a class="d-block text-uppercase name-city" href="#">Hồ Chí Minh</a>
                        <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span class="text-third-color">641</span></a>
                        <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 44.000</span> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-city background-white border mr-bot-6pt">
                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img src="views/img/citie-3.jpg" alt=""></a></div>
                    <div class="city-body">
                      <div class="pd-14px">
                        <a class="d-block text-uppercase name-city" href="#">Hà Nội </a>
                        <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span class="text-third-color">511</span></a>
                        <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 31.000</span> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box-city background-white border mr-bot-6pt">
                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img src="views/img/citie-4.jpg" alt=""></a></div>
                    <div class="city-body">
                      <div class="pd-14px">                     
                        <a class="d-block text-uppercase name-city" href="#">Đà Nẵng </a>
                        <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span class="text-third-color">1.016</span></a>
                        <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 69.000</span> </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>              
          </div>
        </div>
      <!-- </div> -->
      </div>
      <div class="background-light-grey W-100 pd-t-100px pd-bot-50px">
        <div class="container pd-bot-80px">
          <div class="row">
            <div class="col-lg-6 te-al-left">
              <div class="section-title-left mr-bot-70px">
                <h1 class="title fz-2vw"><span class="color_main">Last </span> News</h1>
                <span class="section-title-des fz-1vw">Kênh tin tức về du lịch, trao đổi, chia sẻ kinh nghiệm</span>
              </div>
              <div class="news-cart background-white border mr-bottom-35px">
                <div class="float-sm-left mr-right-30px box-img-news">
                  <img src="views/img/news-1.jpg" alt="">
                </div>
                <div class="padding-20px">
                  <a href="#" class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">Đến Sapa Chinh phục đỉnh cao Fansipan xuyên qua khu bảo tồn Vườn quốc gia Hoàng Liên Sơn.</a>
                  <span class="fz-07 mr-right-30px">By : <a href="#" class="color_main">Rabie Elkheir</a></span>
                  <span class="fz-07">Date :  <a href="#" class="color_main">July 15, 2020</a></span>
                </div>
              <!-- <div class="clearfix"></div> -->
              </div>
              <div class="news-cart background-white border mr-bottom-35px">
                <div class="float-sm-left mr-right-30px box-img-news">
                  <img src="views/img/news-2.jpg" alt="">
                </div>
                <div class="padding-20px">
                  <a href="#" class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">Dễ sử dụng và rẻ nữa rất là tiện lợi nha mọi người, đây là lần đầu mình mua vé trên web</a>
                  <span class="fz-07 mr-right-30px">By : <a href="#" class="color_main">Linh Pham</a></span>
                  <span class="fz-07">Date :  <a href="#" class="color_main">July 15, 2020</a></span>
                </div>
              <!-- <div class="clearfix"></div> -->
              </div>
            </div>
            <div class="col-lg-6 te-al-left">
              <div class="section-title-left mr-bot-70px">
                <h1 class="title fz-2vw"><span class="color_main">Traveler </span> Say</h1>
                <span class="section-title-des fz-1vw">Hãy góp ý cho chúng tôi giúp chúng tôi phục vụ bạn tốt hơn</span>
              </div>              
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active background-white padding-30px border">
                    <div class="float-left mr-right-20px"><img src="views/img/avt-1.jpg" alt=""></div>
                    <h5 class="text-medium cl-te-black text-uppercase">Rabie Elkheir</h5>
                    <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>                    
                    <i class="d-block mr-tb-20px text-medium text-grey-4">Với những thứ tốt nhất có thể. Chúng tôi đưa bạn đến những nơi xa xôi trên mảnh Đất Việt này và chúng tôi cam kết. Ở đâu rẻ hơn, chúng tôi hoàn tiền </i>
                </div>
                <div class="carousel-item background-white padding-30px border">
                  <div class="float-left mr-right-20px"><img src="views/img/avt-2.png" alt=""></div>
                  <h5 class="text-medium cl-te-black text-uppercase">Mark Zuckerberg</h5>
                  <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>               
                  <i class="d-block mr-tb-20px text-medium text-grey-4">Nếu bạn có thắc mắc về thông tin, giá vé hay bất cứ gì. Hãy liên hệ với chúng tôi ngay, chúng tôi có người giải đáp cho bạn ngay hoặc là lâu nhất là 24H. Xin cảm ơn!</i>
                </div>
                <div class="carousel-item background-white padding-30px border">
                  <div class="float-left mr-right-20px"><img src="views/img/avt-3.png" alt=""></div>
                  <h5 class="text-medium cl-te-black text-uppercase">Nguyên Nhất Cương</h5>
                  <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý nhân sự</span></i>                  
                  <i class="d-block mr-tb-20px text-medium text-grey-4">Các bạn đang tìm một công việc tốt? Làm việc văn phòng máy lạnh sẽ giúp bạn có tinh thần tốt hơn. Hãy đến với ngôi nhà chung của chúng tôi. Liên hệ 0983232323</i>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="" aria-hidden="true"><i class="fas fa-chevron-left fz-2vw"></i></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="" aria-hidden="true"><i class="fas fa-chevron-right fz-2vw"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>