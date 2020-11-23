<div class="col-lg-9">
                    <div class="container-fluid">
                        <div class="row d-flex justify-content-between mt-3">
                            <div class="col-lg-4 text-dark mt-3">
                                <h2>Binhf Luận</h2>
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
                                                <th >IDKH</th>
                                                <th>ID Bài Viết</th>
                                                <th>Nội Dung</th>
                                                <th>Star</th>
                                                <th>Trạng Thái</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                        
                                            <?php 
                                                foreach ($showbl as $bl) {  
                                                    $id = $bl['id'];
                                                    $makh = $bl['idkh'];
                                                    $star = $bl['star'];
                                                    $mabaiviet = $bl['idbaiviet'];  
                                                    $noidung = $bl['noidung'];
                                                    $anhien = $bl['trangthai'];
                                                    if($anhien == 1){
                                                        $anhien = 'checked';
                                                    }else{
                                                        $anhien ='onclick="return false"';
                                                    }    
                                                    $linkdel = "index.php?ctrl=binhluan&act=del&iddel=".$id;
                                                    $linkedit = "index.php?ctrl=binhluan&act=edit&idedit=".$id;
                                                    ?>
                                                <tr>
                                                    <td><strong><?=$id?></strong></td>
                                                   <td><strong><?=showTenKh($bl['idkh'])?></strong></td>
                                                   <td><strong><?=showTenbv($bl['idbaiviet'])?></strong></td>
                                              
                                                    <td><?=$noidung?></td>   
                                                    <td><?=$star?></td>   
                                                    <td><?= ($anhien==1)? "Dang hien":"dang an"; ?></td>
                                                  
                                                                                          
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