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
                    // $('#form_cmt')[0].reset();
                   var data = response.content;
                   var kq = '';
                   for (let i = 0; i < data.length; i++) {
                    //    $(".noidung")[i].innerHTML = data[i].noidung;
                       // alert( data[i].noidung);
                         kq +='<div class="tenKH"></div>'
                         kq +='<div class="noidung">'+data[i].noidung+'</div>'
                   }
                   $("#binhluan").html(kq);
                    //var text = JSON.stringify(response.content);
                    //console.log(text);
                    // data = JSON.parse(text);
                    // var n = ('sobl', response.rowcount);
                     //var data = JSON.parse(response.content);
                    // for(var i = 0; i < data; i++) {
                    //     console.log( data[i]);
                    // }
                     //console.log(data)
                   
                    // data.idkh.forEach(function(element) {
                    //     console.log(element);
                    // })
                    // for (i in text.noidung) {
                    //     x += text.noidung[i] + "<br>";
                    //   }
                    //   //$('#display_comment').html(x);
                    // document.getElementById("display_comment").innerHTML = x;
                    // $(".noidung").html(response.content['noidung']);
                    // 
                    //$("#noidung").html(response.content[0]['noidung']);
                    // let arr = new FormData();

                    // arr.append('Idbv', idbv);
                    // arr.append('Action', 'getcmt');

                    // $.ajax({ // gưi du lieu  len bang ạjax
                    //     type: "POST",
                    //     url: 'controllers/ajax/blogcmt.php',
                    //     dataType: 'JSON',
                    //     contentType: false,
                    //     processData: false,
                    //     data: arr,
                    //     success : function(response) {
                    //         if (response.StatusCode === 1) {
                                
                    //         // $('#display_comment').html(data);
                    //             console.log(response.Status);
                    //         //$("#ghetg").html(response.html);
                    //         }
                    //     }, error: function() {
                    //         alert('loi 2');
                    //     }  
                    // })
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
