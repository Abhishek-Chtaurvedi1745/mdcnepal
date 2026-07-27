<!--plugin-css-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/plugin.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- template-style-->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!-- Bootstrap Select -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css'>
<link href="css/custom.css" rel="stylesheet">
<!--Start Header -->
<?php include 'includes/header.php';?>
<!--End Header -->
<!--Breadcrumb Area-->
<style>
.blog-page ul,
.blog-page ol {
    font-size: 17px;
    line-height: 28px;
    padding-left: 0;
    margin-bottom: 20px;
    color: #000;
} 


.blog-page ol {
    padding-left: 19px;
} 

.blog-page ul li,
.blog-page ol li {
    margin-bottom: 10px;
    color: #000;
}


</style>

<section class="breadcrumb-area banner-6">
  <div class="text-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-start v-center">
          <div class="bread-inner">
            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog-details">Blog Details</a></li>
              </ul>
            </div>
            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
              <h2 class="fs-2 text-white">Blog Details</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Blog Grid-->
<section class="blog-page pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <?php 
                $id=$this->records['id'];
                $blog_category_name=$this->records['blog_category_name'];
                $name=$this->records['name'];
                $about_info=$this->records['about_info'];
                $folder=$this->records['folder'];
                $image=$this->records['image'];
                $blogImage=$this->utility->get_image_path($image,'blog/'.$folder.'/','large');
                $date=$this->records['entry_date_time'];
                $old_date=date_create($date);
                $new_date=date_format($old_date,"M d, Y");
                
            ?>
                <div class="blog-header">
                    <h1 class="text-202024"><?=$name?></h1>
                    <div class="row mt20 mb20">
                        <div class="col-md-8 col-9">
                            <div class="media">
                                <!--<div class="user-image bdr-radius"><img src="images/girl.jpg" alt="" class="img-fluid" /></div>-->
                                <div class="media-body user-info">
                                    <h5>By Admin</h5>
                                    <p><?=$new_date?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-3">
                            <!-- <div class="postwatch"><i class="far fa-eye"></i> 120</div> -->
                        </div>
                    </div>
                </div>
                <div class="image-set"><img src="<?=$blogImage?>" alt="blog images" class="img-fluid" /></div>
                <div class="blog-content mt30">
                    <div><?=$about_info?></div>
                    <div class="row mt30">
                        <div class="col-lg-8 col-md-8 mt30 mb30">
                            <div class="blog-post-tag">
                                <h5>Releted Tags</h5>
                                <?php for($i=0;$i<count($this->rs_blog_tag);$i++){?>
                                <a href="blog/tag/<?=$this->rs_blog_tag[$i]['slug']?>"><?=$this->rs_blog_tag[$i]['name']?></a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt30 mb30">
                            <div class="blog-share-icon text-left text-md-right">
                                <span>Share: </span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 mt30 mb30">
                            <div class="post-navigation text-left">
                                <span><a href="#">Prev Post</a></span>
                                <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt30 mb30">
                            <div class="post-navigation text-left text-md-right">
                                <span><a href="#">Next Post</a></span>
                                <h4><a href="#">How digital transformation has changed the world.</a></h4>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="author-block">
                    <div class="media">
                        <div class="user-image"><img src="images/girl.jpg" alt="" class="img-fluid" /></div>
                        <div class="media-body user-info">
                            <h5 class="mb10">Sasa Smile</h5>
                            <p>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                fringilla. Donec lacinia congue felis in faucibus.
                            </p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="comments-block mt60">
                    <h2 class="mb60">Comments:</h2>
                    <div class="media">
                        <div class="user-image"><img src="images/girl.jpg" alt="" class="img-fluid" /></div>
                        <div class="media-body user-info">
                            <h5 class="mb10">
                                Petey Cruiser <small>says:</small>
                                <span>
                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                </span>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div class="media replied">
                        <div class="user-image"><img src="images/girl.jpg" alt="" class="img-fluid" /></div>
                        <div class="media-body user-info">
                            <h5 class="mb10">
                                Petey Cruiser <small>says:</small>
                                <span>
                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                </span>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="user-image bdr-radius"><img src="images/girl.jpg" alt="" class="img-fluid" /></div>
                        <div class="media-body user-info">
                            <h5 class="mb10">
                                Petey Cruiser <small>says:</small>
                                <span>
                                    May 25, 2020 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                </span>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                        </div>
                    </div>
                    <div class="form-block form-blog mt60">
                        <form action="#" method="post" name="#">
                            <div class="fieldsets row">
                                <div class="col-md-6"><input type="text" placeholder="Name" name="#" /></div>
                                <div class="col-md-6"><input type="email" placeholder="Email" name="#" /></div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-12"><input type="text" placeholder="Website" name="#" /></div>
                            </div>
                            <div class="fieldsets"><textarea placeholder="Write Your Comment" name="#"></textarea></div>
                            <div class="fieldsets mt10">
                                <button type="submit" name="#" class="btn-main bg-btn lnk">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
            <!--End Blog Details-->
            <!--Start Sidebar-->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!--Start Recent post-->
                    <?php if(count($this->recent_blog)>0){?>
                    <div class="recent-post widgets">
                        <h3 class="mb30">Recent post</h3>
                        <?php for($i=0;$i<count($this->recent_blog);$i++){
                            $name=$this->recent_blog[$i]['name'];
                            $folder=$this->recent_blog[$i]['folder'];
                            $image=$this->recent_blog[$i]['image'];
                            $blogImage=$this->utility->get_image_path($image,'blog/'.$folder.'/','large');
                            $date=$this->recent_blog[$i]['entry_date_time'];
                            $old_date=date_create($date);
                            $new_date=date_format($old_date,"M d, Y");
                            $slug=$this->recent_blog[$i]['slug'];
                            $detail_slug='blog/detail/'.$slug.'';
                        ?>
                        <div class="media">
                            <div class="post-image bdr-radius">
                                <a href="<?=$detail_slug?>"><img src="<?=$blogImage?>" alt="" class="img-fluid" /></a>
                            </div>
                            <div class="media-body post-info">
                                <h5><a href="<?=$detail_slug?>"><?=$name?></a></h5>
                                <p><?=$new_date?></p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                    <!--Start Recent post-->
                    <?php if(count($this->rs_category)>0){?>
                    <!--Start Blog Category-->
                    <div class="recent-post widgets mt60">
                        <h4 class="mb30 fs-5">Blog Category</h4>
                        <div class="blog-categories">
                            <ul>
                                <?php for($i=0;$i<count($this->rs_category);$i++){?>
                                <li>
                                    <a href="blog/category/<?=$this->rs_category[$i]['slug']?>"><?=$this->rs_category[$i]['name']?> <span class="categories-number">(<?=$this->rs_category[$i]['blog_count']?>)</span></a>
                                </li>
                               <?php }?>
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                    <!--End Blog Category-->
                    <!--Start Tags-->
                    <?php if(count($this->rs_tag)>0){?>
                    <div class="recent-post widgets mt60">
                        <h3 class="mb30">Most Used Tags</h3>
                        <div class="tabs">
                            <?php for($i=0;$i<count($this->rs_tag);$i++){?>
                                <a href="blog/tag/<?=$this->rs_tag[$i]['slug']?>"><?=$this->rs_tag[$i]['name']?></a>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                    <!--End Tags-->
                </div>
            </div>
            <!--End Sidebar-->
        </div>
    </div>
</section>

<!--Start Footer -->
<?php include 'includes/footer.php';?>
<!--End Footer -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/plugin.min.js"></script>
<script src="js/preloader.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js'></script>
<?php include 'includes/general_data.php';?>