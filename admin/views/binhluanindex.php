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
                                                <th width="200">Tên Sản Phẩm</th>
                                                <th width="100">Ảnh</th>
                                                <th>Tác Giả</th>
                                                <th width="450">Nội Dung</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <?php 
                                                foreach ($showBinhLuan as $motbl) {   
                                                    $id = $motbl['id'];
                                                    $spCmt = spCmt($motbl['idsp']);
                                                    $name = $spCmt['name'];
                                                    $img = $pathimg.$spCmt['img'];  
                                                    if(is_file($img)){
                                                        $img = $img;
                                                    }else{
                                                        $img = "nothing...";
                                                    }
                                                    $anhien = $motbl['trangthai'];
                                                    if($anhien == 1){
                                                        $anhien = 'checked';
                                                    }else{
                                                        $anhien ='onclick="return false"';
                                                    }    
                                                    $linkdel = "index.php?ctrl=binhluan&act=del&iddel=".$id;
                                                    $linkedit = "index.php?ctrl=binhluan&act=edit&idedit=".$id;
                                                    ?>
                                                <tr>
                                                    <td><strong><?=$motbl['id']?></strong></td>
                                                    <td><?=$name?> <input type="radio" <?=$anhien?> ></td>
                                                    <td><img width="100" src=" <?=$img?>" alt=""></td>
                                                    <td><strong><?=showTenKh($motbl['iduser'])?></strong></td>
                                                    <td><?=$motbl['noidung']?></td>                                         
                                                    <td><a href="<?=$linkdel?>"> <i onclick="return checkDelete()" class="fa fa-trash mr-2" aria-hidden="true"></i></a> <a href="<?=$linkedit?>"> <i class="fa fa-edit"></i></a></td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>