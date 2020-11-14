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
                                                <th width="100">Ảnh</th> 
                                                <th width="200">Mã Danh Mục</th>
                                                <th width="100">Giá</th>
                                                <th width="100">Giảm Giá</th> 
                                                <th width="300">Điểm Đi</th>
                                                <th width="300">Điểm Đến</th>
                                                <th width="200">Loại Ghế</th>
                                                <th width="200">Thời Gian Đi</th>
                                                <th width="200">Thời Gian Đến</th>
                                                <th width="70">Hành Lý</th>
                                                <th width="70">Suất Ăn</th>                                               
                                              
                                                        
                                            </tr>
                                        </thead>

                                        <tbody id="result">
                                                   <?php
                                $i=0;
                                foreach ($showAllve as $ve) {
                                    $i++;
                                    $id = $ve['id'];
                                    // $img= $pathimg .$ve['anh'];
                                    $linkdel = "index.php?ctrl=ve&act=del&iddel=".$id;
                                    $linkedit = "index.php?ctrl=ve&act=add&idedit=".$id;        
                                ?>
                                <tr>
                                    <td><?=$i?></td>  
                                    <td><?=$ve['tenmaybay']?></td>
                                    <td><img src="<?=$img?>" alt=""></td>  
                                    <td><?=$ve['iddm']?></td>
                                    <td><?=$ve['gia']?></td>
                                    <td><?=$ve['giamgia']?></td>
                                    <td><?=$ve['diemdi']?></td>
                                    <td><?=$ve['diemden']?></td>
                                    <td><?=$ve['loaighe']?></td>
                                    <td><?=$ve['tgdi']?></td>
                                    <td><?=$ve['tgden']?></td>
                                    <td><?=$ve['hanhly']?></td>
                                    <td><?=$ve['suatan']?></td>
                                  
                                    <td>
                                        <a href="<?=$linkdel?>"><i class="fa fa-trash mr-3" onclick="return checkDelete()"></i></a>
                                        <a href="<?=$linkedit?>"><i class="fa fa-edit"></i></a>
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