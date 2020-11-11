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
                                                
                                                <th >Mã Hóa Đơn</th>
                                                <th >Họ Tên Khách Hàng</th> 
                                                <th>Ngày Đặt Vé</th>
                                                <th>Trạng Thái</th>
                                                <th>Mã Khách Hàng</th> 
                                         
                                            </tr>
                                        </thead>

                                        <tbody id="result">
                                                   <?php
                                $i=0;
                                foreach ($showallhd as $hd) {
                                    $i++;
                                 $id=$hd['id'];
                                    $linkdel = "index.php?ctrl=hoadon&act=del&iddel=".$id;
                                    $linkedit = "index.php?ctrl=hoadon&act=add&idedit=".$id;        
                                ?>
                                <tr>
                                    <td><?=$i?></td>  
                                    <td><?=$hd['id']?></td>
                                    <td><?=$hd['hotenkh']?></td>
                                    <td><?=$hd['ngaydatve']?></td>
                                    <td><?=$hd['trangthai']?></td>
                                    <td><?=$hd['idkh']?></td>
                                    
                    
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