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
                            <h3 class="mt-4 text-center">THÊM Khách Hàng</h3>
                            <p class="text-center">Bạn có thể thêm khách hàng ở đây!</p>


                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên User</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenuser" id="" class="form-control" placeholder="Tên User" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Pass</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="pass" id="" class="form-control" placeholder="Nhập Mật Khẩu" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Vai Trò</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="vaitro" id="" required>
                                        <option selected value="">Vai Trò</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Sub-Admin</option>
                                        <option value="3">Khách Hàng</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Kích Hoạt</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="kichhoat" id="" class="form-control" placeholder="Nhập 1->2 ">
                                </div>
                            </div>
                            <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for=""><strong>Ngày Sinh</strong></label>
                                    </div>
                                    <div class="col-lg-9">
                                    <input class="form-control" name="tgdi" type="date" value="" id="">                                    </div>
                                </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Số Điên Thoại</strong></label>
                                </div>
                          <div class="col-lg-9">

                                    <input type="number" name="sodienthoai" id="" class="form-control" placeholder="Nhập Số Điên Thoại" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Địa Chỉ</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="diachi" id="" class="form-control" placeholder="Địa Chỉ" aria-describedby="helpId" required>
                                </div>
                            </div>
                      
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thành Phố</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="thanhpho" id="" class="form-control" placeholder="Thành Phố" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Quốc Gia</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="quocgia" id="" class="form-control" placeholder="Quốc Gia" aria-describedby="helpId" >
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tích Điểm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="tichdiem" id="" class="form-control" placeholder="Điểm Tích Lũy" aria-describedby="helpId" >
                                </div>
                            </div>  <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Randomkey</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="randomkey" id="" class="form-control" placeholder="Randomkey" aria-describedby="helpId" >
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
                                                <input type="submit" name="them" id="" value="Thêm User"
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