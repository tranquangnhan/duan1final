<?php
if (is_array($showhdedit)) {
$id=$showhdedit['id'];
$hotenkh = $showhdedit['hotenkh'];
$ngaydatve = $showhdedit['ngaydatve'];
$trangthai = $showhdedit['trangthai'];
$makh = $showhdedit['idkh'];

if ($trangthai = 0 || $trangthai  = 1 || $trangthai  = 2) {
    $chontt = "selected";
} else $chontt = ""; 
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
                            <h3 class="mt-4 text-center">THÊM Vé</h3>
                            <p class="text-center">Bạn có thể thêm vé ở đây!</p>
                                <div class="row ">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Tên Khách Hàng</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="tenkh" value="<?= $hotenkh ?>" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Ngày Đặt Vé</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="datetime-local" name="ngaydat" value="<?= $ngaydatve ?>" class="form-control" placeholder="Tên Máy Bay" aria-describedby="helpId" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Khách Hàng</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="iddm" id="" >
                                            <option selected value="">Chọn </option>
                                            <?php
                                            foreach ($showkh as $kh) {
                                                $kq = '<option value="' . $dm['id'] . '">' . $dm['hotenkh'] . '</option>';
                                                echo $kq;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Trạng Thái</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="trangthai" id="trangthai" >
                                            <option <?= $chontt ?> value="">Chọn </option>
                                            <option <?= $chontt ?>>Thanh Toán </option>
                                            <option <?= $chontt ?>>Hủy</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <div class="row d-flex justify-content-end">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <a href="index.php?ctrl=hoadon&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 pr-2 mr-2">
                                                <div class="form-group">
                                                    <input type="submit" name="them" id="" value="Thêm Sản Phẩm" class="btn btn-submit text-center">
                                                </div>
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
<?php } else {
    echo "không có sản phẩm này";
} ?>