<?php 
    if (isset($getDmblogbyid)==true) {
        $namedm = $getDmblogbyid[0]['name'];
    }
?>
<main>
<div class="fixed-blog-bg"></div>
    <nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">        
        <div class="container">
            <div class="fz-12vw d-inline-block padding-tb-7px">
                <?php if(isset($namedm)==true) { 
                    echo $namedm;
                } else {
                    echo 'BLOG';    
                }
                ?>
            </div>
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
                <div class="col-lg-8 col-md-8 l-box-blog-left">
                    <div class="">
                        <div class="row">
                            <!-- noi dung ne may cha -->
                            <?php foreach ($allBlog as $allB) { ?>                                
                            <div class="col-lg-6">
                                <div class="blog-entry background-white border-grey-1 margin-bottom-35px">                                    
                                    <a href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$allB['id']?>&iddm=<?=$allB['iddm']?>">
                                        <div class="img-in" style="background-image: url('<?=$pathimg.$allB['img']?>');">
                                    </a>
                                </div>
                                    <!-- oadd -->
                                <div class="pd-20-30-40-30  ">
                                    <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="<?=SITE_URL?>?act=dtBlog&idbl=<?=$allB['id']?>&iddm=<?=$allB['iddm']?>" >
                                        <?=$allB['name']?>
                                    </a>
                                    <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                        <p class="webkit-line-clam blog-line-5-clamp l-mota-blog"><?=$allB['mota'];?></p>
                                    </div>
                                    <div class="meta"> 
                                        <span class="text-extra-small float-left">Tag :   
                                            <a href="#" class="text-main-color"><?=$allB['tag']?></a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr float-right">Tác giả : 
                                            <a href="#" class="cl-blackgr"><?=$allB['tacgia']?></a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr margin-right-20px float-right"> 
                                            <?=$allB['date']?>
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
                            <li><a href="?act=blog&iddm=<?=$dmBlog['id']?>"><?=$dmBlog['name']?></a></li>
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
</main>