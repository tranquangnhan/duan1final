<div class="col-lg-10">
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
                                    <table class="table table-striped  w-100">
                                        <thead class="thead-inverse">
                                            <tr class="">
                                                <th>STT</th>
                                                <th>ID</th>
                                                <th >User</th>
                                                <th >role</th> 
                                                <th>Email</th>
                                                <th>Số Điện Thoại</th>
                                                <th>Địa Chỉ</th>
                                                <th>Thành Phố</th>
                                            </tr>
                                        </thead>

                                        <tbody id="result">
                                                   <?php
                                $i=0;
                                foreach ($showallkh as $kh) {
                                    $i++;
                                    $id=$kh['id'];
                                    if($kh['role'] === 0){
                                        $role= 'Admin';
                                    }elseif($kh['role'] === 1){
                                        $role= 'Sub Admin';
                                    }else{
                                        $role= 'Khách Hàng';
                                    }
                                    $linkdel = "index.php?ctrl=khachhang&act=del&iddel=".$id;
                                    $linkedit = "index.php?ctrl=khachhang&act=add&idedit=".$id;        
                                ?>
                                <tr>
                                    <td><?=$i?></td>  
                                    <td><?=$kh['id']?></td>
                                    <td><?=$kh['user']?></td>
                                    <td><?=$kh['role']?></td>
                                  
                                  
                                    <td><?=$kh['email']?></td>
                                    <td><?=$kh['sodienthoai']?></td>
                                    <td><?=$kh['diachi']?></td>
                                    <td><?=$kh['thanhpho']?></td>
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