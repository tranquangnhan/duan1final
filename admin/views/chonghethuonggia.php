 <div class="container text-center pt-5">
     <div class="title mb-3"><strong>Hàng ghế thương gia</strong></div>
        <div id="idmaybay"> <?php print_r(json_decode($soGheThuongGia)->idchuyenbay);
        ?></div>
        <div class="l-thuonggia text-center" id="kq">
        <?php print_r(json_decode($soGheThuongGia)->html);
        ?>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-9 ">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-5 pr-2 mr-2">
                        <div class="form-group">
                            <input type="submit" name="" id="xacnhan" value="Xác Nhận"
                                class="btn btn-submit text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    