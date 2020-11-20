<?php 
    $img = $pathimg.$getBlogbyid['img'];    
?>

<main>
    <section class="background-grey-1 padding-tb-25px text-grey-4">
        <div class="container">
            <h6 class="font-weight-300 text-capitalize float-md-left font-2 padding-tb-10px">Chi tiết Blog</h6>
            <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>                
                <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog</div>   
                <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog Detail</div>      
            </ol>
            <div class="clearfix"></div>
        </div>
    </section>
<!-- // -->
<div class="container dbg-lightgrey padding-tb-40px">
    <div class="row">
        <!-- cot noi dung ben trai -->
        <div class="col-lg-8 col-md-8">
            <div class="theiaStickySidebar">
                    <div class="blog-entry dbackground-white border-1 border-grey-1 margin-bottom-35px">

                            <img src="<?=$img?>" alt="Image" style="height: 400px;" class="responsiveImg"/>
                        <!-- noidung ne -->
                        <div class="padding-30px">
                            <!-- phan thong tin duoi img -->
                            <div class="meta">
                                <span class="margin-right-20px dtext-extra-small">
                                    By: 
                                    <a href="#" class="dtext-main-color"><?=$getBlogbyid['tacgia']?></a>
                                </span>
                                <span class="margin-right-20px dtext-extra-small">
                                    Date:
                                    <a href="#" class="dtext-main-color"><?=$getBlogbyid['date']?></a>
                                </span>
                                <span class="dtext-extra-small">
                                    Tag:
                                    <a href="#" class="dtext-main-color "><?=$getBlogbyid['tag']?></a>
                                </span>
                            </div>
                            <!-- tieu de cua noi dung -->
                            <h1 class="d-block  text-capitalize text-large text-dark font-weight-700 margin-bottom-10px">
                                <?=$getBlogbyid['name']?>
                            </h1>
                            <!-- noidung -->
                            <?=$getBlogbyid['noidung']?>
                        </div>
                    </div>
                    <!-- tac gia  -->
                    <!-- box3 -->                    
                    <!-- box4 -->
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Bình luận</span>
                        </h4>
                        <!-- nguoibl -->
                        <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                            <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                <img src="./demo-img/hieu.jpg" class="float-left img100 margin-right-20px margin-bottom-20px"  alt="">
                                <div class="margin-left-85px">
                                    <!-- ten nguoi bl -->
                                    <a href="#" class="d-block text-dark text-uppercase text-medium font-weight-700">Hieu dep trai</a>
                                    <span class="text-extra-small">
                                        Date:
                                        <a href="#" class="text-main-color">Ngày/tháng/năm</a>
                                    </span>
                                    <p class="margin-top-15px">
                                        hay quá chời ... 
                                    </p>
                                </div>
                            </li>
                            <!-- ngbl tra loi -->

                                <div class="border-bottom-1 border-grey-1 margin-bottom-20px margin-left-55px">
                                        <img src="./demo-img/hieu.jpg" class="float-left img100 margin-right-20px margin-bottom-20px" alt="">
                                        <div class="margin-left-85px">
                                        <!-- ten -->
                                        <a href="#" class="d-block text-dark text-uppercase text-medium font-weight-700">Hieu Xau trai</a>
                                        <span class="text-extra-small">Date:
                                            <a href="#" class="text-main-color">ngày/tháng/năm</a>
                                        </span>
                                        <!-- binh luan -->
                                        <p class="margin-top-15px">
                                            Đúng rồi...
                                        </p>
                                        </div>
                                </div>

                                <!-- ng bl 2 -->
                                <div class="border-bottom-1 border-grey-1 margin-bottom-20px margin-left-55px">
                                    <img src="./demo-img/hieu.jpg" class="float-left img100 margin-right-20px margin-bottom-20px" alt="">
                                    <div class="margin-left-85px">
                                        <!-- ten -->
                                        <a href="#" class="d-block text-dark text-uppercase text-medium font-weight-700">Hieu Xau trai</a>
                                        <span class="text-extra-small">Date:
                                            <a href="#" class="text-main-color">ngày/tháng/năm</a>
                                        </span>
                                        <!-- binh luan -->
                                        <p class="margin-top-15px">
                                            tao đồng ý với thằng trên
                                        </p>
                                    </div>
                                </div>
                        </ul>
                    </div>
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Thêm bình luận</span>
                        </h4>
                            <!-- form -->
                            <form action="">
                                    <div class="form-row fz15px font-weight-700 ">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Tên:</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nhập tên "> 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputName">Email:</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nhập email hoặc số điện thoại"> 
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="Web">Website:</label>
                                            <input type="text"class="form-control" id="Web" placeholder="Website">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="binhluan">Bình luận:</label>
                                            <textarea class="form-control" name="binhluan" id="binhluan" spellcheck="false" placeholder="Bình luận" rows="3"></textarea>
                                        </div>
                                        
                                        <a href="#" class="btn btn-primary btn-lg btn-block margin-top-15px">Gửi </a>
                                    </div>
                            </form>
                            </div>
                        </h4>
                    </div>
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Bài viết liên quan</span>
                        </h4>
                        <div class="row">
                        <?php foreach($getBlogByiddm as $blogByiddm) { ?>
                            <div class="col-lg-6">
                                <div class="background-white">
                                    <div class="post-img">
                                        <a href="#">
                                            <img src="<?=$pathimg.$blogByiddm['img']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="margin-top-30px">
                                        <a href="" class="d-block text-dark text-uppercase text-medium margin-bottom-10px font-weight-700"></a>
                                        <span class="margin-right-20px text-extra-small">
                                            By :
                                            <a href="#" class="text-main-color"><?=$blogByiddm['tacgia']?></a>
                                        </span>
                                        <span class="text-extra-small">
                                            Date :
                                            <a href="#" class="text-main-color"><?=$blogByiddm['date']?></a>
                                        </span>
                                        <p class="text-grey-2 margin-top-8px">
                                            <?=$blogByiddm['name']?>
                                        </p>
                                    </div>
                                </div>
                            </div>    
                        <?php } ?>                       
                        </div>
                    </div>
            </div>        
        <!-- cot email ben phai -->        
        <div class="col-lg-4 col-md-8 sticky-content "  style=" position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            <div class="theiaStickySidebar " style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="widget">
                    <!-- tieu de -->
                    <h4 class="widget-title clearfix">
                        <span>Email</span>
                    </h4>
                    <!-- mieu ta -->
                    <p>Hãy cho chúng tôi email hoặc số điện thoại để nhận được những thông tin và sự kiện du lịch đặc biệt trên thế giới.
                        Hãy để chúng tôi giúp bạn!
                    </p>
                    <!-- input -->
                    <input class="form-control rounded-0" type="text" placeholder="Điền email hoặc số điện thoại">
                    <a href="#" class="btn text-white text-uppercase text-small btn-block margin-top-15px background-grey-3 rounded-0 border-0">Gửi thông tin!</a>
                </div>
                <div class="widget widget_categories">
                    <h4 class="widget-title clearfix">
                        <span>Thư mục</span>
                    </h4>
                    <?php foreach($getDmblog as $dmBlog) { ?>
                    <ul>
                        <li><a href="<?=$dmBlog['id']?>"><?=$dmBlog['name']?></a></li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="widget">
                    <h4 class="widget-title clearfix">
                        <span>Top blog</span>
                    </h4>
                    <?php foreach($getbestBlog as $bestBlog) { ?>
                    <ul class="last-posts">
                        <li>
                        <a href="#" class="float-left margin-right-15px d-block width-60px">
                            <img src="<?=$pathimg.$bestBlog['img']?>" alt="">
                        </a>
                        <a href="#" class="d-block  text-uppercase text-medium text-dark font-weight-700"><?=$bestBlog['name']?></a>
                        <span class="text-extra-small">
                            Date
                            <a href="#" class="text-main-color"><?=$bestBlog['date']?></a>
                        </span>
                    </ul>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 sticky-content-fixed "  style=" ">
            <div class="theiaStickySidebar " style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="widget">
                    <!-- tieu de -->
                    <h4 class="widget-title clearfix">
                        <span>Email</span>
                    </h4>
                    <!-- mieu ta -->
                    <p>Hãy cho chúng tôi email hoặc số điện thoại để nhận được những thông tin và sự kiện du lịch đặc biệt trên thế giới.
                        Hãy để chúng tôi giúp bạn!
                    </p>
                    <!-- input -->
                    <input class="form-control rounded-0" type="text" placeholder="Điền email hoặc số điện thoại">
                    <a href="#" class="btn text-white text-uppercase text-small btn-block margin-top-15px background-grey-3 rounded-0 border-0">Gửi thông tin!</a>
                </div>
                <div class="widget widget_categories">
                    <h4 class="widget-title clearfix">
                        <span>Thư mục</span>
                    </h4>
                    <?php foreach($getDmblog as $dmBlog) { ?>
                    <ul>
                        <li><a href="<?=$dmBlog['id']?>"><?=$dmBlog['name']?></a></li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="widget">
                    <h4 class="widget-title clearfix">
                        <span>Top blog</span>
                    </h4>
                    <?php foreach($getbestBlog as $bestBlog) { ?>
                    <ul class="last-posts">
                        <li>
                        <a href="#" class="float-left margin-right-15px d-block width-60px">
                            <img src="<?=$pathimg.$bestBlog['img']?>" alt="">
                        </a>
                        <a href="#" class="d-block  text-uppercase text-medium text-dark font-weight-700"><?=$bestBlog['name']?></a>
                        <span class="text-extra-small">
                            Date
                            <a href="#" class="text-main-color"><?=$bestBlog['date']?></a>
                        </span>
                    </ul>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>