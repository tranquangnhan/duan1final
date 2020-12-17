
$(document).ready(function() {
    var dieukienchart = '';
    var chk = true;  


    $('#showthongke').click(async function (e) { 
        e.preventDefault();        
    // });  
    // $('#form_baocao').on('submit',async function(event) {
        chk = true; 
        // $("#fcreen").addClass('fullcrenn');
        // event.preventDefault();
        //form_baocao
        // lay du lieu tu form
        var kieuchart = $('#kieuchart').val();
        var kieubaocao = $('#kieubaocao').val();
        var ngaybatdau1 = $('#ngaybatdau1').val();
        var ngayketthuc1 = $('#ngayketthuc1').val();
        var ngaybatdau2 = $('#ngaybatdau2').val();
        var ngayketthuc2 = $('#ngayketthuc2').val();
  
        if (kieubaocao == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn kiểu báo cáo!');
        } else if (kieuchart == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn kiểu chart!');
        } else  if (ngaybatdau1 == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày bắt đầu!');
        } else if (ngayketthuc1 == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày kết thúc!');
        } else if (ngaybatdau2 == '' && ngayketthuc2 == '') {
            chk = true;
        } else if (ngaybatdau2 != '' && ngayketthuc2 == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày bắt đầu!');
        } else if (ngaybatdau2 == '' && ngayketthuc2 != '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày kết thúc!');
        }

        if (chk == true) {
            //console.log('check', chk);
            // luu du lieu    
            let dataz = new FormData();

            dataz.append('kieuchart', kieuchart);
            dataz.append('kieubaocao', kieubaocao);
            dataz.append('ngaybatdau1', ngaybatdau1);
            dataz.append('ngaybatdau2', ngaybatdau2);
            dataz.append('ngayketthuc1', ngayketthuc1);
            dataz.append('ngayketthuc2', ngayketthuc2);
            dataz.append('Action', 'getThongke');
            // khoi tao ajax
            $.ajax({ // gưi du lieu  len bang ạjax
                type: "POST",
                url: 'controllers/ajax/thongke.php',
                dataType: 'JSON',
                contentType: false,
                processData: false,
                data: dataz,
                success : function(response) {
                    // console.log('bd1', response.bd1);
                    // console.log('kt1', response.kt1);
                    // console.log('bd2', response.bd2);
                    // console.log('kt2', response.kt2);
                    // console.log('kieuchart', response.kieuchart);
                    // console.log('kieu', response.kieubaocao);
                    // console.log('got',response.data1);
                    if (response.kieubaocao == "hangbay") {
                        var hang = ['VietJect', 'VietnameairLight', 'BamBoo', 'Pacific']; // tao array hang bay
                    }
                    var data = response.data1;
                  //  console.log('data1', data);
                    var tongtien = ['0', '0', '0', '0']; // tao mang
                    // tao bieu do
                    var ctx = document.getElementById('mychart').getContext('2d');
                    for (var i = 0; i < data.length; i++) {
                        tongtien[i] = (data[i]['tongtheohang']); // push vao mang[]
                        // console.log('test',tongtien[i]);
                    }
                    var myChart = new Chart(ctx, {
                        type: response.kieuchar, //kieu chart: polarArea, bar, pie, doughnut, line
                        data: {
                            labels: ['VietJect', 'Vietnamairlight', 'Bamboo', 'Pacific'], // hang may bay
                            datasets: [{
                                label: response.bd1+' Đến '+response.kt1,
                                data: [tongtien[0], tongtien[1], tongtien[2], tongtien[3]], // du lieu
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    //'rgba(75, 192, 192, 0.2)',
                                     'rgba(153, 102, 255, 0.2)',
                                    // 'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    //'rgba(75, 192, 192, 1)',
                                     'rgba(153, 102, 255, 1)',
                                    // 'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1,
                                hoverBorderWidth:2,                    
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                    $( ".fullcrenn" ).show();
                    $("#tatChart").click(function() {
                        myChart.destroy();                                          
                        if (myChart2 != null) {
                            myChart2.destroy();
                            dieukienchart = '';
                        }  
                        $(".fullcrenn").hide();                                     
                    });
                    // bieu do thu 2 neu ngay2 khac rỗng
                    if (response.Statuscode == 1) {
                        dieukienchart = 1;
                        var data2 = response.data2; // data 2 nếu có 2 ngày phía dưới so sánh
                       // console.log('data2',data2);
                        var tongtien2 = ['0', '0', '0', '0']; // tao mang
                        // tao bieu do
                        var ctx2 = document.getElementById('mychart2').getContext('2d');
                        for (var j = 0; j < data2.length; j++) {
                            tongtien2[j] = (data2[j]['tongtheohang']); // push vao mang[]
                            //console.log('test',tongtien2[j]);
                        }
                        var myChart2 = new Chart(ctx2, {
                            type: response.kieuchar, //kieu chart: polarArea, bar, pie, doughnut, line
                            data: {
                                labels: ['VietJect', 'Vietnamairlight', 'Bamboo', 'Pacific'], // hang may bay
                                datasets: [{
                                    label: response.bd2+' Đến '+response.kt2,
                                    data: [tongtien2[0], tongtien2[1], tongtien2[2], tongtien[3]], // du lieu
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        //'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        // 'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        //'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        // 'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1,
                                    hoverBorderWidth:2,                    
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    }
                },
                error: function() {
                    alert('loi');
                }   
            })     
                      
        }
    });
    
    $('#save_bt').click(function() {  
        var ngaybatdau1 = $('#ngaybatdau1').val();
        var ngayketthuc1 = $('#ngayketthuc1').val();
        var ngaybatdau2 = $('#ngaybatdau2').val();
        var ngayketthuc2 = $('#ngayketthuc2').val();
        var kieubaocao = $('#kieubaocao').val();
        console.log(ngayketthuc1);
        $('#mychart').get(0).toBlob(function(blob) {
            saveAs(blob, kieubaocao + ngaybatdau1 + ' / ' + ngayketthuc1);
        })
        if (dieukienchart == 1) {
            $('#mychart2').get(0).toBlob(function(blob) {
                saveAs(blob, kieubaocao + ngaybatdau2 + ' / ' + ngayketthuc2);
            })
            
        }            
    });
    $("#ngaybatdau1").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngayve = $('#ngayketthuc1').datepicker('getDate');
            var newDate = $(this).datepicker('getDate');
            if (newDate) { // Not null
                newDate.setDate(newDate.getDate());
            }
            if (ngayve == null) {
                $('#ngayketthuc1').datepicker('option', 'minDate', newDate); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
    $("#ngayketthuc1").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngaydi = $('#ngaybatdau1').datepicker('getDate');
            var newDate_z = $(this).datepicker('getDate');
            if (newDate_z) { // Not null
                newDate_z.setDate(newDate_z.getDate());
            }
            if (ngaydi == null) {
                $('#ngaybatdau1').datepicker('option', 'maxDate', newDate_z); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
    $("#ngaybatdau2").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngayve = $('#ngayketthuc2').datepicker('getDate');
            var newDate = $(this).datepicker('getDate');
            if (newDate) { // Not null
                newDate.setDate(newDate.getDate());
            }
            if (ngayve == null) {
                $('#ngayketthuc2').datepicker('option', 'minDate', newDate); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
    $("#ngayketthuc2").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngaydi = $('#ngaybatdau2').datepicker('getDate');
            var newDate_z = $(this).datepicker('getDate');
            if (newDate_z) { // Not null
                newDate_z.setDate(newDate_z.getDate());
            }
            if (ngaydi == null) {
                $('#ngaybatdau2').datepicker('option', 'maxDate', newDate_z); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });


})  