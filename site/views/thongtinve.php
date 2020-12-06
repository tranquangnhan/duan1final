
<body>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <!-- noi dung  -->
                <?php
                foreach($timve as $show) { ?>
                <div class="col-lg-8 col-md-8 sticky-content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px row">
                                        <div class="col-lg-4">
                                            <a href=""><img src="./img/avt123.jpg" alt="hinh" ></a>
                                        </div>
                                        <div class="col-lg-8" style="padding:25px 10px 25px 25px">
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Họ và tên:</strong><?=$show['tenkh']?> <br></div>
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Số điện thoại:</strong> <?=$show['dienthoai']?></div>
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Ngày đi:</strong>  <?=$show['ngaydi']?></div>
                                            <div style="margin-bottom:10px">
                                                <strong style="margin-right: 5px;">Giờ đi</strong>      <span class="badge badge-primary text-wrap" style="width: 3rem; padding:6px;margin-right:5px"><?=$show['giodi']?></span>
                                                <strong  style="margin-right: 5px;">Giờ đến</strong>    <span class="badge badge-primary text-wrap" style="width: 3rem; padding:6px;"> <?=$show['gioden']?> </span>
                                            </div>
                                            <div style="margin-bottom:10px">
                                                <strong style="margin-right: 5px;">Mã điểm <u>đi-đến</u>:</strong>     <?=$show['masb_den']?>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  }?>


            </div>
        </div>
    </div>
</body>