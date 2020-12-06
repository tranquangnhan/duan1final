$(document).ready(function () {
    // $("#add_hanghoa").validate({
    //     rules:{
    //       ten_hh:{required:true},
    //       gia:{required:true, digits:true},   
    //       giam_gia:{digits:true},
    //       ma_loai:{required:true},
    //       ngay_nhap:{date:true}
    //     },
    //     messages:{
    //       ten_hh:{required:"<span class='badge badge-warning'>Mời bạn tên vào</span>"},
    //       gia:{
    //         required:"<span class='badge badge-warning'>Mời bạn nhập giá vào</span>",
    //         digits:"<span class='badge badge-danger'>Phải là số nguyên dương</span>"
    //       },
    //       giam_gia:{
    //         digits:"<span class='badge badge-danger'>Phải là số nguyên dương</span>",
    //       },    
    //       ma_loai:{
    //         required:"<span class='badge badge-warning'>Mời bạn chọn loại hàng</span>"
    //       },     
    //       ngay_nhap:{date:"<span class='badge badge-warning'>Chọn ngày trước hoặc bằng ngày hiện tại</span>"
    //       }
    //     }
    // });
    $('#bt_lienhe').click(function (event) { 
        event.preventDefault();
        var check = true;

        $('#hotenerro').hide();
        $('#emailerro').hide();
        $('#diachierro').hide();
        $('#noidungerro').hide();
        var hoten = $("#hoten").val();
        var diachi = $("#diachi").val();
        var email = $("#email").val();
        var noidung = $("#noidung").val();

        
    
        if (check == true) {
            var message = "Xác nhận gửi?";        
            alertify.confirm( message, function (e) {
                if (e) {                
                    // khoi tao ajax
                    let lienhedata = new FormData();

                    lienhedata.append('hoten', hoten);
                    lienhedata.append('diachi', diachi);
                    lienhedata.append('email', email);
                    lienhedata.append('noidung', noidung);
                    lienhedata.append('Action', 'addlienhe');

                    $.ajax({
                        type: "POST",
                        url: "controllers/ajax/lienhe.php",
                        data: lienhedata,
                        dataType: 'JSON',
                        contentType: false,
                        processData: false,
                        success: function (response) {                        
                            if (response) {
                                $('#form_lienhe')[0].reset();
                                alertify.success('Gửi thành công');
                            }
                        },
                        error: function() {
                            alert('loi');
                        }   
                    });
                } else {
                    //after clicking Cancel
                } 
            }).set({title:"Thông báo"},{labels:{ok:'Forward', cancel: 'Backward'}});
        }
    });

});

