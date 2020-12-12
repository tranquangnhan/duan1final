<!-- <div class="col-lg-9 mt-5 "> -->
<div class="col-lg-10 text-center boxdatve ">
    <div class="col-lg-12 l-box-white">
        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Một Chiều</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Khứ Hồi</button>
        </div>

        <div id="London" class="tabcontent">
            <form action="" method="get" class="l-datve">
                <div class="row mt-4">
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-plane-departure"></i> Điểm đi</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                <select class="form-control diemdi" name="diemdi" id="diemdi">
                                    <option value="">Điểm Đi</option>
                                    <?php foreach ($showSanBay as $motsb) {
                                        echo '<option value='.$motsb['idsanbay'].'>'.$motsb['tensanbay'].'</option>';
                                    } ?>o;
                                </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-plane-arrival"></i> Điểm đến</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                <select class="form-control diemden" name="diemden" id="diemden">
                                    <option value="">Điểm Đi</option>
                                    <?php foreach ($showSanBay as $motsb) {
                                        echo '<option value='.$motsb['idsanbay'].'>'.$motsb['tensanbay'].'</option>';
                                    } ?>
                                </select>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                <div class="row mt-4">
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-walking"></i> Ngày Đi</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for=""></label>
                                    <!-- <input type="date"
                                    class="form-control" name="ngaydi" id="" value="" aria-describedby="helpId" placeholder=""> -->
                                    <input type="text" name="ngaydi" class="form-control ngaydi" id="ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-walking"></i> Loại Ghế</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="form-control loaighe" name="loaighe" id="loaighe">
                                        <option value="">Loại Ghế</option>
                                        <option value="1">Phổ Thông</option>
                                        <option value="2">Thương Gia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-male"></i> Người Lớn</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control nguoilon" name="nguoilon" id="nguoilon" value="1" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="mt-4"><i class='fas fa-child'></i> Trẻ Em</h6>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control treem" name="treem" id="treem" value="0" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="mt-4"><i class='fas fa-baby'></i> Em Bé</h6>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control embe" name="embe" id="embe" value="0" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 pr-2 mr-2">
                            <div class="form-group">
                                <input type="hidden" name="ctrl" id="" value="timve">
                                <button type="submit" name="act" id="" value="showve" class="btn btn-submit text-center">Tìm Vé</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
    
        </div>

        <div id="Paris" class="tabcontent">
        <form action="" method="get" class="l-datve_kh">
            <div class="row mt-4">
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-plane-departure"></i> Điểm đi</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                    <select class="form-control diemdi" name="diemdi" id="diemdi_kh">
                                        <option value="">Điểm Đi</option>
                                        <?php foreach ($showSanBay as $motsb) {
                                            echo '<option value='.$motsb['idsanbay'].'>'.$motsb['tensanbay'].'</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-plane-arrival"></i> Điểm đến</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                    <select class="form-control diemden" name="diemden" id="diemden_kh">
                                        <option value="">Điểm đến</option>
                                        <?php foreach ($showSanBay as $motsb) {
                                            echo '<option value='.$motsb['idsanbay'].'>'.$motsb['tensanbay'].'</option>';
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                <div class="row mt-4">
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-walking"></i> Ngày Đi</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text"
                                    class="form-control ngaydi" name="ngaydi" id="ngaydi_kh" aria-describedby="helpId" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-walking"></i> Ngày Về</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text"
                                    class="form-control ngayve" name="ngayve" id="ngayve_kh" aria-describedby="helpId" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-walking"></i> Loại Ghế</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="form-control loaighe" name="loaighe" id="loaighe_kh">
                                        <option value="">Loại Ghế</option>
                                        <option value="1">Phổ Thông</option>
                                        <option value="2">Thương Gia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                </div>
                <div class="row mt-4">

                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6 class="mt-4"><i class="fas fa-male"></i> Người Lớn</h6>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control nguoilon" name="nguoilon" id="nguoilon_kh" value="1" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="mt-4"><i class='fas fa-child'></i> Trẻ Em</h6>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control treem" name="treem" id="treem_kh" value="0" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-5">
                                <h6 class="mt-4"><i class='fas fa-baby'></i> Em Bé</h6>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                <label for=""></label>
                                <input type="text"
                                    class="form-control embe" name="embe" id="embe_kh" value="0" aria-describedby="helpId" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 pr-2 mr-2">
                            <div class="form-group">
                                <input type="hidden" name="ctrl" id="" value="timve">
                                <button type="submit" name="act" id="" value="showve" class="btn btn-submit text-center">Tìm Vé</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>
