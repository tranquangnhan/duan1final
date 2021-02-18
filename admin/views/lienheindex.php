<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 text-dark mt-3">
                    <h2>Liên Hệ</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Liên Hệ</a></li>
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
                                    <th width="5%">ID</th>
                                    <th width="10%">Họ Tên</th>
                                    <th width="25%">Địa Chỉ</th>
                                    <th width="15%">Email</th>
                                    <th width="40%">Nội Dung</th>
                                    <th width="5%">Hàng Động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($showAllLienhe as $lh) { 
                                    $linkdel = "index.php?ctrl=lienhe&act=del&iddel=".$lh['id'];
                                    ?>
                                
                                <tr>
                                    <td><?=$lh['id']?></td>
                                    <td><?=$lh['hovaten']?></td>
                                    <td><?=$lh['diachi']?></td>
                                    <td><?=$lh['email']?></td>
                                    <td><?=$lh['noidung']?></td>
                                    <td>
                                        <a onclick='checkDelete("<?=$linkdel?>")'><i class="fa fa-trash mr-3"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
