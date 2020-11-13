<?php
    include_once '../../../system/config.php';
    include_once '../../../system/database.php';
    include_once '../../../lib/myfunctions.php';
    include_once '../../models/user.php';
    if ($_POST['Action'])
    {
        switch ($_POST['Action']) {
            case 'CheckExist':
                $Return = array();
                $Return['StatusCode'] = (int)((is_array(IsExist ($_POST['Login']))) ? 0 : 1);
                echo json_encode($Return);
                return;
                break;
            case 'Login':
                $Return = array();
                $Return['StatusCode'] = (int)(((checkUser($_POST['Login'],$_POST['Password'],$remember))=== true) ? 0 : 1);

                echo json_encode($Return);
                return;
            case 'CheckEmailNamePhoneExist':
                $Return = array();
                if(is_array(IsExist ($_POST['Login']))){
                    $Return['StatusCode'] =1;
                }elseif(is_array(checkEmailTonTai($_POST['email']))){
                    $Return['StatusCode'] =2;
                }elseif(is_array(checkPhoneTonTai($_POST['phone']))){
                    $Return['StatusCode'] =3;
                }else{
                    $Return['StatusCode'] =0;
                }
                echo json_encode($Return);
                return;
                break;
            case 'signup':
                $Return = array();
                $userName = trim(stripTags($_POST['username']));
                $phone = trim(stripTags($_POST['phone']));
                $email = trim(stripTags($_POST['email']));
                $passWord = trim(stripTags($_POST['password']));

                $randomKey = md5(rand(0,99999));
                $active = 0;
                
                
                $Return['StatusCode']  = (int) addUser($userName,$passWord,$active,$email,$phone,$randomKey) ? 1 : 0;
                echo json_encode($Return);

                $gansi = checkUser($userName,$passWord);
                $idUser = $gansi['id'];
                // start mail
                $userName = 'tranquangnhan1606@gmail.com';
                $passWord = 'Tranquangnhan@1606';
                $from = 'tranquangnhan1606@gmail.com';
                $title = 'Xác Nhận Đăng Ký Tài Khoản';
                $subject = 'Kích hoạt tài khoản';
                $linkKH ="<a href='". $_SERVER['HTTP_HOST'].SITE_URL.
                "index.php?act=kichhoat&id=%d&rd=%s'>Nhấp vào đây</a>";
                $linkKH = sprintf($linkKH,$idUser, $randomKey);
                $body = "<h4>Chào mừng thành viên mới</h4>Kích hoạt tài khoản: ". $linkKH;
                sendMail($userName,$passWord,$from,$email,$user,$title,$subject,$body);
                //end mail
                return;
            break;
            default:
                # code...
                break;
        }
    }

?>