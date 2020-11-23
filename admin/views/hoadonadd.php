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
                            <h3 class="mt-4 text-center">THÊM Hóa Đơn</h3>
                            <p class="text-center">Bạn có thể thêm hóa đơn ở đây!</p>
                                <div class="row ">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Tên Khách Hàng</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="hotenkh" id="" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Ngày Đặt Vé</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="datetime-local" name="ngaydatve" id="" class="form-control" aria-describedby="helpId" required>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Mã Khách Hàng</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                        <select class="custom-select form-control" name="makh" id="" >
                                            <option selected value="">Chọn </option>
                                            <?php
                                            foreach ($showkh as $kh) {
                                                $kq = '<option value="">' . $kh['user'] . '</option>';
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
                                            <option selected value="">Chọn </option>
                                            <option value="0">Mới Order</option>
                                            <option value="1">Thanh Toán </option>
                                            <option value="2">Hủy</option>
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
                                                    <input type="submit" name="them" id="" value="Thêm Hóa Đơn" class="btn btn-submit text-center">
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
