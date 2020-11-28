<div class="col-lg-9 mt-5 boxdatve">
    <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Một Chiều</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Khứ Hồi</button>
    </div>

    <div id="London" class="tabcontent">
        <form action="" method="get">
            <div class="row mt-4">
            <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="mt-4"><i class="fas fa-plane-departure"></i> Điểm đi</h6>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                            <label for=""></label>
                            <select class="form-control" name="diemdi" id="">
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
                            <select class="form-control" name="diemden" id="">
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
                                <input type="date"
                                class="form-control" name="ngaydi" id="" value="25-11-2020" aria-describedby="helpId" placeholder="">
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
                                <select class="form-control" name="loaighe" id="">
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
                                class="form-control" name="nguoilon" id="" value="1" aria-describedby="helpId" placeholder="1">
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
                                class="form-control" name="treem" id="" value="0" aria-describedby="helpId" placeholder="1">
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
                                class="form-control" name="embe" id="" value="0" aria-describedby="helpId" placeholder="1">
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
    <form action="" method="get">
        <div class="row mt-4">
            <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <h6 class="mt-4"><i class="fas fa-plane-departure"></i> Điểm đi</h6>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                            <label for=""></label>
                                <select class="form-control" name="diemdi" id="">
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
                                <select class="form-control" name="diemden" id="">
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
                                <input type="date"
                                class="form-control" name="ngaydi" id="" aria-describedby="helpId" placeholder="">
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
                                <input type="date"
                                class="form-control" name="ngayve" id="" aria-describedby="helpId" placeholder="">
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
                                <select class="form-control" name="loaighe" id="">
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
                                class="form-control" name="nguoilon" id="" value="1" aria-describedby="helpId" placeholder="1">
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
                                class="form-control" name="treem" id="" value="0" aria-describedby="helpId" placeholder="1">
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
                                class="form-control" name="embe" id="" value="0" aria-describedby="helpId" placeholder="1">
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
