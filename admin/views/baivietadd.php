<!-- <div class="main-right">
                        <div class="boxcenter">
                            <p class="title">THÊM BÀI VIẾT</p>
                            <div class="boxshow">
                                <div class="danhmuc">
                                    <h4>ALL CATE</h4>
                                    <div class="danhmuc__icon">
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <i class="fa fa-gear"></i>
                                        <i class="fa fa-remove"></i>
                                    </div>
                                </div>
                                <div class="themsp">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <table>
                                                <tr>
                                                    <td colspan="2"><h3>Chọn Danh mục</h3></td>
                                                </tr>	
                                                <tr>
                                                    <td>
                                                        <select name="iddanhmuc" id="danhmuc" required>
                                                                <option value="">Choosee</option>

                                                                <?php 
                                                                    // foreach ($showAllDmBaiViet as $dm) {
                                                                    //     $kq = '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                                                                    //     echo $kq ;
                                                                    // }         
                                                                ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <td colspan="2"><h3>Ảnh đại diện</h3></td>
                                                <tr>
                                                    <td><input type="file" name="avatar[]" id="avatar" multiple required>
                                                    </td>
                                                </tr>
                                                <td colspan="2"><h3>Tiêu đề bài viết</h3></td>
                                                <tr>
                                                    <td><input type="text" name="title" id="title" class="input-title" placeholder="Nhập vào tiêu đề bài viết" required>
                                                    </td>
                                                </tr>
                                                <td colspan="2"><h3>Nội dung</h3></td>
                                                <tr>
                                                    <td><textarea name="content" id="editor1" rows="10" cols="80" required></textarea></td>
                                                </tr>
                                                <td colspan="2"><h3>Mô tả</h3></td>
                                                <tr>
                                                    <td>
                                                        <textarea name="mota"  rows="3" cols="130" required></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>tag: <input type="text" name="tag" id="tag" class="tag" placeholder="giay nam dep, giay nam gia re" required></td>
                                                </tr>
                                                <tr>
                                                    <td>Public bài viết ? : <input type="checkbox" id="is_public" name="is_public" value="1" checked> public</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="right"><input type="submit" name="submit" value="Thêm bài viết"></td>
                                                </tr>
                                            </table>
                                        </form>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> -->

    <div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 mt-3">
                <h2>Bài Viết</h2>
            </div>
            <div class="col-lg-4 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Bài Viết</a></li>
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
                        <div class="col-lg-11">
                            <h3 class="mt-4 text-center">THÊM BÀI VIẾT</h3>
                            <p class="text-center">Bạn có thể thêm bài viết ở đây!</p>
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for=""><strong>Ảnh bài viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <img src="views/img/avt.png" alt="">
                                    <input type="file" class="form-control-file" name="avatar[]" id="avatar" multiple required
                                    >
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Danh Mục Bài Viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom-select form-control" name="iddanhmuc" id="danhmuc" required>
                                        <option selected value="">Chọn </option>
                                        <?php 
                                            foreach ($showdmbv as $dm) {
                                                $kq = '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                                                echo $kq ;
                                            }         
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Tiêu Đề Bài Viết</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Jhon Doe"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Nội Dung</strong></label>
                                </div>
                                <div class="col-lg-9">
                                      <textarea class="form-control"name="content" id="editor1" rows="3" placeholder="Mô Tả" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>Mô Tả</strong></label>
                                </div>
                                <div class="col-lg-9">
                                      <textarea class="form-control" name="mota" rows="3" placeholder="Mô Tả" required></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-3">
                                    <label for=""><strong>tag</strong></label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" name="tag" id="tag" class="form-control" placeholder="Trải Nghiệm, Du Lịch"
                                        aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row mt-4">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            Ẩn Hiện
                                            <input type="checkbox" class="form-check-input ml-2" id="is_public" name="is_public" value="1" checked>
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
                                            <a href="index.php?ctrl=baiviet&act=index"> <input type="button" name="" id="" value="Huỷ" class="btn btn-cancel"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 pr-2 mr-2">
                                            <div class="form-group">
                                                <input type="submit" name="submit" id="" value="Thêm Bài Viết"
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