<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">    
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 text-dark mt-3">
                    <h2>Bình Luận</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Bình Luận</a></li>
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
                                    <th width="10%">ID</th>
                                    <th width="10%">Khách Hàng</th>
                                    <th width="20%">Tên Bài Viết</th>
                                    <th width="40%">Nội Dung</th>
                                    <th width="10%">Star</th>
                                    <th width="10%">Trạng Thái</th>
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
                                        <td><input type="radio" <?=$anhien?>> </td>                     
                                        <td><a onclick='checkDelete("<?=$linkdel?>")'> <i  class="fa fa-trash mr-2" aria-hidden="true"></i></a> <a href="<?=$linkedit?>"> <i class="fa fa-edit"></i></a></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>