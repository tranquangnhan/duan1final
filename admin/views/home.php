<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    google.charts.load('current', {packages: ['corechart']});
    </script>
<div class="col-lg-9">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between mt-3">
            <div class="col-lg-3 text-dark mt-3">
                <h2>Thống Kê</h2>
            </div>
            <div class="col-lg-3 ">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row ">
            <!-- <section> -->
            <div class="row mt-3 d-flex justify-content-between">
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Hãng Xe</p>
                                    <h3 class="my-3"><?=$allhx['sldm']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i>8.5%</span> Mới Trong Tuần</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-user" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3"> 
                    <div class="card report-card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Số lượng Xe</p>
                                    <h3 class="my-3"><?=$allhh['slhh']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i>8.5%</span> Mới Trong Tuần</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-clock-o" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3 ">
                    <div class="card report-card bg-warning  text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-white font-weight-semibold font-14">Tổng Lượt Xem</p>
                                    <h3 class="my-3"><?=$alllx['luotxem']?></h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i>8.5%</span> Mới Trong Tuần</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-dashboard" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card report-card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="font-weight-semibold font-14">Số Khách Hàng</p>
                                    <h3 class="my-3"><?=$allkh['slkh']?> </h3>
                                    <p class="mb-0 text-truncate"><span class=""><i class="mdi mdi-trending-up"></i>8.5%</span> Mới Trong Tuần</p>
                                </div>
                                <div class="align-self-center"><i class="fa fa-folder" style="font-size:22pt;"></i></div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
            </section>

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-9">
            <div id="columnchart_values" class="mb-4" style="width: 1000px; height: 300px;"></div>
            <div id="chart" class="mt-4"></div>
            <script>
                google.charts.load('current', { 'packages': ['corechart'] });
                google.charts.setOnLoadCallback(drawChart);
                var d = new Date();
                var n = d.getMonth();
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Ngày', 'Tháng Này', 'Tháng Trước'],
                        [1, 100,0],
                        [15, <?=$alllx['luotxem']?>,<?=$alllx['luotxem']?>/3],
                        [30,<?=$alllx['luotxem']/2?>,<?=$alllx['luotxem']?>/4]
                    ]);

                    var options = {
                        title: 'Tổng Số Lượt Xem',
                        width: 900,
                        height: 300,
                        hAxis: { title: 'Ngày', titleTextStyle: { color: '#333' } },
                        vAxis: { minValue: 0 }
                    };

                    var chart = new google.visualization.AreaChart(document.getElementById('chart'));
                    chart.draw(data, options);
                }</script>
                <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ["Element", "Density", { role: "style" } ], 
                    <?php for ($i=0; $i < count($arr[0]); $i++) { 
                        echo  "['".$arr[0][$i][0]."', ".$arr[1][$i][0].", 'color: gray'],";
                    }?>  
                ]);
    
                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                                { calc: "stringify",
                                    sourceColumn: 1,
                                    type: "string",
                                    role: "annotation" },
                                2]);

                var options = {
                    title: "Số Lượt Xem Từng Sản Phẩm",
                    width: 900,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(view, options);
            }
            </script>
            
        </div>
    </div>
</div>