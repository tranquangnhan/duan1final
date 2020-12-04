
<?php
function checked($temp){
    if($temp == 1){
        $temp = 'checked';
    }else{
        $temp = '';
    }
    return $temp;
}
$anhien = checked($showspedit[0]['public']);
$img = $pathimg.$showspedit[0]['img'];
if(is_file($img)){
    $img = $img;
}else{
    $img = "nothing...";
}
?>
<div class="col-lg-10">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>SẢN PHẨM</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài Viết</a></li>
                        <li class="breadcrumb-item"><a href="#">Thêm </a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-11">
                            <h3 class="mt-4 text-center">SỬA BÀI VIẾT</h3>
                            <p class="text-center">Bạn có thể sửa bài viết ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh bài viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="<?=$img?>" alt="" width="200" height="200" class="img-edit">    
                                    <input type="text" class="form-control d-none" name="avatar" id="avatar" value="<?=$showspedit[0]['img'];?>">                                
                                    <input type="file" class="form-control-file" name="avatar1[]" id="avatar1" multiple
                                    multiple>
                                </div>
                            </div>
                            <div class="row mt-4 l-mr-t-40px">
                                <div class="col-lg-3">
                                    <label for=""><strong>Danh Mục Bài Viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="iddanhmuc" id="danhmuc" required>
                                        <?php
                                            $showDm = '';
                                            foreach ($showdmbv as $dm) {
                                                $sl = "selected";
                                                $iddm = $showspedit[0]['iddm'];
                                        
                                                if($dm['id'] == $iddm){
                                                    $showDm .= '<option value="'.$dm['id'].'"'.$sl.'>'.$dm['name'].'</option>';
                                                }
                                                else{
                                                    $showDm .= '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                                                }
                                            }
                                            echo $showDm;    
                                        ?>    
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tiêu Đề Bài Viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Jhon Doe"
                                        aria-describedby="helpId" required value="<?=strip_tags($showspedit[0]['name'])?>">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Nội Dung</strong></label>
                                </div>
                                <div class="col-lg-9">
                                      <textarea class="form-control" name="content" id="editor1" rows="3" placeholder="Mô Tả" required><?=$showspedit[0]['noidung']?></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mô Tả</strong></label>
                                </div>
                                <div class="col-lg-9">
                                      <textarea class="form-control" name="mota" rows="3" placeholder="Mô Tả" required><?=strip_tags($showspedit[0]['mota'])?></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>tag</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tag" id="tag" value="<?=$showspedit[0]['tag']?>" class="form-control" placeholder="xedep,xexin"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            Ẩn Hiện
                                            <input type="checkbox" class="form-check-input ml-2" id="is_public" name="is_public" value="1" <?=$anhien?>>
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
                                            <a href="index.php?ctrl=baiviet&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="submit" id="" value="Sửa Bài Viết"
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