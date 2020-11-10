div class="col-lg-9">
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
                            <div class="row">

                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="views/img/avt.png" alt="">
                                    <input type="file" class="form-control-file" name="img[]" id="" placeholder="" required multiple>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Máy Bay</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenmaybay" id="" class="form-control" placeholder="Tên Máy Bay" aria-describedby="helpId" required>
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
                                            $kq = '<option value="' . $dm['id'] . '">' . $dm['name'] . '</option>';
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
                                    <input type="number" name="gia" id="" class="form-control" placeholder="Giá Tiền" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giảm Giá</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" type="number" name="giamgia" value="" id="">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Điểm Đi</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="diemdi" id="diemdi" required>
                                        <option selected value="">Chọn </option>
                                        <option value="0">Hồ Chí Minh</option>
                                        <option value="1">Hà Nội</option>
                                        <option value="2">Đà Nẵng</option>

                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Điểm Đến</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="diemdi" id="diemdi" required>
                                        <option selected value="">Chọn </option>
                                        <option value="0">Hồ Chí Minh</option>
                                        <option value="1">Hà Nội</option>
                                        <option value="2">Đà Nẵng</option>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thời Gian Đi</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" name="tgdi" value="" id="" >
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thời Gian Đến</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" name="tgden" value="" id="">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Hành Lý</strong></label>
                                </div>
                                <div class="col-lg-9 d-flex">
                                    <div class="form-check mr-4">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="hanhly" value="0" id="" checked>
                                            7KG
                                        </label>
                                    </div>
                                    <div class="form-check mr-4">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="hanhly" value="1" id="">
                                            14KG
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="hanhly" value="2" id="">
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
                                    <input type="radio" name="xuatan" value="1" id="" class="form-check-input" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Loại Máy Bay</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="loaimaybay" id="loaimaybay">
                                        <option selected value="">Chọn </option>
                                        <option value="0">Vietnam Airlines</option>
                                        <option value="1">Viet Jet</option>
                                        <option value="2">Bamboo</option>
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