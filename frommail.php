<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
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
                <td style="text-align: center; "><?=$m['ngaydatve']?></td>
            </tr>
            <tr>
                <th>Tên</th>
                <td style="text-align: center; "><?=$m['tenkh']?></td>
            </tr>
            <tr>
                <th>Liên Lạc</th>
                <td style="text-align: center; "><?=$m['dienthoai']?> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td style="text-align: center; "><?=$m['cmnd']?></td>
            </tr>
        </table>
        <p style="font-size: 1.2em; font-family: sans-serif;">2.Thông tin Khách Hàng</p>
        <table>
            <tr>
                <th style="float: left;">Tên Khách Hàng</th>
                <th style=" width: 22%;">Ghế Ngồi</th>
            </tr>
            <tr>
                <td style="float: left;"><?=$m['tenkh']?></td>
                <td>Hàng Ghế:<?=$m['hangghe']?> Vị Trí: <?=$m['vitringoi']?></td>
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
                <td><?=tenmaybay(idmaybay($m['idchuyenbay']))?> </td>
                <td style="text-align: center; "><?=showngaydi($m['idchuyenbay'])?></td>
                <td style="text-align: center; "><?=  showtensanbay(showiddiemdi(showidtuyenduong($k['idchuyenbay'])))?></td>
                <td style="text-align: center; "><?=  showtensanbay(showiddiemden(showidtuyenduong($k['idchuyenbay'])))?></td>
                <td style="text-align: center; "><?= showgiodi($k['idchuyenbay'])?></td>
            </tr>
                <?php } ?>
        </table>
    </div>
</body>

</html>