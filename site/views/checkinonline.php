<div class="padding-tb-40px background-light-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
  

                    <div class="bg-white border border-grey-1 padding-30px margin-tb-30px">
                        <div class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">
                            Nhập thông tin đặt vé:
                        </div>

                        <div class="pdt10px">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="name">Nhập Mã Vé</label>
                                        <input type="number" class="form-control" id="checkin">
                                    </div>
                                <button type="submit" class="btn btn-primary" name="checkin">Xem Thông Tin</button>
                              
                            </form>
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
                                        <span class="mr-30px">Điểm đi: <?= showdiemdi(showiddiemdi(showidtuyenduong($tt['idchuyenbay'])))?> </span> Điểm đến: <?= showdiemdi(showiddiemden(showidtuyenduong($tt['idtuyenduong'])))?>
                                    </a>
                                </h3>

                                <small class="mt10px text-extra-small mr-30px uppercase">
                                <a href="#" class="text-grey-4">
                                    <i class="fa fa-chevron-up mr-5px">
                                      
                                    </i>
                                    Ngày đi: 
                                    <span class="red mr-5px">
                                           <?=showngaydi($tt['idchuyenbay'])?>   
                                    </span>
                                </a>
                            </small>

                                <small class="mt-10px text-extra-small mr-30px uppercase">
                                <a href="#" class="text-grey-4">
                                    <i class="fa fa-chevron-down mr-5px">
                                      
                                    </i>
                                    Giờ Đi: 
                                    <span class="red mr-5px">
                                    <?=showgiodi($tt['idchuyenbay'])?>   
                                    </span>
                                </a>
                            </small>
                            <a href="#" class="text-grey-4">
                                    <i class="fa fa-chevron-down mr-5px">
                                      
                                    </i>
                                    Giờ Đến: 
                                    <span class="red mr-5px">
                                    <?=showgioden($tt['idchuyenbay'])?>   
                                    </span>
                                </a>
                            </small>
                                
                            </div>
                        </div>


                    </div>
   <?php }   ?>

                </div>


            </div>
        </div>
    </div>
</div>