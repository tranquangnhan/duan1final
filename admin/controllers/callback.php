<?php
 include "../model/connect.php";
 include "../model/user.php";
 session_start();
    
 $app_id = "782652022521704";
 $app_secret = "0acc6c7b870b57493bb5cfb65d618487";
 $redirect_uri = urlencode("http://localhost/duan1final/controller/callback.php");    
 
 // Get code value
 $code = $_GET['code'];
 
 // Get access token info
 $facebook_access_token_uri = "https://graph.facebook.com/v2.8/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";    
 
 $ch = curl_init(); 
 curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
     
 $response = curl_exec($ch); 
 curl_close($ch);

 // Get access token
 $aResponse = json_decode($response);
 $access_token = $aResponse->access_token;
 
 // Get user infomation
 $ch = curl_init();

 
 curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/v8.0/me?fields=id%2Cname%2Cpicture%2Cemail&access_token=EAALH0VZCIZC2gBAL1SRHvZB7fDbOZBTEVjxt3eDoPiNDcZCHD07pqaodv5ksdGYbbHxw8TvK6h46H1ZCR0xylIoyvdtwlsgqpKGfoi601pZB6lATzRuWxyekazy8eynS8Nz7C7qTIqtt5yXFwHKFXokEyoB7XUeSezcPsA6rvhkgAZDZD");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    
 curl_setopt($ch, CURLOPT_HEADER, 0);


 $response = curl_exec($ch); 
 curl_close($ch);
 
 $user = json_decode($response);
 // Log user in
 $_SESSION['user_login'] = true;

$id = $user->id;
$img = $user->picture->data->url;
$user = $user->name;
$_SESSION['sid'] = $id;;
$_SESSION['suser']= $user;
$_SESSION['adimg'] = $img;
if($_SESSION['suser'] == "Quang Nhân"){
    $_SESSION['role'] = 1;
    header('location: ../index.php');
}else{
    $_SESSION['role'] = 0;
    header('location: ../../index.php');
}


// $checkuser2 = checkUser2($user);

// if(!($checkuser2['user'] == $user) ==1){ //check xem đã đăng ký tk đó chưa
//     addUser($user,$pass);
//     $gansi = checkUser($user,$pass);
//     $_SESSION['sid'] = $gansi['id'];
//     $_SESSION['suser']= $gansi['user'];
//     $_SESSION['role'] = 0;
//     header('location: index.php');
// }else{
//     $gansi = checkUser($user,$pass);
//     $_SESSION['sid'] = $gansi['id'];
//     $_SESSION['suser']= $gansi['user'];
//     header('location: index.php');
// }
?>