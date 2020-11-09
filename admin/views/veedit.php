<?php
if (is_array($showveedit)) {
    function checked($temp)
    {
        if ($temp == 1) {
            $temp = 'checked';
        } else {
            $temp = '';
        }
        return $temp;
    }
    // $mave = $showveedit['id'];
    $tenmaybay = $showveedit['tenmaybay'];
    $img = $pathimg . $showveedit['anh'];
    if (is_file($img)) {
        $img = $img;
    } else {
        $img = "nothing...";
    }
    $gia =  forMatTien($showveedit['gia']);
    $giamgia = forMatTien($showveedit['giamgia']);
    $iddm = $showveedit['iddm'];
    $xuatan = $showveedit['xuatan'];
    if ($xuatan == "1") $chon = "checked";
    else $chon = "";
    $diemdi = $showveedit['diemdi'];
    if ($diemdi = 0 || $diemdi = 1 || $diemdi = 2) {
        $chonddi = "selected";
    } else $chonddi = "";
    $diemden = $showveedit['diemden'];
    if ($diemden = 0 || $diemden = 1 || $diemden = 2) {
        $chondden = "selected";
    } else $chondden = "";
    $loaighe = $showveedit['loaighe'];
    if ($loaighe = 0 || $loaighe = 1 || $loaighe = 2) {
        $chonghe = "selected";
    } else $chonghe = "";
    if ($hanhly == "0") $chon = "checked";
    else $chonhl = "";
    if ($hanhly == "1") $chon = "checked";
    else $chonhl = "";
    if ($hanhly == "2") $chon = "checked";
    else $chon = "";
    $tgdi = $showveedit['timestar'];
    $tgden = $showveedit['timeend'];
    $iddm = $showveedit['iddm'];
    $loaimaybay = $showveedit['loaimaybay'];
    if ($loaimaybay = 0 || $loaimaybay = 1 || $loaimaybay = 2) {
        $chonloaimaybay = "selected";
    } else $chonloaimaybay = "";
   
?>
    <div class="col-lg-9">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 mt-3">
                    <h2>SẢN PHẨM</h2>
                </div>
                <div class="col-lg-4 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
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
                            <div class="col-lg-8">
                                <h3 class="mt-4 text-center">Thêm Vé</h3>
                                <p class="text-center">Bạn có thể thêm vé ở đây!</p>
                                <div class="row">

                                    <div class="col-lg-3">
                                        <label for=""><strong>Ảnh Sản Phẩm</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <img src="<?= $img ?>" alt="" width="200" height="200" class="img-edit">
                                        <input type="file" class="form-control-file" name="img[]" id="" placeholder="" multiple>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Tên Máy Bay</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="tenmaybay" id="" class="form-control" placeholder="Tên Máy Bay" aria-describedby="helpId" value="<?= $tenmaybay ?>">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Danh Mục</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="iddm" id="" required>
                                            <option selected value="">Chọn </option>
                                            <?php
                                            foreach ($showdmve as $dm) {
                                                $kq = '<option value="' . $dm['iddm'] . '">' . $dm['name'] . '</option>';
                                                echo $kq;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Giá Tiền</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" value="<?= $gia ?>" name="gia" id="" class="form-control" placeholder="Giá Tiền" aria-describedby="helpId" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Giảm Giá</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" name="giamgia" value="<?= $giamgia ?>" id="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Điểm Đi</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="diemdi" id="diemdi" required>
                                            <option  <?=$chonddi?> >Chọn </option>
                                            <option <?=$chonddi?>>Hồ Chí Minh</option>
                                            <option <?=$chonddi?>>Hà Nội</option>
                                            <option <?=$chonddi?>>Đà Nẵng</option>

                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Điểm Đến</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="diemdi" id="diemdi" required>
                                            <option  <?=$chonden?>>Chọn </option>
                                            <option <?=$chonden?>>Hồ Chí Minh</option>
                                            <option  <?=$chonden?>>Hà Nội</option>
                                            <option  <?=$chonden?>>Đà Nẵng</option>
                                    </div>
                                </div>
                                <div class="row mt-4">`
                                    <div class="col-lg-3">
                                        <label for=""><strong>Thời Gian Đi</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" name="tgdi" value=" <?=$tgdi?>" id="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Thời Gian Đến</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" name="tgden" value=" <?=$tgden?>" id="">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Hành Lý</strong></label>
                                    </div>
                                    <div class="col-lg-9 d-flex">
                                        <div class="form-check mr-4">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="hanhly" value="0" id=""  <?=$chonhl?>>
                                                7KG
                                            </label>
                                        </div>
                                        <div class="form-check mr-4">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="hanhly" value="1" id=""<?=$chonhl?>>
                                                14KG
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="hanhly" value="2" id=""<?=$chonhl?>>
                                                20KG
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Giải Trí</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="giaitri" id="" class="form-control" placeholder="Giải Trí" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Xuất Ăn</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="radio"<?=$chon?> name="xuatan" id="" class="form-check-input" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Loại Máy Bay</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="loaimaybay" id="loaimaybay">
                                            <option   <?=$chonloaimaybay?>>Chọn </option>
                                            <option  <?=$chonloaimaybay?>>Vietnam Airlines</option>
                                            <option <?=$chonloaimaybay?>>Viet Jet</option>
                                            <option <?=$chonloaimaybay?>>Bamboo</option>
                                    </div>
                                </div>


                            </div>




                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } else {
    echo "không có sản phẩm này";
} ?>