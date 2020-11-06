<?php
if(is_array($showspedit)){
function checked($temp){
    if($temp == 1){
        $temp = 'checked';
    }else{
        $temp = '';
    }
    return $temp;
}
$id = $showspedit['id'];
$name = $showspedit['name'];
$img = $pathimg.$showspedit['img'];
if(is_file($img)){
    $img = $img;
}else{
    $img = "nothing...";
}
$namsanxuat = $showspedit['namsanxuat'];
$gia = forMatTien($showspedit['gia']);
$giamgia = $showspedit['giamgia'];
$nhienlieu = $showspedit['nhienlieu'];
if($nhienlieu == "Điện") $dien = "checked";else $dien= "";
if($nhienlieu == "Dầu") $dau = "checked";else $dau= "";
if($nhienlieu == "Xăng") $xang = "checked";else $xang="";
$chongoi = $showspedit['chongoi'];
$maylanh = checked($showspedit['maylanh']);
$bocungphanh = checked($showspedit['bocungphanh']);
$trodien = checked($showspedit['trodien']);
$tuikhi = checked($showspedit['tuikhi']);
$daucd = checked($showspedit['daucd']);
$noibat = checked($showspedit['noibat']);
$luotxem = $showspedit['luotxem'];
$soluong = $showspedit['soluong'];
$video = $showspedit['video'];
$anhien = checked($showspedit['anhien']);

$mota = $showspedit['mota'];

?>
<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>SỬA SẢN PHẨM</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                        <li class="breadcrumb-item"><a href="#">Sửa</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white border pb-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="mt-4 text-center">SỬA SẢN PHẨM</h3>
                            <p class="text-center">Bạn có thể thêm sản phẩm ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="<?=$img?>" alt="" width="200" height="200" class="img-edit">
                                    <input type="file" class="form-control-file" name="img[]" id="" placeholder="" 
                                    multiple>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Loại Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select" name="iddm" id="" required>
                                            <?php
                                            $showDm = '';
                                            foreach ($showdmsp as $dm) {
                                                $sl = "selected";
                                                $iddm = $showspedit['iddm'];
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
                                    <label for=""><strong>Tên Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="name" value="<?=$name?>" id="" class="form-control" placeholder="Jhon Doe"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Năm Sản Xuất</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" name="date" value="<?=$namsanxuat?>" id="example-date-input">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giá</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="gia" id="" value="<?=floatVal($gia)?>" class="form-control" placeholder="Nhập Giá Sản Phẩm"
                                    required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Nhập Giảm Giá</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="giamgia" id="" value="<?=floatVal($giamgia)?>" class="form-control"
                                    placeholder="Nhập Giảm Giá Sản Phẩm" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Nhiên Liệu</strong></label>
                                </div>
                                <div class="col-lg-9 d-flex">
                                    <div class="form-check mr-4">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="0" id="" <?=$xang?>>
                                        Xăng
                                      </label>
                                    </div>
                                    <div class="form-check mr-4">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="1" id=""  <?=$dau?>>
                                        Dầu
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="2" id="" <?=$dien?> >
                                        Điện
                                      </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Số Lượng</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="soluong" id="" value="<?=$soluong?>" class="form-control" placeholder="Số Lượng"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Video Giới Thiệu</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="video" id="" value="<?=$video?>" class="form-control" placeholder="Video Giới Thiệu"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for=""><strong>Chỗ Ngồi</strong></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="chongoi" value="<?=$chongoi?>" id="" class="form-control" placeholder="Chỗ Ngồi"
                                                aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for=""><strong>Lượt Xem</strong></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" name="luotxem" value="<?=$luotxem?>" id="" class="form-control" placeholder="Lượt Xem"
                                                aria-describedby="helpId" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mô Tả</strong></label>
                                </div>
                                <div class="col-lg-9">
                                      <textarea class="form-control" name="mota" id="editor1" rows="3" placeholder="Mô Tả" required><?=$mota?></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thuộc Tính</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Máy Lạnh 
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="maylanh" id=""<?=$maylanh?>>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Bo Cứng Phanh
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="bocungphanh" id=""<?=$bocungphanh?>>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Trợ Điện 
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="trodien" id="trodien" <?=$trodien?>>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Túi Khí 
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="tuikhi" id="" <?=$tuikhi?>>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Đầu CD
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="daucd" id="" <?=$daucd?>>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Nổi Bật
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="noibat" id="" <?=$noibat?>>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            Ẩn Hiện
                                            <input type="checkbox" class="form-check-input ml-2" value="1" name="anhien" id="" <?=$anhien?>>
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
                                                <a href="index.php?ctrl=hanghoa&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="sua" id="" value="Sửa Sản Phẩm"
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
<?php }else{echo "không có sản phẩm này";}?>



