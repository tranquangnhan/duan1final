<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-6 text-dark mt-3">
                <h2>DANH MỤC SẢN PHẨM</h2>
            </div>
            <div class="col-lg-3 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh Mục</a></li>
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
                                <th width="200">#</th>
                                <th width="400">Tên Danh Mục</th>
                                <th width="300">Ẩn Hiện</th>
                                <th width="300">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=0;
                                foreach ($showAllDm as $motdm) {
                                    $i++;
                                    $id = $motdm['id'];
                                    $anhien = $motdm['anhien'];
                                    if($anhien == 1){
                                        $anhien = 'checked';
                                    }else{
                                        $anhien ='onclick="return false"';
                                    }
                                    $linkdel = "index.php?ctrl=loaihang&act=del&iddel=".$id;
                                    $linkedit = "index.php?ctrl=loaihang&act=add&idedit=".$id;        
                                ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$motdm['name']?></td>
                                    <td><input type="radio" <?=$anhien?>> </td>
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