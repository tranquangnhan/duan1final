<div class="col-lg-9">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-lg-4 text-dark mt-3">
                                <h2>SẢN PHẨM</h2>
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
                                                <th>Mã Danh Mục</th>
                                                <th>Giá</th>
                                                <th>Giảm Giá</th> 
                                                <th width="300">Điểm Đi</th>
                                                <th width="300">Điểm Đến</th>
                                                <th>Loại Ghế</th>
                                                <th >Thời Gian Đi</th>
                                                <th >Thời Gian Đến</th>
                                                <th >Hành Lý</th>
                                                <th >Giải Trí</th>
                                                <th >Xuất Ăn</th>                                               
                                                <th>Loại Máy Bay</th>

                                            </tr>
                                        </thead>

                                        <tbody id="result">
                                                   <?php
                                $i=0;
                                foreach ($showAllve as $ve) {
                                    $i++;
                                    $id = $ve['id'];
                                    $img="uploads/" .$ve['anh'];
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
                                    <td><?=$ve['điemdi']?></td>
                                    <td><?=$ve['diemden']?></td>
                                    <td><?=$ve['loaighe']?></td>
                                    <td><?=$ve['timestar']?></td>
                                    <td><?=$ve['timeend']?></td>
                                    <td><?=$ve['hanhly']?></td>
                                    <td><?=$ve['giaitri']?></td>
                                    <td><?=$ve['xuatan']?></td>
                                    <td><?=$ve['loaimaybay']?></td>
                                    <td>
                                        <a href="<?=$linkdel?>"><i class="fa fa-trash mr-3" onclick="return checkDelete()"></i></a>
                                        <a href="<?=$linkedit?>"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                              <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>