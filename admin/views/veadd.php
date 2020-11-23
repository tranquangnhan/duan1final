<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>VÉ MÁY BAY</h2>
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
                            <h3 class="mt-4 text-center">THÊM CHUYẾN BAY</h3>
                            <p class="text-center">Bạn có thể thêm chuyến bay ở đây!</p>
                             
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Chọn Máy Bay</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="idmaybay" id="">
                                        <option selected value="">Chọn </option>
                                        <?php foreach ($dsMayBay as $motmb) {
                                            echo '<option value="'.$motmb['id'].'">'.$motmb['name'].'</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tuyến bay</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="idtuyenduong" id="">
                                        <option selected value="">Chọn </option>
                                        <?php foreach ($tuyenBay as $mottb) {
                                            echo '<option value="'.$mottb['id'].'">'.showNameSb($mottb['iddiemdi']). " - " . showNameSb($mottb['iddiemden']).'</option>';
                                       } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giá tiền ghế thương gia</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="giavethuonggia" id="" class="form-control"
                                        placeholder="Giá Tiền Ghế Thương Gia" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giá tiền ghế thường</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="giavethuong" id="" class="form-control"
                                        placeholder="Giá Tiền Ghế Thường" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ngày Bay</strong></label>
                                </div>
                                <div class="col-lg-9">
                                <input class="form-control" type="date" name="ngaybay" value="2020-11-19" id="example-date-input">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thời Gian Đi</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" name="tgdi" type="time" value="13:45:00" id="">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thời Gian Đến</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input class="form-control" name="tgden" type="time" value="13:45:00" id="">
                                </div>
                            </div>
                         
                            <div class="row mt-5">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-9 ">
                                    <div class="row d-flex justify-content-end">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <a href="index.php?ctrl=loaihang&act=index"> <input type="button"
                                                        name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="them" id="" value="Thêm Vé"
                                                    class="btn btn-submit text-center">
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
