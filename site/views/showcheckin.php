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