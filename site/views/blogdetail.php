<?php 
    session_start();
    $img = $pathimg.$getBlogbyid['img'];   
    // //print_r ($getKhbyId);
    // echo $user;
    // exit();
    // print_r ($getKhbyId);
    // echo $getKhbyId[0]['avatar'];
   // exit();
//    print_r ($binhluan);
//    exit();

?>

<main>
    <!-- <div class="fixed-blog-bg" style="background-image: url('');"> -->
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
    <!-- </div> -->
<!-- // -->
<div class="container dbg-lightgrey padding-tb-40px">
    <div class="row">
        <!-- cot noi dung ben trai -->
        <div class="col-lg-8 col-md-8">
            <div class="theiaStickySidebar">
                    <div class="blog-entry dbackground-white border-1 border-grey-1 margin-bottom-35px">
                            <img src="<?=$pathimg.$getBlogbyid['img']?>" alt="Image" style="height: auto;" class="responsiveImg"/>
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
                        <h4 class="table-title margin-bottom-30px" id="l-box-binhluan">
                            <span><?php echo $sobinhluan; ?> Bình luận</span>
                            <?php foreach ($binhluan as $bl) { ?>                            
                                <div class="binhluan" id="binhluan">                                    
                                    <div class="hinh">
                                        <?php if ($getKhbyId[0]['avatar']== '') {?>
                                            <img src="../uploads/avatar.png" alt=""> 
                                        <?php } else { ?>
                                            <img src="<?=$getKhbyId[0]['avatar']?>" alt=""> 
                                        <?php } ?>
                                    </div>
                                    <div class="noidungbinhluan">
                                        <div class="tenKH"><?=$getKhbyId[0]['tenKH']?></div>                                        
                                        <div class="noidung"><?=$bl['noidung']?></div>
                                        <div class="l-bt">
                                            <div class="like">Like</div>
                                            <div class="traloi">Phản hồi</div>
                                            <div class="thoigian"><?=$bl['thoigian']?></div>
                                        </div>                                        
                                    </div>                                    
                                </div>                                
                            <?php } ?>
                        </h4>
                        <h4 class="table-title margin-bottom-30px" id="l-box-binhluan-display">
                            
                        </h4>
                        <!-- nguoibl -->
                    </div>
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Thêm bình luận</span>
                        </h4>
                            <!-- form -->
                            <form method="post" id="form_cmt">
                                    <div class="form-row fz15px font-weight-700 ">                                        
                                        <div class="form-group col-md-6">
                                            <label for="inputName"></label>
                                            <input type="hidden" class="form-control" id="idus" name="idus" placeholder="Nhập tên" value="<?=$userr[0]['id']?>"> 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputName"></label>
                                            <input type="hidden" class="form-control" id="idbaiviet" name="idbaiviet" placeholder="Nhập tên" value="<?=$getBlogbyid['id']?>"> 
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="content">Bình luận:</label>
                                            <textarea class="form-control" name="content" id="content" spellcheck="false" placeholder="Bình luận" rows="3"></textarea>
                                        </div>                                        
                                        <div class="form-group">
                                        <?php if ($user != '0') { ?>
                                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Bình luận"/>
                                        <?php } else { ?>
                                            <a href="?act=login" class="btn btn-info">Đăng Nhập</a>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <span id="comment_message"></span>
                                    <br>
                                    <div id="display_comment"></div>                            
                                </div>
                            </form>
                        </h4>
                    </div>
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Bài viết liên quan</span>
                        </h4>
                        <div class="row">
                        <?php foreach($getBlogByiddm as $blogByiddm) { ?>                            
                            <div class="col-lg-6">
                                <div class="blog-entry background-white border-grey-1 margin-bottom-35px">                                    
                                    <a href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$blogByiddm['id']?>&iddm=<?=$blogByiddm['iddm']?>">
                                        <div class="img-in" style="background-image: url('<?=$pathimg.$blogByiddm['img']?>');">
                                    </a>
                                </div>
                                    <!-- oadd -->
                                <div class="pd-20-30-40-30  ">
                                    <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$blogByiddm['id']?>&iddm=<?=$blogByiddm['iddm']?>" >
                                        <?=$blogByiddm['name']?>
                                    </a>
                                    <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                        <p class="webkit-line-clam blog-line-5-clamp l-mota-blog"><?=$blogByiddm['mota'];?></p>
                                    </div>
                                    <div class="meta"> 
                                        <span class="text-extra-small float-left">Tag :   
                                            <a href="#" class="text-main-color"><?=$blogByiddm['tag']?></a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr float-right">Tác giả : 
                                            <a href="#" class="cl-blackgr"><?=$blogByiddm['tacgia']?></a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr margin-right-20px float-right"> 
                                            <?=$blogByiddm['date']?>
                                        </span>                                      
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <?php } ?>                       
                        </div>
                    </div>
            </div>        
        <!-- cot email ben phai -->        
        <div class="col-lg-4 col-md-8 sticky-content div-right-inblogdt" style=" position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
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
                        <a href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$bestBlog['id']?>&iddm=<?=$bestBlog['iddm']?>" class="float-left margin-right-15px d-block width-60px">
                        <img src="<?=$pathimg.$bestBlog['img']?>" alt="">
                        </a>
                        <a href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$bestBlog['id']?>&iddm=<?=$bestBlog['iddm']?>" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700">
                            <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                <?=$bestBlog['name']?>
                            </p>
                        </a>
                        <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả : 
                            <a href="#" class="cl-blackgr"><?=$bestBlog['tacgia']?></a>
                        </span>
                        <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px"> 
                            <?=$bestBlog['date']?>
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