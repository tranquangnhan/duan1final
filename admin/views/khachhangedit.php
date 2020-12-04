<?php if(is_array($showkhedit)){
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
                            <h3 class="mt-4 text-center">THÊM Khách Hàng</h3>
                            <p class="text-center">Bạn có thể thêm khách hàng ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh Khách Hàng</strong></label>
                                </div>
                               
                                <div class="col-lg-9">
                                    <img width="200" src=" <?=$pathimg.$showkhedit['avatar']?>" alt="">
                                    <input type="file" class=" mt-3 form-control-file" name="avatar1[]" id="avatar1" multiple >
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Khách Hàng</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenkh" id="" value="<?=$showkhedit['tenKH']?>" class="form-control" placeholder="Tên Khách Hàng" aria-describedby="helpId" required>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tên Đăng Nhập</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tenuser" id="" value="<?=$showkhedit['user']?>" class="form-control" placeholder="Tên Đăng Nhập" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Giới Tính</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <select class="form-control" name="gioitinh" id="" required>
                                            <option value="" selected>Chọn</option>
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                            <option value="2">Khác</option>
                                        </select>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mật Khẩu</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="pass" value="<?=$showkhedit['pass']?>" id="" class="form-control" placeholder="Nhập Mật Khẩu" required>
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
                                    <label for=""><strong>Email</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="email" name="email" id="" value="<?=$showkhedit['email']?>" class="form-control" placeholder="Địa Chỉ" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Số Điên Thoại</strong></label>
                                </div>
                                <div class="col-lg-9">

                                    <input type="number" name="sodienthoai" id="" value="<?=$showkhedit['sodienthoai']?>" class="form-control" placeholder="Nhập Số Điên Thoại" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Địa Chỉ</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="diachi" id="" value="<?=$showkhedit['diachi']?>" class="form-control" placeholder="Địa Chỉ" aria-describedby="helpId" required>
                                </div>
                            </div>
                      
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Thành Phố</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="thanhpho" id="" class="form-control" value="<?=$showkhedit['thanhpho']?>" placeholder="Thành Phố" aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tích Điểm</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="number" name="tichdiem" id="" class="form-control" value="<?=$showkhedit['tichdiem']?>" placeholder="Điểm Tích Lũy" aria-describedby="helpId" >
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
                                                <input type="submit" name="them" id="" value="Sửa Khách Hàng"
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
<?php 
}else{
    echo 'không có khách hàng này';  
}
?>