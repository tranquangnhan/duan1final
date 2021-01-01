$(document).ready(function(){
    
    $('#form_cmt').on('submit',async function(event) {
        event.preventDefault();
        //var form_data = $(this).serialize();

        var idUser = $("#idus").val();
        var content = $("#content").val();
        var idbv = $("#idbaiviet").val(); // láy dư lieu tư form
        //var str = $("#form_cmt").serialize();
        if (content != "") {
            
            // console.log(form_data); 
            // khoi tao ajax            
            let contenData = new FormData();

            contenData.append('idUs', idUser);
            contenData.append('Ct', content);
            contenData.append('Idbv', idbv);
            contenData.append('Action', 'AddCmt');
            //console.log(content);
            $.ajax({ // gưi du lieu  len bang ạjax
                type: "POST",
                url: 'controllers/ajax/blogcmt.php',
                dataType: 'JSON',
                contentType: false,
                processData: false,
                data: contenData,
                success : function(response) {
                    $('#form_cmt')[0].reset();
                    $('#l-box-binhluan').css('display','none');
                    $('#l-box-binhluan-display').css("display", "block");
                    console.log(response.content);
                    var data = response.content;
                    var kq = '<span>'+response.countCmt+' Bình luận</span>';
                    for (let i = 0; i < data.length; i++) {
                        
                       //  $("div.noidung")[i].innerHTML = data[i].noidung;
                        // alert( data[i].noidung);
                        //  kq +='<div class="tenKH"></div>'
                        //  kq +='<div class="noidung">'+data[i].noidung+'</div>'
                        kq += '<div class="binhluan" id="binhluan_display">'
                        kq += '<div class="hinh">';
                        kq += '<img src="../uploads/avatar.png" alt="">'
                        kq += '</div>'
                        kq += '<div class="noidungbinhluan">';
                        kq += '<div class="tenKH">'+data[i].user+'</div>';
                        kq += '<div class="noidung">'+data[i].noidung+'</div>'
                        kq += '<div class="l-bt">';
                        kq += '<div class="like">Like</div>';
                        kq += '<div class="traloi">Phản hồi</div>';
                        kq += '<div class="thoigian">'+data[i].thoigian+'</div>'
                        kq += '</div>';
                        kq += '</div>'
                        kq += '</div>'                        
                   }
                    $("#l-box-binhluan-display").html(kq);                    
                },
                error: function() {
                    alert('loi');
                }   
            })     
                      
        } else {
            alert('content rỗng');
        }
    });
});
