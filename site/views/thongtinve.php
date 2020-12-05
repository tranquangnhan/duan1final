<?php
//  $laytt = laythongtin();
    $ltt = ltt();

        // echo'
        //     ten:    '.$ltt['tenkh'].';
        //     gio di: '.$laytt['ngaydi'].';
        //     gio de: '.$laytt['giodi'].';
        //     gio de: '.$laytt['gioden'].';
        // ';
?>

<body>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <!-- noi dung  -->
                <div class="col-lg-8 col-md-8 sticky-content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px row">
                                        <div class="col-lg-4">
                                            <a href=""><img src="./img/avt123.jpg" alt="hinh" ></a>
                                        </div>
                                        <div class="col-lg-8" style="padding:25px 10px 25px 25px">
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Họ và tên:</strong><?=$ltt['tenkh']?> <br></div>
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Số điện thoại:</strong> <?=$ltt['dienthoai']?></div>
                                            <div style="margin-bottom:10px"><strong style="margin-right: 10px;">Ngày đi:</strong>  <?=$ltt['ngaydi']?></div>
                                            <div style="margin-bottom:10px">
                                                <strong style="margin-right: 5px;">Giờ đi</strong>      <span class="badge badge-primary text-wrap" style="width: 3rem; padding:6px;margin-right:5px"><?=$ltt['giodi']?></span>
                                                <strong  style="margin-right: 5px;">Giờ đến</strong>    <span class="badge badge-primary text-wrap" style="width: 3rem; padding:6px;"> <?=$ltt['gioden']?> </span>
                                            </div>
                                            <div style="margin-bottom:10px">
                                                <strong style="margin-right: 5px;">Mã điểm <u>đi-đến</u>:</strong>     <?=$ltt['masb_den']?>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px ">
                                        <div class="avt">
                                            <div style="background-color: #1db8c1;border-radius:4px 4px 0px 0px">
                                                <div class="text-center" style="width:100%;height:200px;">hinh anh</div>
                                                
                                            </div>
                                            <div style="background: #655E5E;width:100%;height:50px;border-radius:0px 0px 7px 7px">
                                                <div class=" text-white" style="position: absolute; margin-top:13px; margin-left: 100px;font-size:15px;font-weight: 700"><?=$ltt['tinh_di']?> đến <?=$ltt['tinh_den']?></div>
                                            </div>
                                        </div>
                                        

                                    <!-- <div class="il thongtin padding-30px" style="display: inline-block; ">

                                    </div> -->
                                </div>
                                <div class="col-lg-12 row" style="margin-top: 10px;">
                                            <div class="col-lg-8">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">Thanh toán</button>
                                            </div>

                                            <div class="col-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">In vé</button>

                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>