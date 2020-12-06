<?php
//  $laytt = laythongtin();
    $ltt = ltt();

        echo'
            ten:    '.$ltt['tenkh'].';
            gio di: '.$laytt['ngaydi'].';
            gio de: '.$laytt['giodi'].';
            gio de: '.$laytt['gioden'].';
        ';
?>

<body>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <!-- noi dung  -->
                <div class="col-lg-8 col-md-8 sticky-content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="col-lg-12">


                                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px ">
                                        <div class="avt" style="display: inline-block; width: 150px;">

                                        <a href="#">
                                            <img src="./img/blog-3.jpg" alt="abc">
                                        </a>

                                        </div>

                                    <div class="il thongtin padding-30px" style="display: inline-block; ">
                                        <?php 
                                            echo'
                                            <strong style="margin-right:20px;">Tên:</strong>  '.$ltt['tenkh'].'  <br>
                                            <strong syle="margin-right:1 5px;">Ngày đi: </strong>    '.$ltt['ngaydi'].'  <br>
                                            <strong>Giờ đi:</strong>    '.$ltt['giodi'].' <br>
                                            <strong>Giờ đến:</strong>   '.$ltt['gioden'].'   <br>
                                            <strong>Giờ đến:</strong>   '.$ltt['gioden'].'   <br>
                                            <strong>Điểm đi và đến:</strong>   '.$ltt['tinh_di'].' <i><strong> đến </strong> </i>  '.$ltt['tinh_den'].'<br>

                                            ';
                                        ?> 
                                    </div>
                                </div>

                               
                                <!-- abc -->
                                

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="img-in il">
                                <a href="#">
                                    <img src="" style="width: 370px; padding: 10px; border-radius: 23px;" alt="">
                                </a>
                               

                                <div class="box img-in" style="padding: 10px; margin-top: 10px" style="display: block;">
                                    <a href="#">
                                        <img src="" style="width: 80px; margin-top: -10px;margin-left: 140px;" alt="">
                                    </a>
                                </div>
                                <div  class=" img-in" style="padding: 10px; margin-top: 10px" style="display: block;">
                                <button type="button" style="margin-left: 17px" class="btn btn-primary btn-lg btn-block">Thanh Toán</button>
                                </div>
                            <div  class="" style="padding: 10px; margin-top: px" style="display: block;">
                                <button type="button" style="margin-left: 17px;margin-top:-157px;" class="btn btn-primary btn-lg btn-block">Thanh Toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>