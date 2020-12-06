<?php
      // start mailer
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      use PHPMailer\PHPMailer\SMTP;
      include_once "PHPMailer-master/src/Exception.php";
      include_once "PHPMailer-master/src/OAuth.php";
      include_once "PHPMailer-master/src/PHPMailer.php";
      include_once "PHPMailer-master/src/POP3.php";
      include_once "PHPMailer-master/src/SMTP.php";
      //end mailer 
    //strip the string from html tags;
    function stripTags($str){
        return trim(strip_tags($str));
    }
       // up load nhiều ảnh và check up load lên file upload
    function checkUpLoadMany($allFile){
        $pathimg = '../uploads/';
        foreach ($allFile['name'] as $file) {
            $nameimg[] = $file;
        }
        foreach($allFile['tmp_name'] as $file){
            $tmp_name[] = $file;
        }
        $imgupload = '';
        for ($i=0; $i <count($nameimg) ; $i++) { 
            $temp = preg_split('/[\/\\\\]+/',$nameimg[$i]);
            $img = $temp[count($temp)-1];
            $target_file = $pathimg . basename($img);
            if (move_uploaded_file($tmp_name[$i], $target_file)) {
                $uploadfile = 'Upload file thành công';
            }
            else{
                $uploadfile = 'upload file không thành công';
            }
            if($i <(count($nameimg) -1)){
                $imgupload .= $nameimg[$i].',';
            }else{
                $imgupload .= $nameimg[$i];
            }  
        }
    return $imgupload;
    }
    function forMatTien($num){
        $num = round($num, 0);
        $formattedNum = number_format($num, 0, ',', '.');
        return $formattedNum;
    }
    function checkMiddleWare($token){
        return isset($_SESSION['token'])&&($_SESSION['token']) == $token; //check token
    }
    function middleWare(){
        $token = md5(time());
        $_SESSION['token'] = $token;
        echo '<input type="hidden" name="token" value="'.$token.'">';//tạo ra token
    }
    function test_input($data) { //test xem các kí tự đặc biệt
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function thuocTinh($thuoctinh){
        if($thuoctinh == 1){
            $thuoctinh = "Có";
        }else{
            $thuoctinh = "Không";
        }
        return $thuoctinh;
    }
    function sendMail($userName,$passWord,$from,$email,$name,$title,$subject,$body){
        $mail = new PHPMailer(true); 
        try {
            $mail->isSMTP();  
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username   = $userName;
            $mail->Password   = $passWord;
            $mail->SMTPSecure = 'tls';  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;  // port to connect to                
            $mail->setFrom($from, $title);
            $mail->addAddress($email, $name); //mail và tên người nhận       
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = $subject;                
            $mail->Body= $body;
            $mail->send();
            $thongbao = 'Tài khoản đã lưu và đã gửi thư kích hoạt';
            return $thongbao;
         } catch (Exception $e) {
                $thongbao = 'Mail không gửi được. Lỗi: '. $mail->ErrorInfo;
                return $thongbao;
         }
    }
    function convert_name($str) {
        $str = strtolower($str);
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		return $str;
    }
    // hàm này dùng để trừ thời gian return ra giờ vd: 1h 30m
    function tinhThoiGian($gioBatDau,$gioKetThuc){
        
        // convert to unix timestamps
        $firstTime=strtotime($gioBatDau);
        $lastTime=strtotime($gioKetThuc);
        
        // perform subtraction to get the difference (in seconds) between times
        $difference=$lastTime-$firstTime;
         
         $years = abs(floor($difference / 31536000));
         $days = abs(floor(($difference-($years * 31536000))/86400));
         $hours = abs(floor(($difference-($years * 31536000)-($days * 86400))/3600));
         $mins = abs(floor(($difference-($years * 31536000)-($days * 86400)-($hours * 3600))/60));#floor($difference / 60);

         return $hours . "h, " . $mins . "m";
    }
    //log file lỗi 
    // biến thứ 1 truyền vào lỗi,
    //biến thứ 2 truyền vào tên function 
    //biến thứ 3 truyền vào tất cả các biến
    // function LogFile($ErrorMess, $Function, $Variable)
    // {
    //     $Name = date('d-m-Y');
    //     $Error = @fopen('D:\hoc-fpt\code-tren-lop\php\xampp3\htdocs\duan1final\site\log\/'. $Name . '.txt', 'a+');
    //     @fwrite($Error, PHP_EOL . '--------------' . PHP_EOL);
    //     @fwrite($Error, 'Error Date: ' . (print_r(date('d-m-Y h:i:s'), true)) . PHP_EOL);
    //     @fwrite($Error, 'Error In: ' . (print_r($Function, true)) . PHP_EOL);
    //     @fwrite($Error, 'Error Message: ' . (print_r($ErrorMess, true)) . PHP_EOL);
    //     @fwrite($Error, 'Variable JSON: ' . (print_r($Variable, true)));
    //     @fclose($Error);
    // }
    // xoá session
    function unsetSs(){
        unset($_SESSION['idchuyenbay']);
        unset($_SESSION['hangghe']);
        unset($_SESSION['urlve']);
        unset($_SESSION['vitrighe']);
        unset($_SESSION['vitrighekh']);
        unset($_SESSION['idchuyenbaykh']);
        unset($_SESSION['hangghekh']);
    }
?>