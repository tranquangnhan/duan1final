 <div class="col-lg-9">
     <div class="container-fluid">
         <div class="row d-flex justify-content-between mt-3">
             <div class="col-lg-4 text-dark mt-3">
                 <h2>VÉ MÁY BAY</h2>
             </div>
             <div class="col-lg-3 mt-3">
                 <nav aria-label="breadcrumb ">
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                         <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                     </ol>
                 </nav>
             </div>
         </div>
         <hr>
         <div class="row mt-3">
             <div class="col-lg-12 bg-white pb-4 border">
                 <div class="row d-flex justify-content-center">
                     <table class="table table-striped w-100">
                         <thead class="thead-inverse">
                             <tr>
                                 <th>ID</th>
                                 <th width="200">Tên Máy Bay </th>
                                 <th width="300">Điểm Đi</th>
                                 <th width="300">Điểm Đến</th>
                                 <th width="300">Ngày Đi</th>
                                 <th width="150">Thời Gian Đi</th>
                                 <th width="150">Thời Gian Đến</th>
                                 <th width="200">Trạng Thái</th>
                                 <th width="200">Hành Động</th>
                             </tr>
                         </thead>

                         <tbody id="result">
                             <?php
                          
                                $i = 0;
                                foreach ($selectData as $ve) {
                                    $i++;
                                    $id = $ve['id'];
                                    // check trạng thái
                                    $today_date = strtotime(date("Y-m-d"));

                                    $today_time = strtotime(date('H:i:s'));
                
                                    $another_date = $ve['ngaydi'];

                                    if ($today_date > strtotime($another_date)) {
                                        $trangthai = "Hoàn Thành";
                                        setTrangThai($ve['id']);
                                    } else {
                                        if($ve['ngaydi'] == date("Y-m-d")&& strtotime($ve['gioden']) <= $today_time){
                                            $trangthai =  "Hoàn Thành";
                                            setTrangThai($ve['id']);
                                        }else{
                                            $trangthai = "Chưa Bay";
                                        }
                                    }
                                    $linkdel = "index.php?ctrl=ve&act=del&iddel=" . $id;
                                    $linkedit = "index.php?ctrl=ve&act=add&idedit=" . $id;
                                ?>
                                 <tr>
                                     <td><?= $i ?></td>
                                     <td><?= showTenmaybay($ve['idmaybay']) ?></td>
                                     
                                         <td><?=showdiemdi(showiddiemdi($ve['idtuyenduong']))?></td>
                                         <td><?=showdiemdi(showiddiemden($ve['idtuyenduong']))?></td>
                                       
                                         <td><?= $ve['ngaydi'] ?></td>
                                     <td><?= $ve['giodi'] ?></td>
                                     <td><?= $ve['gioden'] ?></td>
                                     <td><?=$trangthai?></td>
                                     <td>
                                         <a href="<?= $linkdel ?>" onclick="return checkDelete()"><i class="fa fa-trash mr-3" ></i></a>
                                         <a href="<?= $linkedit ?>"><i class="fa fa-edit"></i></a>
                                     </td>
                                 </tr>  
                             <?php }

                                ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>