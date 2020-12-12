$(document).ready(function () {
    $( ".l-datve" ).submit(function( event ) {
        var chk = true;
        var diemdi = $('#diemdi').val();
        var diemden = $('#diemden').val();
        var ngaydi = $('#ngaydi').val();
        var loaighe = $('#loaighe').val();
        var nguoilon = $('#nguoilon').val();
        var embe = $('#embe').val();
        var treem = $('#treem').val();

        if (diemdi == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn điểm đi!');
        } else if (diemden == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn điểm đến!');
        } else if (ngaydi == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày đi!');
        } else if (loaighe == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn loại ghế!');
        } else if (nguoilon == '') {
            chk = false;
            alertify.alert('Thông báo', 'Người lớn không được bé hơn 1!');
        } else if (embe > nguoilon) {
            chk = false;
            alertify.alert('Thông báo', 'Em bé không được nhiều hơn người lớn!');
            console.log(embe);
            console.log(nguoilon);
        }
        if (chk == false) {
            event.preventDefault();
        }  
    });
    $( ".l-datve_kh" ).submit(function( event ) {
        var chk = true;

        var diemdi_kh = $('#diemdi_kh').val();
        var diemden_kh = $('#diemden_kh').val();
        var ngaydi_kh = $('#ngaydi_kh').val();
        var ngayve_kh = $('#ngayve_kh').val();
        var loaighe_kh = $('#loaighe_kh').val();
        var nguoilon_kh = $('#nguoilon_kh').val();
        var embe_kh = $('#embe_kh').val();
        var treem_kh = $('#treem_kh').val();

        if (diemdi_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn điểm đi!');
        } else if (diemden_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn điểm đến!');
        } else if (ngaydi_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày đi!');
        } else if (ngayve_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn ngày về!');
        } else if (loaighe_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Chưa chọn loai ghế!');
        } else if (nguoilon_kh == '') {
            chk = false;
            alertify.alert('Thông báo', 'Người lớn không được bé hơn 1!');
        } else if (embe_kh > nguoilon_kh) {
            chk = false;
            alertify.alert('Thông báo', 'Em bé không được nhiều hơn người lớn!');
        }
        if (chk == false) {
            event.preventDefault();
        }  
    });
    $("#ngaydi").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: '0d',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" }
    });
    $("#ngaydi_kh").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: '0d',
        duration: "fast",
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngayve = $('#ngayve_kh').datepicker('getDate');
            var newDate = $(this).datepicker('getDate');
            if (newDate) { // Not null
                newDate.setDate(newDate.getDate());
            }
            if (ngayve == null) {
                $('#ngayve_kh').datepicker('option', 'minDate', newDate); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
    $("#ngayve_kh").datepicker({
        dateFormat: 'yy-mm-dd',
        duration: "fast",
        minDate: '0d',
        showAnim: "show",
        showOptions: { direction: "up" },
        onSelect: function() {
            var ngaydi = $('#ngaydi_kh').datepicker('getDate');
            var newDate_z = $(this).datepicker('getDate');
            if (newDate_z) { // Not null
                newDate_z.setDate(newDate_z.getDate());
            }
            if (ngaydi == null) {
                $('#ngaydi_kh').datepicker('option', 'maxDate', newDate_z); //datepicker('setDate', newDate).  setDate có thể set ngày vừa chọn vào datepicker thứ 2 theo id
            }
        }
    });
});