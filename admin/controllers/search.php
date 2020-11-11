<?php 
//     require_once "../../system/config.php";
//     require_once "../../system/database.php";
//     require_once "../../lib/myfunctions.php";
//     require_once "../../global.php";
// searchsp();
// function searchsp(){
//         global $pathimg;
//         $output = '';
//         if(isset($_POST["query"])){
//             $search = $_POST['query'];
//             $sql = "SELECT * FROM sanpham WHERE name LIKE '%".$search."%'";
//         }
//         else{
//             $sql = "SELECT * FROM sanpham WHERE 1 ";
//         }
//         $result = result1(0,$sql);
//         if($result){
//             $thutu=0;
//             foreach ($result as $motsp) {
//                 $thutu++;
//                 $id =$motsp['id'];
//                 $img = $pathimg.$motsp['img'];
//                 $name = $motsp['name'];
//                 $gia = forMatTien($motsp['gia']) . " đ";
//                 $giamgia = $motsp['giamgia'];
//                 $anhien = $motsp['anhien'];
//                 if($anhien == 1){
//                     $anhien = 'checked';
//                 }else{
//                     $anhien ='onclick="return false"';
//                 }    
//                 $ngaynhap = $motsp['namsanxuat'];
//                 $mota =  $motsp['mota'];
//                 $linkdel = "index.php?ctrl=hanghoa&act=del&iddel=".$id;
//                 $linkedit = "index.php?ctrl=hanghoa&act=add&idedit=".$id;
//                 $output .='  <tr>
//                                 <td scope="row"><strong>'.$thutu.'</strong></td>
//                                 <td><img width="200" height="100" src="'.$img.'" class="img-fluid imgsp"></td>
//                                 <td><strong><a class="namesp" href="'.$linkedit.'">'.$name.'</a> <input type="radio"'.$anhien.'></strong></td>
//                                 <td><strong>'.$gia.'</strong></td>
//                                 <td><strong>'.floatVal($giamgia).' %</strong></td>
//                                 <td>'.substr($mota,0,150).'...</td>
//                                 <td>
//                                     <a href="'.$linkdel.'"><i class="fa fa-trash mr-3" onclick="return checkDelete()"></i></a>
//                                     <a href="'.$linkedit.'"><i class="fa fa-edit"></i></a>
//                                 </td>
//                             </tr>';   
//                 }
//                 echo $output;
//         }
//         else{
//             $output = "<h3>Không có sản phẩm nào</h3>";
//         }
// }


?>