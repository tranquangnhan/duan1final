<div class="col-lg-10">
    <div class="l-box-white">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3">
                <div class="col-lg-4 text-dark mt-3">
                    <h2>THỐNG KÊ</h2>
                </div>
                <div class="col-lg-3 mt-3">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Thống Kê</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <hr>
            <form id="form_baocao" class="pd-20px">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Chọn loại báo cáo: </label>
                            <div class="col-sm-6">
                                <select class="form-control" id="kieubaocao">
                                    <option value="">Chọn</option>
                                    <!-- <option value="doanhthu">Doanh thu</option> -->
                                    <option value="hangbay">Hãng bay</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <label for="colFormLabelSm" class="col-sm-4 col-form-label ">Chọn kiểu báo cáo: </label>
                            <div class="col-sm-6">
                                <select class="form-control" id="kieuchart">
                                    <option value="">Chọn</option> 
                                    <option value="polarArea">PolarArea</option>
                                    <option value="bar">Bar</option>
                                    <option value="pie">Pie</option>
                                    <option value="doughnut">Doughnut</option>
                                    <option value="line">Line</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="ngaybatdau_1">Từ</span>
                            </div>
                            <input type="text" class="form-control" name="ngaybatdau1" id="ngaybatdau1" placeholder="mm/dd/yy"> 
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="ngayketthuc_1">Đến</span>
                            </div>
                            <input type="text" class="form-control" name="ngayketthuc1" id="ngayketthuc1" placeholder="mm/dd/yy">
                        </div>
                    </div>
                    <div class="col-md-12 te-al-left mb-3 fz-20px">So sánh</div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="ngaybatdau_2">Từ</span>
                            </div>
                            <input type="text" class="form-control" name="ngaybatdau2" id="ngaybatdau2" placeholder="mm/dd/yy"> 
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="ngayketthuc_2">Đến</span>
                            </div>
                            <input type="text" class="form-control" name="ngayketthuc2" id="ngayketthuc2" placeholder="mm/dd/yy">
                        </div>
                    </div>
                </div>
                <div class="w-100 text-right">
                    <button type="submit" id="showthongke" class="btn btn-secondary w-8">Xem</button> 
                </div>
            </form>
            <div class="fullcrenn" id="fcreen">
                <div class="black_box"></div>
                <!-- box chart -->
                <div class="box_chart">        
                    <canvas id="mychart"></canvas> 
                    <canvas id="mychart2"></canvas>            
                    <button id="tatChart" class="btn btn-primary">Quay lại</button>
                    <button id="save_bt" class="btn btn-primary">In báo cáo</button>
                </div>       
            </div>
        </div>
    </div>
</div>

