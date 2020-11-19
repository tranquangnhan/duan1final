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
                                                <th width="100">Ảnh</th>
                                                <th width="200">Tên Sản Phẩm</th>
                                                <th>Tác Giả</th>
                                                <th width="450">Nội Dung</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <?php foreach ($showAllBlog as $motbl) {
                                                    $id = $motbl['id'];
                                                    $img = $pathimg.$motbl['img']; //Long test file img
                                                    if(is_file($img)) $img = $img;else $img = "nothing";
                                                    $anhien = $motbl['public'];
                                                    if($anhien == 1){
                                                        $anhien = 'checked';
                                                    }else{
                                                        $anhien ='onclick="return false"';
                                                    }   
                                                    $linkdel = "index.php?ctrl=baiviet&act=del&iddel=".$id;
                                                    $linkedit = "index.php?ctrl=baiviet&act=add&idedit=".$id;         
                                                ?>
                                                <tr>
                                                    <td><?=$motbl['id']?></td>
                                                    <td width="100"><img width="100" src="<?=$img?>"></td>
                                                    <td class="ten" width="200"><a href="<?=$linkedit?>"><?=substr($motbl['name'],0,52)?><input type="radio" <?=$anhien?>></a> </td>
                                                    <td><?=$motbl['tacgia']?></td>
                                                    <td class="noidung"><?=substr($motbl['noidung'],0,100)?></td>
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