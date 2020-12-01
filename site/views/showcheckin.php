<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="row no-gutters">
                            <div class="col-lg-4">
                                <div class="img">
                                    <img src="views/img/flight-4.jpg" alt="">
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Thông Tin Vé</h4>

                                        </div>

                                    </div>
                                </div>
                                <?php
                                foreach ($checkin as $tt) { ?>

                                    <div class="col-lg-8">
                                        <div class="padding-20px">
                                            <h3 class="uppercase text-medium font-weight-600">
                                                <a href="#" class="text-dark">
                                                    <span class="mr-30px">Điểm đi: <?= showidtuyenduong($tt['idchuyenbay']) ?> </span> Điểm đến: <?= showidtuyenduong($tt['idchuyenbay']) ?>
                                                </a>
                                            </h3>

                                            <small class="mt10px text-extra-small mr-30px uppercase">
                                                <a href="#" class="text-grey-4">
                                                    <i class="fa fa-chevron-up mr-5px">

                                                    </i>
                                                    Ngày đi:
                                                    <span class="red mr-5px">
                                                        <?= showngaydi($tt['idchuyenbay']) ?>
                                                    </span>
                                                </a>
                                            </small>

                                            <small class="mt-10px text-extra-small mr-30px uppercase">
                                                <a href="#" class="text-grey-4">
                                                    <i class="fa fa-chevron-down mr-5px">

                                                    </i>
                                                    Giờ Đi:
                                                    <span class="red mr-5px">
                                                        <?= showgiodi($tt['idchuyenbay']) ?>
                                                    </span>
                                                </a>
                                            </small>
                                            <a href="#" class="text-grey-4">
                                                <i class="fa fa-chevron-down mr-5px">

                                                </i>
                                                Giờ Đến:
                                                <span class="red mr-5px">
                                                    <?= showgioden($tt['idchuyenbay']) ?>
                                                </span>
                                            </a>
                                            </small>

                                        </div>
                                    </div>
                                
                            </div>



                        </div>
<?php }   ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

