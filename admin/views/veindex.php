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
                     <table class="table table-striped table-inverse table-responsive">
                         <thead class="thead-inverse">
                             <tr>
                                 <th>ID</th>

                                 <th width="200">Tên Máy Bay </th>


                                 <th width="300">Điểm Đi</th>
                                 <th width="300">Điểm Đến</th>

                                 <th width="200">Thời Gian Đi</th>
                                 <th width="200">Thời Gian Đến</th>



                             </tr>
                         </thead>

                         <tbody id="result">
                             <?php
                             foreach ($showdiemden as $dden) {
                                $diemden= $dden['tensanbay'];
                            }
                            foreach ($showdiemdi as $ddi) {
                               $diemdi= $ddi['tensanbay'] ;
                             }
                                $i = 0;
                                foreach ($showAllve as $ve) {
                              
                                    $i++;
                                    $id = $ve['id'];
                              
                                    
                                    // $img= $pathimg .$ve['anh'];

                                    $linkdel = "index.php?ctrl=ve&act=del&iddel=" . $id;
                                    $linkedit = "index.php?ctrl=ve&act=add&idedit=" . $id;
                                ?>
                                 <tr>
                                     <td><?= $i ?></td>
                                     <td><?= showTenmaybay($ve['idmaybay']) ?></td>
                                     
                                         <td><?= $diemden ?></td>
                                     
                                         <td><?= $diemdi ?></td>
                                         <td><?= $ve['ngaydi'] ?></td>
                                     <td><?= $ve['giodi'] ?></td>
                                     <td><?= $ve['gioden'] ?></td>



                                     <td>
                                         <a href="<?= $linkdel ?>"><i class="fa fa-trash mr-3" onclick="return checkDelete()"></i></a>
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