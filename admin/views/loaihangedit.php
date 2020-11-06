<?php
if(is_array($showDmedit)){
$name = $showDmedit['name'];
$thutu = $showDmedit['thutu'];
 if($showDmedit['anhien']==1) $anhien = 'checked';else $anhien = '';
?>
<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>DANH MỤC</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh Mục</a></li>
                        <li class="breadcrumb-item"><a href="#">Sửa</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="mt-4 text-center">SỬA DANH MỤC</h3>
                            <p class="text-center">Bạn có thể sửa danh mục ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Danh Mục</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="name" id="" class="form-control" value="<?=$name?>" placeholder="Tên Danh Mục"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thứ Tự</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="thutu" id=""  value="<?=$thutu?>" class="form-control" placeholder="Nhập Thứ Tự"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ẩn Hiện</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                    <label class="form-check-label">
                                    Hiện ?
                                        <input type="checkbox" value="1" class="ml-2 form-check-input" name="anhien" id="" <?=$anhien?>>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9 ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <a name="index.php?ctrl=loaihang&act=index" id=""  class="btn btn-cancel" href="index.php?ctrl=loaihang&act=index" role="button">Huỷ</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="sua" id="" value="Sửa Danh Mục"
                                                    class="btn btn-submit text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }else{
    echo "Danh Mục Này Không Có!";
}?>