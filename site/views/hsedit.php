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
           <?php if(is_array($showkhedit)){
                      
                    $ten  = $showkhedit['user'] ; 
                    $id = $showkhedit['id'];  
                    $email= $showkhedit['email'];
                    $sdt=$showkhedit['sodienthoai'];
                    $diachi=$showkhedit['diachi'];
                    $thanhpho=$showkhedit['thanhpho'] ;
                
                ?>
    <div class="col-md-6 m-auto stretch-card ">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Chỉnh Sửa Hồ Sơ</h4>
                <p class="card-description"> Chỉnh sửa hồ sơ </p>
                <form class="forms-sample " method="post" enctype="multipart/form-data">
         
                       
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tên</label>
                            <input type="text" name="ten" class="form-control" value="<?=$ten?>" id="exampleInputUsername1" placeholder="Tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" name="email" class="form-control" value="<?= $email?>" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số Điện Thoại</label>
                            <input type="number" name="sdt" class="form-control" value="<?= $sdt?>" id="exampleInputPassword1" placeholder="Số Điện Thoại">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Địa Chỉ</label>
                            <input type="text" name="diachi" class="form-control" value="<?=$diachi ?>" id="exampleInputConfirmPassword1" placeholder="Địa Chỉ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Thành Phố</label>
                            <input type="text" name="thanhpho" class="form-control" value="<?=$thanhpho?>" id="exampleInputConfirmPassword1" placeholder="Địa Chỉ">
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                   
                    <input type="submit" name="sua" class="btn btn-gradient-success mr-2" value="Submit">
                    
                </form>
            </div>
        </div>
    </div>
     <?php } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>