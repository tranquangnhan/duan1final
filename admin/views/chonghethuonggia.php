<div class="col-lg-9 ml-3">
    <main class="">
            <div class="text-center">
                <div class="row w-100 mr-0 pd-tb-100px background-cl-3">
                    <div class="l-ghe-may-bay">
                        <div class="title cl-te-black fa-w-12 fz-12vw fw-700 opacity-0p7">Sửa Chổ Ngồi</div>
                        <div class="l-chu-thich">
                            <div class="row">
                                <input type="hidden" id="idcb" value="<?=$idChuyenBay?>">
                                <div class="l-box-room-bg-none">
                                    <div class="l-color-thuong-gia l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Thương gia trống</div>
                                </div>
                                <div class="l-box-room-bg-none mr-0">
                                    <div class="l-color-pho-thong l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Phổ thông trống</div>
                                </div>
                                <div class="l-box-room-bg-none">
                                    <div class="l-color-da-chon l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã chọn</div>
                                </div>
                                <div class="l-box-room-bg-none mr-0">
                                    <div class="l-color-co-nguoi-dat l-css-box-color d-inline-block "></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã có người</div>
                                </div>
                            </div>
                        </div>
                        <div class="l-chu-thich-fixed">
                            <div class="row">
                                <div class="l-box-room-bg-none">
                                    <div class="l-color-thuong-gia l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Thương gia trống</div>
                                </div>
                                <div class="l-box-room-bg-none mr-0">
                                    <div class="l-color-pho-thong l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Phổ thông trống</div>
                                </div>
                                <div class="l-box-room-bg-none">
                                    <div class="l-color-da-chon l-css-box-color d-inline-block"></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã chọn</div>
                                </div>
                                <div class="l-box-room-bg-none mr-0">
                                    <div class="l-color-co-nguoi-dat l-css-box-color d-inline-block "></div>
                                    <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã có người</div>
                                </div>
                            </div>
                        </div>
                        <div class="l-thuonggia text-center">
                            <div class="l-loi-thoat">
                                <div class="row">
                                    <div class="l-box-room l-wc-trenmaybay">
                                        <i class="fas fa-restroom"></i>
                                    </div>
                                    <div class="l-box-room l-wc-trenmaybay mr-0">
                                        <i class="fas fa-restroom"></i>
                                    </div>
                                    <div class="l-loi-thoat-left">
                                        <p><i class="fas fa-caret-left"></i> LỐI THOÁT HIỂM</p>
                                    </div>
                                    <div class="l-loi-thoat-right">
                                        <p>LỐI <i class="fas fa-caret-right"></i> THOÁT HIỂM </p>
                                    </div>
                                </div>
                            </div>
                            <div id="kq">
                                <?php print_r(json_decode($soGheThuongGia)->html);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        <div class="row mt-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-9 ">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <a href="index.php?ctrl=loaihang&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                        </div>
                    </div>
                    <div class="col-lg-5 pr-2 mr-2">
                        <div class="form-group">
                            <input type="submit" name="them" id="tieptucthuonggia" value="Sửa Chỗ Ngồi"
                                class="btn btn-submit text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
</div>
