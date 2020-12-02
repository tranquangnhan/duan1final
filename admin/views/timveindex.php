<div class="col-lg-9">
    <?php 
         $Arr = json_decode($Array, true);
         for ($i=0; $i < count($Arr); $i++) { 
            if($Arr[$i]['0']['10']==1){
                $hangMb = "VietJet Air";
                $img = 'views/img/vietjet.png';
            }elseif($Arr[$i]['0']['10']==2){
                $hangMb = "Vietnam Airlines";
                $img = 'views/img/vietnamairlines.png';
            }elseif($Arr[$i]['0']['10']==3){
                $hangMb = "Bamboo Airways";
                $img = 'views/img/bamboo.png';
            }
            $maTinhDen = $Arr[$i]['0']['6'];
            $maTinhDi = $Arr[$i]['0']['7'];
            $maTinhDen =  explode("/",$maTinhDen)[1];
            $maTinhDi =  explode("/",$maTinhDi)[1];
            
            if($loaiGhe == 1){
                $giaVe =  $Arr[$i]['0']['8'];
            }
            elseif($loaiGhe == 2){
                $giaVe = $Arr[$i]['0']['9'];
            }
            echo '<div class="row mt-3 showve ml-3">
                         <div class="col-lg-3">
                            <input type="hidden" id="loaighe" value="'.$loaiGhe.'">
                             <img src="'.$img.'" alt="">
                             '.$hangMb.'
                         </div>
                         <div class="col-lg-6">
                             <div class="row">
                                 <div class="col-lg-3">
                                     <div class="thoigiandi">'.$Arr[$i]['0']['2'].'</div>
                                     <div class="thoigiandi">'.$Arr[$i]['0']['5'].' <br>('.$maTinhDen.')</div>
                                 </div>
                                 <div class="col-lg-2">
                                     <img src="views/img/iconmb.svg" alt="">
                                 </div>
                                 <div class="col-lg-3">
                                     <div class="thoigiandi">'.$Arr[$i]['0']['1'].'</div>
                                     <div class="thoigiandi">'.$Arr[$i]['0']['4'].' <br>('.$maTinhDi.')</div>
                                 </div>
                                 <div class="col-lg-4">
                                     <div class="thoigiandi">'.tinhThoiGian($Arr[$i]['0']['giodi'],$Arr[$i]['0']['gioden']).'</div>
                                     <div class="thoigiandi">Bay thẳng</div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 ">
                             RP '.$giaVe.'
                                     /khách
                             <div class="btn-chon" onclick="chonVe('.$Arr[$i]['0']['0'].')">
                                 Chọn
                             </div>
                         </div>
                     </div>';
         }

    ?>
</div>