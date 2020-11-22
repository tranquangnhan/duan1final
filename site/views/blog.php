<main>
<div class="fixed-blog-bg"></div>
    <nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">
        
        <div class="container">
            <div class="fz-12vw d-inline-block padding-tb-7px">BLOG</div>
            <div class="float-right">
                <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>                
                <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog</div>                
            </div>
        </div>
    </nav>
    <div class="padding-tb-40px background-light-grey" style="transform: none;">
        <div class="container" style="transform: none;"> 
            <div class="row" style="transform: none;">
                <!-- noidung1 -->
                <div class="col-lg-8 col-md-8 sticky-content" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1540.2px;;">
                    <div class="theiaStickySidebar"   style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <!-- noi dung ne may cha -->
                            <?php foreach ($allBlog as $allB) { ?>
                            <div class="col-lg-6">
                                <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px">                                    
                                    <a href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$allB['id']?>&iddm=<?=$allB['iddm']?>">
                                        <div class="img-in" style="background-image: url('<?=$pathimg.$allB['img']?>');">
                                    </a>
                                </div>
                                    <!-- oadd -->
                                <div class="padding-30px">
                                    <a class="d-block  text-capitalize text-large text-dark font-weight-700 margin-bottom-10px" href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$allB['id']?>&iddm=<?=$allB['iddm']?>" >
                                        <?=$allB['name']?>
                                    </a>
                                    <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                        <?=$allB['mota'];?>
                                    </div>
                                    <div class="meta"> 
                                        <span class="margin-right-20px text-extra-small">Tác giả : 
                                            <a href="#" class="text-main-color"><?=$allB['tacgia']?></a>
                                        </span>
                                        <span class="text-extra-small">Tag :   
                                            <a href="#" class="text-main-color"><?=$allB['tag']?></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>                                                                  
                    </div>
                    <!-- page links -->
                    <ul>
              
                    </ul>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php echo $links; ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- noidung2 -->
            <div class="col-lg-4 col-md-4 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
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
                    <div class="widget widget_categories">
                        <h4 class="widget-title clearfix">
                            <span>Hình ảnh</span>
                        </h4>
                        <div class="row">
                            <!-- anh1 -->
                            <div class="col-6 margin-bottom-20px">
                                <a href=""><img class="wh2" src="views/img/dl1.jpg"></a>
                            </div>
                            <!-- anh2 -->
                            <div class="col-6 margin-bottom-20px">
                                <a href="g"><img class="wh2" src="views/img/dl2.jpg"></a>
                            </div>
                            <!-- amh3 -->
                            <div class="col-6 margin-bottom-20px">
                                <a href=""><img class="wh2" src="views/img/dl3.jpg"></a>
                            </div>
                            <!-- anh4 -->
                            <div class="col-6 margin-bottom-20px">
                                <a href=""><img class="wh2" src="views/img/dl4.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h4 class="widget-title clearfix">
                            <span>Bài hay</span>
                        </h4>
                        <?php foreach($getbestBlog as $bestBlog) { ?>
                            <ul class="last-posts">
                                <li>
                                <a href="#" class="float-left margin-right-15px d-block width-60px">
                                    <img src="<?=$pathimg.$bestBlog['img']?>" alt="">
                                </a>
                                <a href="#" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700"><?=$bestBlog['name']?></a>
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
</main>