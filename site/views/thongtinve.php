
<body>
    <div class="pd-tb-80px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <!-- noi dung  -->
                <div class="col-lg-8 col-md-8 l-div-ve mr-0auto">
                    <?php 
                    $pImg = 'views/img/'; 
                    $img = 0;
                    foreach($timve as $show) {                     
                        if ($show['hangmb'] == 1) {
                            $img = $pImg.'vietjet.png';
                            $tenairline = "VietJet Air";
                        } else if ($show['hangmb'] == 2){
                            $img = $pImg.'vietnamairlines.png';
                            $tenairline = "Vietnam Airlines";
                        } else if ($show['hangmb'] == 2){
                            $img = $pImg.'pacific.png';
                            $tenairline = "Pacific Airlines";
                        } else if ($show['hangmb'] == 2){
                            $img = $pImg.'bambo.png';
                            $tenairline = "Bamboo Airways";
                        }   
                        $strmin = "m"; 
                        $timefly = ((strtotime($show['giodi']) - strtotime($show['gioden'])) / 60) / 60;
                        $timeflyabs = abs(number_format((float)$timefly,'2','.','')); // lấy 2 số sau , và chuyển sang số dương
                        if (is_float($timefly)) { // check có phải số thập phân kh      
                            $timeflyfinal = str_replace(".","h ",$timeflyabs).$strmin; // chèn h vào dấu chấm
                        } else {
                            $timeflyfinal = $timeflyabs. 'h 00m'; // 
                        }
                    ?>
                    <div class="l-airline-box">
                        <div class="l-airline-img d-inlblock">
                            <img src="<?=$img?>" alt="">
                            <span class="l-ten-airline"><?=$tenairline?></span>
                        </div>
                        <div class="l-airline-time d-inlblock">
                            <div class="l-air-diadiem d-inlblock">
                                <span class="l-airtime-span"><?=$show['giodi']?></span><br>
                                <span class="l-airdd-span"><?=$show['tinh_di']?></span>
                            </div>
                            <i class="fas fa-plane mr-lr-7pt"></i>
                            <div class="l-air-diadiem d-inlblock l-text-al-left">
                                <span class="l-airtime-span"><?=$show['gioden']?></span><br>
                                <span class="l-airdd-span"><?=$show['tinh_den']?></span>
                            </div>
                        </div>
                        <div class="l-airline-finaltime d-inlblock">
                            <span><?=$timeflyfinal?></span>
                        </div>
                        <div class="l-airline-info d-inlblock">
                            <div class="l-airline-ten l-div-hover"><?=$show['tenkh']?></div>
                            <div class="l-airline-sdt l-div-hover"><?=$show['dienthoai']?></div>
                            <div class="l-airline-ngay l-div-hover"><?=$show['ngaydi']?></div>
                        </div>
                    </div>
                
               
                <?php  }?>
                </div>

            </div>
        </div>
    </div>
</body>