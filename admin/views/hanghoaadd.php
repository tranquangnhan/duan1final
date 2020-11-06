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
                            <h3 class="mt-4 text-center">THÊM SẢN PHẨM</h3>
                            <p class="text-center">Bạn có thể thêm sản phẩm ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="views/img/avt.png" alt="">
                                    <input type="file" class="form-control-file" name="img[]" id="" placeholder="" required
                                    multiple>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Loại Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="iddm" id="" required>
                                        <option selected value="">Chọn </option>
                                        <?php 
                                            foreach ($showdmsp as $dm) {
                                                $kq = '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                                                echo $kq ;
                                            }         
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Sản Phẩm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="name" id="" class="form-control" placeholder="Jhon Doe"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Năm Sản Xuất</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" name="date" value="2020-10-07" id="example-date-input">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giá</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="gia" id="" class="form-control" placeholder="Nhập Giá Sản Phẩm"
                                    required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Nhập Giảm Giá</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="giamgia" id="" class="form-control"
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
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="0" id=""  checked>
                                        Xăng
                                      </label>
                                    </div>
                                    <div class="form-check mr-4">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="1" id=""  >
                                        Dầu
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="nhienlieu" value="2" id=""  >
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
                                    <input type="number" name="soluong" id="" class="form-control" placeholder="Số Lượng"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Video Giới Thiệu</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="video" id="" class="form-control" placeholder="Video Giới Thiệu"
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
                                            <input type="text" name="chongoi" id="" class="form-control" placeholder="Chỗ Ngồi"
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
                                            <input type="text" name="luotxem" id="" class="form-control" placeholder="Lượt Xem"
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
                                      <textarea class="form-control" name="mota" id="editor1" rows="3" placeholder="Mô Tả" required></textarea>
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
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="maylanh" id=""  checked>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Bo Cứng Phanh
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="bocungphanh" id=""  checked>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Trợ Điện 
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="trodien" id="trodien"  checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Túi Khí 
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="tuikhi" id=""  checked>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Đầu CD
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="daucd" id=""  checked>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                Nổi Bật
                                                <input type="checkbox" class="form-check-input ml-2" value="1" name="noibat" id=""  checked>
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
                                            <input type="checkbox" class="form-check-input ml-2" value="1" name="anhien" id="" checked>
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
                                                <input type="submit" name="them" id="" value="Thêm Sản Phẩm"
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