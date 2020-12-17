<?php
session_start();
ob_start();
require_once "../autochuyenbay.php";
// code auto
require_once "../system/config.php";
require_once "../system/database.php";
require_once "models/loaihang.php";
require_once "models/user.php";


require_once "../global.php";
include_once '../lib/myfunctions.php';
// require model
require_once "models/loaihang.php";
require_once "models/blog.php";
// require_once "views/layouts/header.php";

require_once "models/danhsachve.php";
require_once "models/ve.php";
require_once "models/hoadon.php";
require_once "models/giamgia.php";

require_once "models/timve.php";


if (!$_GET['act'] || ($_GET['act'] == 'home')) {
    require_once "views/layouts/header_home.php";
    $blog = gettwoblog();
    $showAllSanBay = showAllSanBay();

    // print_r($showAllSanBay);
    $vietject = 1;
    $vietnameairline = 2;
    $bammbo = 3;
    $pacific = 4;
    // lấy giảm giá theo hãng limit 1
    $vietject = topgiamGiaTheoHang($vietject);
    $vietnameairline = topgiamGiaTheoHang($vietnameairline);
    $bammbo = topgiamGiaTheoHang($bammbo);
    $pacific = topgiamGiaTheoHang($pacific);
    // gía giảm còn
    $giamgia_1 = ($vietject['giavethuonggia'] * (100 - $vietject['giamgia'])) / 100;
    $giamgia_2 = ($vietnameairline['giavethuonggia'] * (100 - $vietnameairline['giamgia'])) / 100;
    $giamgia_3 = ($bammbo['giavethuonggia'] * (100 - $bammbo['giamgia'])) / 100;
    $giamgia_4 = ($pacific['giavethuonggia'] * (100 - $pacific['giamgia'])) / 100;

    $vjdiemdi = timSanBay($vietject['iddiemdi']);
    $vjdiemden = timSanBay($vietject['iddiemden']);
    $vndiemdi = timSanBay($vietnameairline['iddiemdi']);
    $vndiemden = timSanBay($vietnameairline['iddiemden']);
    $bbdiemdi = timSanBay($bammbo['iddiemdi']);
    $bbdiemden = timSanBay($bammbo['iddiemden']);
    $pcfdiemdi = timSanBay($pacific['iddiemdi']);
    $pcfidiemden = timSanBay($pacific['iddiemden']);
       
    $maSb_vj_di = explode("/",$vjdiemdi['masanbay'])[1];
    $maSb_vj_den = explode("/",$vjdiemden['masanbay'])[1];
    $maSb_vn_di = explode("/",$vndiemdi['masanbay'])[1];
    $maSb_vn_den = explode("/",$vndiemden['masanbay'])[1];
    $maSb_bb_den = explode("/",$bbdiemdi['masanbay'])[1];
    $maSb_bb_di = explode("/",$bbdiemden['masanbay'])[1];
    $maSb_pcf_den = explode("/",$pcfdiemdi['masanbay'])[1];
    $maSb_pcf_di = explode("/",$pcfidiemden['masanbay'])[1];   
}

if (isset($_GET['act'])) {   
    $act = $_GET['act'];  
    if ($act == 'home'){
        require_once "views/layouts/header_home.php";
    }else{
        require_once "views/layouts/header_khac.php";
    }
        switch ($act) {            
            case 'home': 
                unsetSs();             
                // hãng máy bay                
                // $blog = gettwoblog();
                require_once "views/home.php";
                break;
            case 'about':
                unsetSs();
                require_once "views/about.php";
                break;
            case 'contact':
                unsetSs();
                require_once "views/contact.php";
                break;
            case 'danhsachve':   // để sửa css
                unsetSs();
                $data = showDiemDi2();
                $data1 = showDiemDen2();
                require_once "views/danhsachve.php";
                break;
            case 'blog':
                unsetSs();
                $page_num = 1;
                $page_size = PAGE_SIZE;
                $getbestBlog = getBestBlog(); // lay blog nhieu luot xem    
                $getDmblog = getDmblog();
                if (isset($_GET['page_num']) == true) {
                    $page_num = $_GET['page_num'];
                }
                settype($page_num, "int");
                if (isset($_GET['iddm']) == true) {
                    $iddm = $_GET['iddm'];
                    $getDmblogbyid = getDmblogbyid($iddm); // để lay name danh muc
                    $allBlog = getBlogByiddm1($iddm, $page_num, $page_size); // lay blog theo id danh muc
                    $total_rows = countBlogbyiddm($iddm);
                    $baseurl = SITE_URL . "?act=blog&iddm=$iddm";
                } else {
                    $allBlog = getallBlog($page_num, $page_size);   // lay tat ca blog
                    $total_rows = countBlog();
                    $baseurl = SITE_URL . "?act=blog";
                }
                if ($page_num <= 0) {
                    $page_num = 1;
                }
    
                $links = taolinks($baseurl, $page_num, $page_size, $total_rows);
                require_once "views/blog.php";
                break;
        case 'dtBlog':
            unsetSs();
            if (isset($_GET['idbl']) == true) {
                $id = $_GET['idbl'];
            } // id blog

            if (isset($_SESSION['suser'])) { // get user
                $user = $_SESSION['suser'];
                $userr = getIdbyuser($user);
            } else {
                $user = '0';
            }
            settype($id, "int");
            $getBlogbyid = getBlogbyid($id); //
            $getbestBlog = getBestBlog(); // blog hay
            $getDmblog = getDmblog();
            $binhluan = showCmt($id);
            $sobinhluan = rowcountCmt($id);
            $idkh = $binhluan[0]['idkh'];
            $getKhbyId = getKhbyId($idkh);

            if (isset($_GET['iddm']) == true) {
                $iddm = $_GET['iddm'];
            }
            settype($iddm, "int");
            $getBlogByiddm = getBlogByiddm($iddm);
            require_once "views/blogdetail.php";
            break;
        case 'login':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
            require_once "views/login.php";
            echo '<script src="views/jquery/login.js" type="text/javascript"></script>';
            break;
        case 'signup':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
            require_once "views/signup.php";
            echo '<script src="views/jquery/signup.js" type="text/javascript"></script>';
            break;
        case 'user':
            unsetSs();
            if (isset($_GET['logout']) && ($_GET['logout']) == 1) {
                unset($_SESSION['sid']);
                unset($_SESSION['suser']);
                echo '<script>window.location.href = "index.php"</script>';
            }
            break;
        case 'hsedit':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
            echo '<link rel="stylesheet" href="views/css/buton.scss">';
            $iduser = $_SESSION['sid'];
            $showhs = showhs($iduser);
            if (isset($_GET['idedit']) && ($_GET['idedit'] > 0)) {
                $_SESSION['idedit'] = $_GET['idedit'];
                $showkhedit = showkhedit($_SESSION['idedit']);

                if (isset($_POST['sua']) && ($_POST['sua'])) {
                    $ten = stripTags($_POST['ten']);
                    $email = stripTags($_POST['email']);
                    $id = $_POST['id'];
                    $sdt = $_POST['sdt'];
                    $diachi = stripTags($_POST['diachi']);
                    $thanhpho = stripTags($_POST['thanhpho']);
                    updatehs($id, $ten, $email, $sdt, $diachi, $thanhpho);

                    header("location: index.php?ctrl=index&act=showhs");
                }
                require_once "views/hsedit.php";
            }
            break;
        case 'showhs':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/showhs.css">';
            $iduser = $_SESSION['sid'];
            $showhs = showhs($iduser);
            require_once "views/showhs.php";
            break;
        case 'kichhoat':
            unsetSs();
            if (isset($_GET['id']) && isset($_GET['rd'])) {//rd -> random
                $id = $_GET['id'];
                $rd = $_GET['rd'];
                $user = user($id);
                if ($user['randomkey'] == $rd) {
                    setThanhVien($id, $rd);
                    $_SESSION['sid'] = $user['id'];
                    $_SESSION['suser'] = $user['user'];
                    $_SESSION['role'] = 0;
                    $_SESSION['thongbao'] = "kích hoạt tài khoản thành công";
                    echo "<script>alert('Kích hoạt tài khoản thành công');</script>";
                    header("location: index.php?act=userprofile");
                }
            }
            require_once "views/userprofile.php";
            break;
        case 'quenmk':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/main.css">';
            echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
            echo '<link rel="stylesheet" href="scss/buton.scss">';
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {

                $email = trim(stripTags(test_input($_POST['email'])));
                $checkEmail = checkEmailTonTai($email);
                $idUser = $checkEmail['id'];
                $user = $checkEmail['user'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $thongbao = "$email Nhập Không Hợp Lệ!";
                    $thanhcong = false;
                } elseif ($email == "") {
                    $thongbao = "Email Chưa Nhập<br>";
                    $thanhcong = false;
                } elseif (empty($checkEmail)) {
                    $thongbao = "Email Này Không Có<br>";
                    $thanhcong = false;
                } else {
                    $thanhcong = true;
                    $randomKey = rand(100000, 999999);
                    setcookie("randomKey", $randomKey, time() + 300);
                    // start mail
                    $userName = 'datvemaybayy@gmail.com';
                    $passWord = 'Datvemaybay123';
                    $from = 'datvemaybayy@gmail.com';
                    $title = 'Lấy lại Mật Khẩu';
                    $subject = 'Quên Mật Khẩu';
                    $linkKH = "<a href='" . $_SERVER['HTTP_HOST'] . SITE_URL .
                        "index.php?act=datlaimk&id=%d&rd=%s'>Nhấp vào đây</a>";
                    $linkKH = sprintf($linkKH, $idUser, $randomKey);
                    $body = "<h4>Lấy Lại Mật Khẩu</h4>Đặt Lại mật khẩu: " . $linkKH;
                    sendMail($userName, $passWord, $from, $email, $user, $title, $subject, $body);
                    // end mail
                    $_SESSION['thongbao'] = 'Vui lòng check email để lấy lại mật khẩu!Email chỉ có hiệu lực trong 5 phút';
                    // header("location: index.php?act=thongbao");

                }
                if ($thanhcong == false) {
                    $_SESSION['thongbao'] = $thongbao;
                    // header("location: index.php?act=thongbao");
                }
            }
            require_once "views/quenmk.php";
            break;
        case 'checkin':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/long/trangthanhtoan.css">';

            if (isset($_POST['checkin']) && ($_POST['checkin'])) {
                $macho = $_POST['madatcho'];
                $checkin = checkinonl($macho);
                //  $views ="views/showcheckin.php";
                require_once "views/checkinonline.php";
            }
            require_once "views/checkinonline.php";
            break;
            
        case 'datlaimk':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
            echo '<link rel="stylesheet" href="views/css/buton.scss">';
            echo ' <link rel="stylesheet" href="views/css/phuong/showhs.css">';
            $iduser = $_SESSION['sid'];
            $showhs = showhs($iduser);
            if (isset($_POST['datlaimk']) && ($_POST['datlaimk'])) {
                $id = $_GET['id'];
                $rd = $_GET['rd'];
                $newpass = $_POST['password'];
                $user = user($id);
                if ($_COOKIE["randomKey"] == $rd) {
                    setNewPass($id, $newpass);
                    $_SESSION['sid'] = $user['id'];
                    $_SESSION['suser'] = $user['user'];
                    $_SESSION['role'] = 0;
                    $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                    echo "<script>alert('Mật Khẩu Đã được thay đổi thành công');</script>";
                    header("location: index.php?act=thongbao");
                } else {
                    $_SESSION['thongbao'] = "Đổi Mật Khẩu không thành công, Email đã hết hạn !";
                    header("location: index.php?act=thongbao");
                }
            }
            require_once "views/datlaimk.php";
            break;
        case 'khuyenmai':
            unsetSs();
            $page_num = 1;
            $page_size = PAGE_SIZE;

            if (isset($_GET['page_num']) == true) {
                $page_num = $_GET['page_num'];
            }
            settype($page_num, "int");

            $vekhuyenmai=showvekm($page_num, $page_size);   // lay tat ca blog
            $total_rows_km = countvekm();
            $baseurl = SITE_URL . "?act=khuyenmai";
            if ($page_num <= 0) {
                $page_num = 1;
            }

            $links = taolinks($baseurl, $page_num, $page_size, $total_rows_km);
            require_once "views/dsvekhuyenmai.php";
            break;
        case 'userprofile':
            unsetSs();
            echo ' <link rel="stylesheet" href="views/css/phuong/hsedit.css">';
            echo '<link rel="stylesheet" href="views/css/buton.scss">';
            $iduser = $_SESSION['sid'];
            $showhs = showhs($iduser);
            if (isset($_POST['doimk']) && ($_POST['doimk'])) {
                $idUser = $_SESSION['sid'];
                $mkcu = trim(stripTags(test_input($_POST['passhientai'])));
                $user = user($idUser);
                $pass = trim(stripTags(test_input($_POST['passmoi'])));
                $repass = trim(stripTags(test_input($_POST['nhaplaipass'])));
                if ($mkcu == "") {
                    $thongbao = "Password Cũ Chưa Nhập !";
                    $thanhcong = false;
                } elseif ((strlen($mkcu)) <= 2) {
                    $thongbao = "Password Cũ Quá Ngắn";
                    $thanhcong = false;
                } elseif ($user['pass'] !== $mkcu) {
                    $thongbao = "Password Cũ Không Đúng!";
                    $thanhcong = false;
                } elseif ((strlen($pass)) <= 2) {
                    $thongbao = "Password Quá Ngắn";
                    $thanhcong = false;
                } elseif ((strlen($repass)) <= 2) {
                    $thongbao = "Password Nhập lại Quá Ngắn";
                    $thanhcong = false;
                } elseif ($pass !== $repass) {
                    $thongbao = "Mật Khẩu Và Mật Khẩu Nhập Lại Không Khớp";
                    $thanhcong = false;
                } else {
                    $thanhcong = true;
                    setNewPass($idUser, $pass);
                    $_SESSION['thongbao'] = "Mật Khẩu Đã được thay đổi thành công";
                    // header("location: index.php?act=thongbao");
                }
                if ($thanhcong == false) {
                    $_SESSION['thongbao'] = $thongbao;
                    // header("location: index.php?act=thongbao");
                }
            }
            require_once "views/doimk.php";
            break;
        case 'showve';
        $Array = array();
        $showAllSanBay = showAllSanBay();    
        $diemDi = $_GET['diemdi'];
        $diemDen = $_GET['diemden'];
        $ngayDi = $_GET['ngaydi'];
        $loaiGhe = $_GET['loaighe'];

        $nguoiLon = $_GET['nguoilon'];
        $treEm = $_GET['treem'];
        $emBe = $_GET['embe'];

        settype($diemDi,"int");
        settype($diemDen,"int");
        settype($loaiGhe,"int");
        settype($nguoiLon,"int");
        settype($treEm,"int");
        settype($emBe,"int");
       

        if($diemDi == '')
        {
            $error = "Vui lòng chọn điểm đi.";
        }
        elseif($diemDen == '')
        {
            $error = "Vui lòng chọn điểm đến.";
        }
        elseif($loaiGhe == '')
        {
            $error = "Vui lòng chọn loại ghế.";
        }
        elseif($nguoiLon <= 0)
        {
            $error = "Số người phải lớn hơn 0.";
        }
        elseif($emBe>$nguoiLon)
        {
            $error = "Số em bé không được lớn hơn số người lớn.";
        }elseif($treEm< 0)
        {
            $error = "Số trẻ em phải lớn hơn hoặc bằng 0";
        }
        elseif($emBe<0){
            $error = "Số em bé phải lớn hơn hoặc bằng 0";
        }
        if($error){
            echo $error;
        }   
        else{
            $urlve = http_build_query($_GET);
        
            // lưu session
            if(isset($_GET['ngayve'])&&($_GET['ngayve'])){
                $_SESSION['diemdi'] = $_GET['diemdi'];
                $_SESSION['diemden'] = $_GET['diemden'];
                $_SESSION['ngayve'] = $_GET['ngayve'];
                $_SESSION['urlve'] = $urlve;
            }
    
            if(isset($_GET['khuhoi'])&&($_GET['khuhoi'] == 1)){
                $ngayDi = $_SESSION['ngayve'];
                $diemDi = $_SESSION['diemden'];
                $diemDen = $_SESSION['diemdi'];
                unset($_SESSION['ngayve']);
                unset($_SESSION['diemdi']);
                unset($_SESSION['diemden']);
            }
    
        
            $soNguoi = $nguoiLon + $treEm;
            $showVeMotChieu = showVeMotChieu($diemDi, $diemDen, $ngayDi, $loaiGhe);
            if ($loaiGhe == 1) {
                foreach ($showVeMotChieu as $motGhe) {
                    $arr = explode(',', $motGhe['ttghethuong']);
                    if (array_count_values($arr)['0'] >= $soNguoi) {
                        array_push($Array, showVeSite($motGhe['id']));
                    }
                }
            } elseif ($loaiGhe == 2) {
                foreach ($showVeMotChieu as $motGhe) {
                    $arr = explode(',', $motGhe['ttghethuonggia']);
                    if (array_count_values($arr)['0'] >= $soNguoi) {
                        array_push($Array, showVeSite($motGhe['id']));
                    }
                }
            }
            if($Array){
                if(!empty($Array)){
                    $Array = json_encode($Array);
                }
            }else{
                echo '<div class="col-lg-8">
                        <div class="row mt-5">
                            <div class="col-lg-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-6 pr-2 mr-2">
                                        <h3>Không có chuyến bay nào cả</h3>
                                    </div>
                                    <div class="col-lg-2 pr-2 mr-2">
                                        <div class="form-group">
                                            <a href="index.php"><button type="submit" name="act" id="" value="showve" class="btn btn-submit text-center">Đổi chuyến</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            } 
        }
            include_once 'views/timkiem.php';
            break;
        case 'chonve':

            if (isset($_GET['idcb']) && ($_GET['idcb']) > 0) {
                
                $idChuyenBay = $_GET['idcb'];        
                echo ' <link rel="stylesheet" href="views/css/long/chonghe.css">';
                $loaiGhe = $_GET['loaighe'];
                if($loaiGhe == 1){
                    echo "<script src='views/jquery/showghept.js'></script>";
                    $getGheThuong = renderHtml($idChuyenBay, 'ttghethuong');
                    require_once 'views/chonghethuong.php';
                }else if($loaiGhe == 2){
                    echo "<script src='views/jquery/showghetg.js'></script>";
                    $getGheTg = renderHtml($idChuyenBay, 'ttghethuonggia');
                    require_once 'views/chonghethuonggia.php';
                }
            }
            break;

        case 'thanhtoan':
            require_once "views/thanhtoan.php";
            break;
        case 'tinhtien':
            // print_r($_SESSION);
            $tongTien = 0;
            $Arr = showVeSite($_SESSION['idchuyenbay']);
            for ($i=0; $i <count($_SESSION['vitrighe']); $i++) { 
                if($_SESSION['hangghe'] == 1 ){
                    $giaTien = $Arr['0']['giavethuong'];
                }
                elseif($_SESSION['hangghe'] == 2){
                    $giaTien = $Arr['0']['giavethuonggia'];
                }
                $tongTien += $giaTien;
            }
            $ArrKh = showVeSite($_SESSION['idchuyenbaykh']);
            for ($i=0; $i < count($_SESSION['vitrighekh']); $i++) { 
                if($_SESSION['hangghekh'] == 1 ){
                    $giaTienKh = $ArrKh['0']['giavethuong'];
                }
                elseif($_SESSION['hangghekh'] == 2){
                    $giaTienKh = $ArrKh['0']['giavethuonggia'];
                }
                $tongTien += $giaTienKh;
            }
            $maThanhToan =md5(date("h:i:s"),FALSE);
            require_once "views/vnpay.php";
        break;
        case 'ttthanhcong':
            // print_r($_SESSION);
            // print_r(showViTriGhe(210));
            if(isset($_SESSION['idhd'])){
                setThanhCong($_SESSION['idhd']);
                $id=$_SESSION['idhd'];
                $random = rand(1,1000000);
                $sendmalve=sendmailve($_SESSION['idhd']);
                addradom($id,$random);
                $email=$sendmalve['email'];
            
                // start mail
                $userName = 'datvemaybayy@gmail.com';
                $passWord = 'Datvemaybay123';
                $from = 'datvemaybayy@gmail.com';
                $title = 'Thông Tin Vé';
                $subject = 'Thông Tin Vé';
                $linkKH = '<body>
                <div class="row" style=" width: 40%;">
                    <h2>Vé Điện Tư Và Xác Nhận Hành Trình</h2>
                    <p style="font-size: 1.2em; font-family: sans-serif;">1.Thông tin đật chổ</p>
                    <p style="color: red;font-size: 1.2em; font-weight: bold; font-family: sans-serif;">Vui lòng thanh toán trước 09:30 1/12/2013 sau khi hêt hạn vé sẽ bị hủy</p>
                    <table style="text-align: center;">
                        <?php
                            foreach ($sendmalve as $m ) {
              
                        ?>
                        <tr>
                            <th style="float:left;">Mã Đặt Chổ</th>
                            <th style="width: 20%;">Trạng Thái Đặt Chổ</th>
                            <th>Thông Tin</th>
                        </tr>
                        <tr>
                            <th rowspan="4 "><span style="color: red; float:left; "></span></th>
                            <th>Ngày Đặt</th>
                            <td style="text-align: center; ">'.$m['ngaydatve'].'</td>
                        </tr>
                        <tr>
                            <th>Tên</th>
                            <td style="text-align: center; ">'.$m['tenkh'].'</td>
                        </tr>
                        <tr>
                            <th>Liên Lạc</th>
                            <td style="text-align: center; ">'.$m['dienthoai'].' </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td style="text-align: center; ">'.$m['cmnd'].'</td>
                        </tr>
                    </table>
                    <p style="font-size: 1.2em; font-family: sans-serif;">2.Thông tin Khách Hàng</p>
                    <table>
                        <tr>
                            <th style="float: left;">Tên Khách Hàng</th>
                            <th style=" width: 22%;">Ghế Ngồi</th>
                        </tr>
                        <tr>
                            <td style="float: left;">'.$m['tenkh'].'</td>
                            <td>Hàng Ghế:'.$m['hangghe'].' Vị Trí: '.$m['vitringoi'].'</td>
                        </tr>
                    </table>
                    <p style="font-size: 1.2em; font-family: sans-serif;">3.Thông tin Chuyến Bay</p>\
                    <table>
                        <tr>
                            <th style="float: left;">Chuyến Bay</th>
                            <th style=" width: 6%;">Ngày</th>
                            <th>Khởi Hành</th>
                            <th>Đến</th> 
                            <th>Thời Guan Khởi Hành</th>
                        </tr>
                        <tr>
                            <td>'.tenmaybay(idmaybay($m['idchuyenbay'])).' </td>
                            <td style="text-align: center; ">'.showngaydi($m['idchuyenbay']).'</td>
                            <td style="text-align: center; ">'.  showtensanbay(showiddiemdi(showidtuyenduong($k['idchuyenbay']))).'</td>
                            <td style="text-align: center; ">'.  showtensanbay(showiddiemden(showidtuyenduong($k['idchuyenbay']))).'</td>
                            <td style="text-align: center; ">'. showgiodi($k['idchuyenbay']).'</td>
                        </tr>
                            <?php } ?>
                    </table>
                </div>
            </body>
                    ';
                $linkKH = sprintf($linkKH, $idUser, $randomKey);
                $body = "<h4>Thông Tin Chuyến Bay</h4>Thông Tin Chuyến Bay: " . $linkKH;
                sendMail($userName, $passWord, $from, $email, $user, $title, $subject, $body);
            
            }
            if(isset($_SESSION['idchuyenbay'])){
                if($_SESSION['hangghe'] == 1){
                    $loaiGhe = 'ttghethuong';
                }else{
                    $loaiGhe = 'ttghethuonggia';
                }
                setGheThanhCong($_SESSION['vitrighe'],$_SESSION['idchuyenbay'],$loaiGhe);
            }

            if(isset($_SESSION['idhdkh'])){
                setThanhCong($_SESSION['idhdkh']); 
            }
            if(isset($_SESSION['idchuyenbaykh'])){
                if($_SESSION['hangghekh'] == 1){
                    $loaiGheKh = 'ttghethuong';
                }else{
                    $loaiGheKh = 'ttghethuonggia';
                }
                setGheThanhCong($_SESSION['vitrighekh'],$_SESSION['idchuyenbaykh'],$loaiGheKh);
            }
            // print_r($_SESSION);
            // unset($_SESSION['idchuyenbay']);
            // unset($_SESSION['hangghe']);
            // unset($_SESSION['urlve']);
            // unset($_SESSION['vitrighe']);
            // unset($_SESSION['vitrighekh']);
            // unset($_SESSION['idchuyenbaykh']);
            // unset($_SESSION['hangghekh']);
            // unset($_SESSION['idhd']);
            // unset($_SESSION['idhdkh']);
            require_once "views/vnpay_return.php";
        break;
        case 'timve':
            include "views/timve.php";
            if(isset($_POST["submit"]) && $_POST["user"] != '' && $_POST["sodienthoai"] != '' ) {
                $tenkh = $_POST["user"];
                $dienthoai = $_POST["sodienthoai"];
               // goi function
               if($dienthoai == ''){
                   echo "Vui Lòng Nhập số điện thoại";
               }elseif($tenkh==""){
                   echo "Vui Lòng Nhập Tên";
               }else{
                   $timve = showtimKH($dienthoai,$tenkh);
                   require_once "views/thongtinve.php";
               }
            }
    


        break;

        case 'thongtinve':
            unsetSs();
            require_once "views/thongtinve.php";
            break;

        default:
            require_once "views/home.php";
            break;
    }

} else {
    require_once "views/home.php";
}
require_once "views/layouts/footer.php";
?>