<div class="col-lg-10">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-4 text-dark mt-3">
                <h2>Liên Hệ</h2>
            </div>
            <div class="col-lg-3 mt-3">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-lg-12 bg-white pb-4 border">
                <div class="row d-flex justify-content-center">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr>
                                <th width="15%">Họ Tên</th>
                                <th width="25%">Địa Chỉ</th>
                                <th width="15%">Email</th>
                                <th width="45%">Nội Dung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($showAllLienhe as $lh) { ?>
                            <tr>
                                <th><?=$lh['hovaten']?></th>
                                <th><?=$lh['diachi']?></th>
                                <th><?=$lh['email']?></th>
                                <th><?=$lh['noidung']?></th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
