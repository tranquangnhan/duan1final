<!doctype html>
<html lang="en">

<head>
    <title>admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <base href="/admin/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="views/css/chonghe.css">
    <link rel="stylesheet" href="views/css/timve.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../site/views/css/nhan/SweetAlert2.css">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="views/css/style.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
    <!-- start header -->
    <header>
        <div class="navhead bg-black">
            <div class="row">
                <div class="col-lg-3">
                    <nav class="navbar navbar-expand-sm navbar-dark ">
                        <a class="navbar-brand mr-5" href="#">
                            <svg class="mt-2" id="Layer_1" data-name="Layer 1" width="170" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 370.52 71.04"><defs><style>.cls-1{fill:#ddd;}.cls-2{isolation:isolate;}</style></defs><title>logo (8)</title><path class="cls-1" d="M90.88,22.24,51.38,1a7.9,7.9,0,0,0-7.44,0L4.28,21.78a7.91,7.91,0,0,0-4.23,7v13.1a7.88,7.88,0,0,0,4.13,7L43.27,70.12a7.9,7.9,0,0,0,7.38.1L90.73,49.78a8,8,0,0,0,4.32-7.06V29.24A7.92,7.92,0,0,0,90.88,22.24ZM48.29,49.42,30.12,40.83l-28,4.91L47.8,21.68,65.72,32,93,25.37Z" transform="translate(-0.04 -0.04)"/><g class="cls-2"><g class="cls-2"><path class="cls-1" d="M117,21.87a3.64,3.64,0,0,1-2.63,1.05,3.58,3.58,0,0,1-2.61-1.05,3.44,3.44,0,0,1-1.06-2.54,3.47,3.47,0,0,1,1.06-2.57,3.58,3.58,0,0,1,2.61-1.05A3.64,3.64,0,0,1,117,16.76a3.56,3.56,0,0,1,0,5.11Zm-5.93,33V26.63h6.63V54.86Z" transform="translate(-0.04 -0.04)"/></g><g class="cls-2"><path class="cls-1" d="M122.59,16.43h14q8.63,0,13.45,5t4.82,14.12q0,9.14-4.82,14.22t-13.45,5.09h-14Zm6.87,5.8V49.05h6.45q5.81,0,8.89-3.46t3.09-10q0-6.45-3.11-9.9t-8.87-3.45Z" transform="translate(-0.04 -0.04)"/></g><g class="cls-2"><path class="cls-1" d="M166.53,55.31a9.8,9.8,0,0,1-6.78-2.37,7.89,7.89,0,0,1-2.65-6.15,7.15,7.15,0,0,1,2.79-5.94q2.78-2.19,8-2.5l7.46-.43v-2a4.34,4.34,0,0,0-1.4-3.44A5.7,5.7,0,0,0,170,31.23a6.42,6.42,0,0,0-3.78,1,4.3,4.3,0,0,0-1.79,2.83H158.3a8.51,8.51,0,0,1,3.45-6.54A13.51,13.51,0,0,1,170.29,26a12.9,12.9,0,0,1,8.4,2.56,8.31,8.31,0,0,1,3.16,6.82V54.86h-6.39v-4.5h-.14A8.8,8.8,0,0,1,171.7,54,10.57,10.57,0,0,1,166.53,55.31Zm2-5a7.11,7.11,0,0,0,4.81-1.7,5.35,5.35,0,0,0,2-4.22V42.24l-6.53.39a6.75,6.75,0,0,0-3.72,1.19,3.24,3.24,0,0,0-1.31,2.7,3.3,3.3,0,0,0,1.31,2.76A5.54,5.54,0,0,0,168.53,50.31Z" transform="translate(-0.04 -0.04)"/><path class="cls-1" d="M185.58,34.72a7.54,7.54,0,0,1,3.14-6.28A13.3,13.3,0,0,1,197,26a12.63,12.63,0,0,1,8.06,2.44,8.07,8.07,0,0,1,3.24,6.35h-6.18A3.86,3.86,0,0,0,200.57,32a6,6,0,0,0-3.7-1,5.91,5.91,0,0,0-3.51.94A2.92,2.92,0,0,0,192,34.35q0,2.34,4,3.33l5,1.12c2.82.66,4.84,1.58,6,2.77A6.59,6.59,0,0,1,209,46.5,7.68,7.68,0,0,1,205.61,53a14.38,14.38,0,0,1-8.71,2.46A13.77,13.77,0,0,1,188.41,53a8.65,8.65,0,0,1-3.55-6.46h6.52a4.24,4.24,0,0,0,1.78,3,6.73,6.73,0,0,0,4,1,6.83,6.83,0,0,0,3.82-.92,2.84,2.84,0,0,0,1.4-2.49,2.41,2.41,0,0,0-.87-1.95,7.61,7.61,0,0,0-2.91-1.27l-5.14-1.2Q185.58,40.91,185.58,34.72Z" transform="translate(-0.04 -0.04)"/><path class="cls-1" d="M212.3,54.86V16.43h6.55V31.48H219a8.62,8.62,0,0,1,3.44-4,10.31,10.31,0,0,1,5.48-1.4,9.41,9.41,0,0,1,7.26,2.84,11,11,0,0,1,2.63,7.74V54.86h-6.64V38a6.72,6.72,0,0,0-1.48-4.66,5.49,5.49,0,0,0-4.32-1.66,6.07,6.07,0,0,0-4.71,1.9,7.2,7.2,0,0,0-1.71,5V54.86Z" transform="translate(-0.04 -0.04)"/><path class="cls-1" d="M257.79,55.31a10.37,10.37,0,0,1-5.39-1.38A9.25,9.25,0,0,1,248.81,50h-.13v4.82h-6.5V16.43h6.63V31.48H249a9,9,0,0,1,3.52-3.92,10,10,0,0,1,5.3-1.41,10.32,10.32,0,0,1,8.5,3.93q3.13,3.93,3.14,10.66T266.3,51.41A10.33,10.33,0,0,1,257.79,55.31Zm-2.05-23.7a6,6,0,0,0-5,2.51,10.58,10.58,0,0,0-1.93,6.62,10.56,10.56,0,0,0,1.93,6.64,6.35,6.35,0,0,0,10.07,0,10.92,10.92,0,0,0,1.85-6.68,10.76,10.76,0,0,0-1.87-6.67A6,6,0,0,0,255.74,31.61Z" transform="translate(-0.04 -0.04)"/><path class="cls-1" d="M295.08,51.49a14.59,14.59,0,0,1-19.92,0q-3.71-3.93-3.7-10.75c0-4.52,1.24-8.11,3.72-10.74a14.47,14.47,0,0,1,19.89,0c2.48,2.63,3.71,6.22,3.71,10.74S297.55,48.87,295.08,51.49Zm-15-3.79a6.42,6.42,0,0,0,10.12,0,11.41,11.41,0,0,0,1.86-7,11.37,11.37,0,0,0-1.86-6.93,6.38,6.38,0,0,0-10.11,0,11.3,11.3,0,0,0-1.88,6.93A11.34,11.34,0,0,0,280.06,47.7Z" transform="translate(-0.04 -0.04)"/><path class="cls-1" d="M310.26,55.31a9.76,9.76,0,0,1-6.77-2.37,7.86,7.86,0,0,1-2.65-6.15,7.14,7.14,0,0,1,2.78-5.94q2.78-2.19,7.95-2.5l7.46-.43v-2a4.34,4.34,0,0,0-1.4-3.44,5.68,5.68,0,0,0-3.88-1.23,6.42,6.42,0,0,0-3.78,1,4.25,4.25,0,0,0-1.78,2.83H302a8.57,8.57,0,0,1,3.45-6.54A13.53,13.53,0,0,1,314,26a12.9,12.9,0,0,1,8.4,2.56,8.31,8.31,0,0,1,3.16,6.82V54.86h-6.39v-4.5h-.14A8.8,8.8,0,0,1,315.43,54,10.54,10.54,0,0,1,310.26,55.31Zm2-5a7.11,7.11,0,0,0,4.81-1.7,5.32,5.32,0,0,0,2-4.22V42.24l-6.53.39a6.69,6.69,0,0,0-3.71,1.19,3.24,3.24,0,0,0-1.32,2.7,3.3,3.3,0,0,0,1.32,2.76A5.49,5.49,0,0,0,312.26,50.31Z" transform="translate(-0.04 -0.04)"/></g><g class="cls-2"><path class="cls-1" d="M328.17,54.86V26.63h6.37v4.92h.13a7.5,7.5,0,0,1,2.49-4,6.66,6.66,0,0,1,4.28-1.41,10.22,10.22,0,0,1,2.07.26v6a7.72,7.72,0,0,0-2.69-.38,5.76,5.76,0,0,0-4.42,1.71,6.62,6.62,0,0,0-1.6,4.69V54.86Z" transform="translate(-0.04 -0.04)"/></g><g class="cls-2"><path class="cls-1" d="M355,55.31a10.42,10.42,0,0,1-8.54-3.94q-3.18-3.94-3.18-10.65t3.18-10.63A10.42,10.42,0,0,1,355,26.15a9.94,9.94,0,0,1,5.29,1.41,8.94,8.94,0,0,1,3.45,3.81h.16V16.43h6.63V54.86h-6.5V50H364a9,9,0,0,1-3.53,3.85A10.21,10.21,0,0,1,355,55.31Zm2-23.7A6,6,0,0,0,352,34.07a10.76,10.76,0,0,0-1.87,6.67A10.87,10.87,0,0,0,352,47.43a6.42,6.42,0,0,0,10.11,0A10.71,10.71,0,0,0,364,40.74a10.7,10.7,0,0,0-1.89-6.64A6,6,0,0,0,357,31.61Z" transform="translate(-0.04 -0.04)"/></g></g>
                        </svg>
                    </a>
                    </nav>
                </div>
                <div class="col-lg-6">
                    <ul class="yoo-nav-list">
                        <li>
                            <a href="#">
                                <svg width="30" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M368 96H144a16 16 0 010-32h224a16 16 0 010 32zM400 144H112a16 16 0 010-32h288a16 16 0 010 32zM419.13 448H92.87A44.92 44.92 0 0148 403.13V204.87A44.92 44.92 0 0192.87 160h326.26A44.92 44.92 0 01464 204.87v198.26A44.92 44.92 0 01419.13 448z"></path></svg>
                                <ion-icon name="albums" role="img" class="md hydrated" aria-label="albums"></ion-icon>Tất Cả Tệp
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="30" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M396 432H136c-36.44 0-70.36-12.57-95.51-35.41C14.38 372.88 0 340 0 304c0-36.58 13.39-68.12 38.72-91.22 18.11-16.53 42.22-28.25 69.18-33.87a16 16 0 0011.37-9.15 156.24 156.24 0 0142.05-56C187.76 91.69 220.5 80 256 80a153.57 153.57 0 01107.14 42.9c24.73 23.81 41.5 55.28 49.18 92a16 16 0 0012.12 12.39C470 237.42 512 270.43 512 328c0 33.39-12.24 60.78-35.41 79.23C456.23 423.43 428.37 432 396 432z"></path></svg>
                                <ion-icon name="cloud" role="img" class="md hydrated" aria-label="cloud"></ion-icon> Liên Hệ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <ul class="yoo-nav-list">
                                <li>
                                    <svg width="30" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M424 80H88a56.06 56.06 0 00-56 56v240a56.06 56.06 0 0056 56h336a56.06 56.06 0 0056-56V136a56.06 56.06 0 00-56-56zm-14.18 92.63l-144 112a16 16 0 01-19.64 0l-144-112a16 16 0 1119.64-25.26L256 251.73l134.18-104.36a16 16 0 0119.64 25.26z"></path></svg>
                                </li>
                                <li>
                                    <svg width="30" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M440.08 341.31c-1.66-2-3.29-4-4.89-5.93-22-26.61-35.31-42.67-35.31-118 0-39-9.33-71-27.72-95-13.56-17.73-31.89-31.18-56.05-41.12a3 3 0 01-.82-.67C306.6 51.49 282.82 32 256 32s-50.59 19.49-59.28 48.56a3.13 3.13 0 01-.81.65c-56.38 23.21-83.78 67.74-83.78 136.14 0 75.36-13.29 91.42-35.31 118-1.6 1.93-3.23 3.89-4.89 5.93a35.16 35.16 0 00-4.65 37.62c6.17 13 19.32 21.07 34.33 21.07H410.5c14.94 0 28-8.06 34.19-21a35.17 35.17 0 00-4.61-37.66zM256 480a80.06 80.06 0 0070.44-42.13 4 4 0 00-3.54-5.87H189.12a4 4 0 00-3.55 5.87A80.06 80.06 0 00256 480z"></path></svg>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="yoo-toggle-body yoo-profile-nav yoo-style1">
                                <div class="yoo-toggle-btn yoo-profile-nav-btn">
                                    <div class="yoo-profile-nav-text mt-2">
                                        <h6 class="my-0"><?php echo $_SESSION['suser'];?></h6>
                                        <a href="controllers/login.php?act=logout&idout=1" class="text-warning">Đăng Xuất ?</a>
                                    </div>
                                    <div class="yoo-profile-nav-img">
                                        <?php if(isset($_SESSION['adimg'])) {?>
                                        <img src="<?php echo $_SESSION['adimg']?>" class="logo" alt="profile">
                                        <?php }else{?>
                                            <img src="views/img/logo.jpg" class="logo" alt="profile">
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!-- end header -->
    <!-- start main -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 nav-left bg-white">
                    <div class="yoo-sidebar-search">
                        <form action="#" class="yoo-search yoo-style1 yoo-search-md">
                            <input type="text" id="search_text" placeholder="Tìm..." class="yoo-search-input">
                            <div class="yoo-voice-btn"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0034.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 00327.3 362.6l94.09 94.09a25 25 0 0035.3-35.3zM97.92 222.72a124.8 124.8 0 11124.8 124.8 124.95 124.95 0 01-124.8-124.8z"></path></svg></div>
                            <div class="yoo-voice-btn2">
                                <i class="fa fa-microphone"></i>
                            </div>
                        </form>
                    </div>
                    <div class="nav-main mt-3">
                        <ul>
                            <li class="<?php if(!isset($_GET['ctrl'])) echo "active";?>">
                                <a href="index.php" class="nav-link">
                                    <div class="nav-main__icon"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M256 256c-13.47 0-26.94-2.39-37.44-7.17l-148-67.49C63.79 178.26 48 169.25 48 152.24s15.79-26 22.58-29.12l149.28-68.07c20.57-9.4 51.61-9.4 72.19 0l149.37 68.07c6.79 3.09 22.58 12.1 22.58 29.12s-15.79 26-22.58 29.11l-148 67.48C282.94 253.61 269.47 256 256 256zm176.76-100.86z"></path><path d="M441.36 226.81L426.27 220l-38.77 17.74-94 43c-10.5 4.8-24 7.19-37.44 7.19s-26.93-2.39-37.42-7.19l-94.07-43L85.79 220l-15.22 6.84C63.79 229.93 48 239 48 256s15.79 26.08 22.56 29.17l148 67.63C229 357.6 242.49 360 256 360s26.94-2.4 37.44-7.19l147.87-67.61c6.81-3.09 22.69-12.11 22.69-29.2s-15.77-26.07-22.64-29.19z"></path><path d="M441.36 330.8l-15.09-6.8-38.77 17.73-94 42.95c-10.5 4.78-24 7.18-37.44 7.18s-26.93-2.39-37.42-7.18l-94.07-43L85.79 324l-15.22 6.84C63.79 333.93 48 343 48 360s15.79 26.07 22.56 29.15l148 67.59C229 461.52 242.54 464 256 464s26.88-2.48 37.38-7.27l147.92-67.57c6.82-3.08 22.7-12.1 22.7-29.16s-15.77-26.07-22.64-29.2z"></path></svg></div>
                                    <div class="nav-main__text">Trang Chủ</div>
                                </a>
                            </li>
                            <li>
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z"></path><path d="M386.34 193.66L264.45 315.79A41.08 41.08 0 01247.58 326l-25.9 8.67a35.92 35.92 0 01-44.33-44.33l8.67-25.9a41.08 41.08 0 0110.19-16.87l122.13-121.91a8 8 0 00-5.65-13.66H104a56 56 0 00-56 56v240a56 56 0 0056 56h240a56 56 0 0056-56V199.31a8 8 0 00-13.66-5.65z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Bài Viết </div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=baiviet&act=add">Thêm Mới</a></li>
                                                <li><a href="index.php?ctrl=baiviet&act=index">Bài Viết</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="binhluan") echo "active";?>">
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M368 96H144a16 16 0 010-32h224a16 16 0 010 32zM400 144H112a16 16 0 010-32h288a16 16 0 010 32zM419.13 448H92.87A44.92 44.92 0 0148 403.13V204.87A44.92 44.92 0 0192.87 160h326.26A44.92 44.92 0 01464 204.87v198.26A44.92 44.92 0 01419.13 448z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Bình Luận</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=binhluan&act=add">Thêm Mới</a></li>
                                                <li><a href="index.php?ctrl=binhluan&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="loaihang") echo "active";?>">
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M368 96H144a16 16 0 010-32h224a16 16 0 010 32zM400 144H112a16 16 0 010-32h288a16 16 0 010 32zM419.13 448H92.87A44.92 44.92 0 0148 403.13V204.87A44.92 44.92 0 0192.87 160h326.26A44.92 44.92 0 01464 204.87v198.26A44.92 44.92 0 01419.13 448z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Danh Mục</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=loaihang&act=add">Thêm Mới</a></li>
                                                <li><a href="index.php?ctrl=loaihang&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="ve") echo "active";?>">
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M440.9 136.3a4 4 0 000-6.91L288.16 40.65a64.14 64.14 0 00-64.33 0L71.12 129.39a4 4 0 000 6.91L254 243.88a4 4 0 004.06 0zM54 163.51a4 4 0 00-6 3.49v173.89a48 48 0 0023.84 41.39L234 479.51a4 4 0 006-3.46V274.3a4 4 0 00-2-3.46zM272 275v201a4 4 0 006 3.46l162.15-97.23A48 48 0 00464 340.89V167a4 4 0 00-6-3.45l-184 108a4 4 0 00-2 3.45z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Vé Máy Bay</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=ve&act=add">Thêm Mới</a></li>
                                                <li><a href="index.php?ctrl=ve&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="khachhang") echo "active";?>">
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M440.9 136.3a4 4 0 000-6.91L288.16 40.65a64.14 64.14 0 00-64.33 0L71.12 129.39a4 4 0 000 6.91L254 243.88a4 4 0 004.06 0zM54 163.51a4 4 0 00-6 3.49v173.89a48 48 0 0023.84 41.39L234 479.51a4 4 0 006-3.46V274.3a4 4 0 00-2-3.46zM272 275v201a4 4 0 006 3.46l162.15-97.23A48 48 0 00464 340.89V167a4 4 0 00-6-3.45l-184 108a4 4 0 00-2 3.45z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Khách Hàng</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=khachhang&act=add">Thêm Mới</a></li>
                                                <li><a href="index.php?ctrl=khachhang&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="lienhe") echo "active";?>">
                                <div class="nav-link">
                                    <div class="nav-main__icon" ><label for="bv"><svg width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M440.9 136.3a4 4 0 000-6.91L288.16 40.65a64.14 64.14 0 00-64.33 0L71.12 129.39a4 4 0 000 6.91L254 243.88a4 4 0 004.06 0zM54 163.51a4 4 0 00-6 3.49v173.89a48 48 0 0023.84 41.39L234 479.51a4 4 0 006-3.46V274.3a4 4 0 00-2-3.46zM272 275v201a4 4 0 006 3.46l162.15-97.23A48 48 0 00464 340.89V167a4 4 0 00-6-3.45l-184 108a4 4 0 00-2 3.45z"></path></svg></label></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Liên Hệ</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=lienhe&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="hoadon") echo "active";?>">
                                <div class="nav-link">
                                <div class="nav-main__icon"><svg  width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M396 432H136c-36.44 0-70.36-12.57-95.51-35.41C14.38 372.88 0 340 0 304c0-36.58 13.39-68.12 38.72-91.22 18.11-16.53 42.22-28.25 69.18-33.87a16 16 0 0011.37-9.15 156.24 156.24 0 0142.05-56C187.76 91.69 220.5 80 256 80a153.57 153.57 0 01107.14 42.9c24.73 23.81 41.5 55.28 49.18 92a16 16 0 0012.12 12.39C470 237.42 512 270.43 512 328c0 33.39-12.24 60.78-35.41 79.23C456.23 423.43 428.37 432 396 432z"></path></svg></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Hóa Đơn</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=hoadon&act=index">Danh Sách</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if(isset($_GET['ctrl']) &&$_GET['ctrl']=="timve") echo "active";?>">
                                <div class="nav-link">
                                <div class="nav-main__icon"><svg  width="25" xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><path d="M396 432H136c-36.44 0-70.36-12.57-95.51-35.41C14.38 372.88 0 340 0 304c0-36.58 13.39-68.12 38.72-91.22 18.11-16.53 42.22-28.25 69.18-33.87a16 16 0 0011.37-9.15 156.24 156.24 0 0142.05-56C187.76 91.69 220.5 80 256 80a153.57 153.57 0 01107.14 42.9c24.73 23.81 41.5 55.28 49.18 92a16 16 0 0012.12 12.39C470 237.42 512 270.43 512 328c0 33.39-12.24 60.78-35.41 79.23C456.23 423.43 428.37 432 396 432z"></path></svg></div>
                                    <div class="nav-main__text "><div id="bv" class="click_title">Chuyến Bay</div>
                                        <div class="menu-alert">
                                            <ul>
                                                <li><a href="index.php?ctrl=timve&act=timve">Tìm Vé</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>