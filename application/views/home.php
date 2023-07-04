<?php include 'header.php';?>

<section class="awe-section-6"> 
    <div class="section_tour-location">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_tour-new_title">
                        <h1><span>Du lịch Việt Nam</span> - Những địa điểm du lịch hot nhất 2023</h1>
                        <div class="title-line">
                            <div class="tl-1"></div>
                            <div class="tl-2"></div>
                            <div class="tl-3"></div>
                        </div>
                        <p>Những địa điểm du lịch hot nhất ở Việt Nam. Tham khảo những điểm du lịch đặc sắc nhất từ Bắc tới Nam cùng với chúng tôi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="section-location-owl owl-carousel owl-theme not-dqowl">
                <?php foreach ($post_hot as $key => $value) { ?>
                    <div class="item">
                        <div class="tourmaster-tour-category-item-wrap">
                            <div class="tourmaster-tour-category-thumbnail tourmaster-media-image">
                                <img src="<?php echo $value['img_av']; ?>" alt="<?php echo $value['name']; ?>" />
                            </div>
                            <div class="tourmaster-tour-category-overlay"></div>
                            <div class="tourmaster-tour-category-overlay-front"></div>
                            <div class="tourmaster-tour-category-head">
                                <div class="tourmaster-tour-category-head-display clearfix">
                                    <h3 class="tourmaster-tour-category-title"><i class="fa fa-map-marker color-x"></i><?php echo $value['name']; ?></h3>
                                </div>
                                <div class="tourmaster-tour-category-head-animate">
                                    <a class="tourmaster-tour-category-head-link" href="/du-lich/<?php echo $value['slug']; ?>">Xem chi tiết</a>
                                    <div class="tourmaster-tour-category-head-divider"></div>
                                </div>
                            </div>
                        </div>  
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="awe-section-7">
  <section class="section-news margin-bottom-20">
    <div class="container">
      <div class="blogs-content">
        <div class="row">
          <div class="col-md-12">
            <div class="section_tour-new_title">
              <h2><a href="/danh-muc/mien-bac">Miền Bắc</a></h2>
              <div class="title-line">
                <div class="tl-1"></div>
                <div class="tl-2"></div>
                <div class="tl-3"></div>
              </div>
              <p>Miền Bắc nổi bật hẳn với 4 mùa Xuân - Hạ - Thu - Đông rõ rệt, thu hút với những điểm đến du lịch đầy lý tưởng.</p>
            </div>
          </div>
        </div>
        <div class="news_hot_left">
          <div class="row">
            <div class="news_owl col-lg-6 col-md-6 col-sm-6 col-xs-12 cam-nang-du-lich">
              <div class="item_blog_big"> 
                <div class="figure-big">
                  <div class="img_thumb_blogs">
                    <a href="du-lich/<?php echo $post_north[0]['slug']; ?>" class="big_img_h">
                      <picture>
                        <source media="(max-width: 480px)" srcset="<?php echo $post_north[0]['img_av']; ?>">
                        <source media="(min-width: 481px) and (max-width: 767px)" srcset="<?php echo $post_north[0]['img_av']; ?>">
                        <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $post_north[0]['img_av']; ?>">
                        <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $post_north[0]['img_av']; ?>">
                        <source media="(min-width: 1200px)" srcset="<?php echo $post_north[0]['img_av']; ?>">
                        <img src="<?php echo $post_north[0]['img_av']; ?>" title="<?php echo $post_north[0]['name']; ?>" alt="<?php echo $post_north[0]['name']; ?>" class="img-responsive center-block" />
                      </picture>
                    </a>
                  </div>
                  <div class="content_item_blogs">
                    <div class="blog_home_title margin-top-10 margin-bottom-10">
                      <h3 class="news_home_content_short_info">
                        <a href="du-lich/<?php echo $post_north[0]['slug']; ?>" title="<?php echo $post_north[0]['name']; ?>"><?php echo $post_north[0]['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"> <?php echo $post_north[0]['description']; ?></div>
                    <div class="content_day_blog margin-bottom-10">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(53) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-blog-index col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php foreach ($post_north as $key => $value) {
              if($key > 0){
              ?>
              <div class="xxx clearfix">
                <div class="myblog" onclick="window.location.href='danh-muc/<?php echo $value['slug']; ?>';">
                  <div class="item_blog_big">
                    <div class="figure-big">
                      <div class="image-blog-left img_thumb_blogs">
                        <a href="du-lich/<?php echo $value['slug']; ?>">
                          <picture>
                            <source media="(max-width: 375px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 376px) and (max-width: 767px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1200px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $value['img_av']; ?>">
                            <img src="<?php echo $value['img_av']; ?>" title="<?php echo $value['name']; ?>" alt="<?php echo $value['name']; ?>">
                          </picture>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="content-right-blog">
                    <div class="title_blog_home">
                      <h3>
                        <a href="du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"><?php echo $value['description']; ?></div>
                    <div class="content_day_blog">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(16) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
              <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="text-align: center;
    margin-bottom: 50px;"><a href="danh-muc/mien-bac">Xem thêm</a> </div>
</section>

<section class="awe-section-7">
  <section class="section-news margin-bottom-20">
    <div class="container">
      <div class="blogs-content">
        <div class="row">
          <div class="col-md-12">
            <div class="section_tour-new_title">
              <h2><a href="/danh-muc/mien-trung">Miền Trung</a></h2>
              <div class="title-line">
                <div class="tl-1"></div>
                <div class="tl-2"></div>
                <div class="tl-3"></div>
              </div>
              <p>Miền Trung với những bãi biển trải dài , những địa danh du lịch lý tưởng cho mùa hè.</p>
            </div>
          </div>
        </div>
        <div class="news_hot_left">
          <div class="row">
            <div class="news_owl col-lg-6 col-md-6 col-sm-6 col-xs-12 cam-nang-du-lich">
              <div class="item_blog_big">
                <div class="figure-big">
                  <div class="img_thumb_blogs">
                    <a href="<?php echo $post_center[0]['slug']; ?>" class="big_img_h">
                      <picture>
                        <source media="(max-width: 480px)" srcset="<?php echo $post_center[0]['img_av']; ?>">
                        <source media="(min-width: 481px) and (max-width: 767px)" srcset="<?php echo $post_center[0]['img_av']; ?>">
                        <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $post_center[0]['img_av']; ?>">
                        <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $post_center[0]['img_av']; ?>">
                        <source media="(min-width: 1200px)" srcset="<?php echo $post_center[0]['img_av']; ?>">
                        <img src="<?php echo $post_center[0]['img_av']; ?>" title="<?php echo $post_center[0]['name']; ?>" alt="<?php echo $post_center[0]['name']; ?>" class="img-responsive center-block" />
                      </picture>
                    </a>
                  </div>
                  <div class="content_item_blogs">
                    <div class="blog_home_title margin-top-10 margin-bottom-10">
                      <h3 class="news_home_content_short_info">
                        <a href="du-lich/<?php echo $post_center[0]['slug']; ?>" title="<?php echo $post_center[0]['name']; ?>"><?php echo $post_center[0]['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"> <?php echo $post_center[0]['description']; ?></div>
                    <div class="content_day_blog margin-bottom-10">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(43) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-blog-index col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php foreach ($post_center as $key => $value) {
              if($key > 0){
              ?>
              <div class="xxx clearfix">
                <div class="myblog" onclick="window.location.href='du-lich/<?php echo $value['slug']; ?>';">
                  <div class="item_blog_big">
                    <div class="figure-big">
                      <div class="image-blog-left img_thumb_blogs">
                        <a href="du-lich/<?php echo $value['slug']; ?>">
                          <picture>
                            <source media="(max-width: 375px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 376px) and (max-width: 767px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1200px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $value['img_av']; ?>">
                            <img src="<?php echo $value['img_av']; ?>" title="<?php echo $value['name']; ?>" alt="<?php echo $value['name']; ?>">
                          </picture>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="content-right-blog">
                    <div class="title_blog_home">
                      <h3>
                        <a href="du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"><?php echo $value['description']; ?></div>
                    <div class="content_day_blog">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(61) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
              <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="text-align: center;
    margin-bottom: 50px;"><a href="danh-muc/mien-trung">Xem thêm</a> </div>
</section>

<section class="awe-section-7">
  <section class="section-news margin-bottom-20">
    <div class="container">
      <div class="blogs-content">
        <div class="row">
          <div class="col-md-12">
            <div class="section_tour-new_title">
              <h2><a href="/danh-muc/mien-nam">Miền Nam</a></h2>
              <div class="title-line">
                <div class="tl-1"></div>
                <div class="tl-2"></div>
                <div class="tl-3"></div>
              </div>
              <p>Trước hàng ngàn địa điểm du lich tại miền nam, bạn sẽ chọn địa điểm nào?</p>
            </div>
          </div>
        </div>
        <div class="news_hot_left">
          <div class="row">
            <div class="news_owl col-lg-6 col-md-6 col-sm-6 col-xs-12 cam-nang-du-lich">
              <div class="item_blog_big">
                <div class="figure-big">
                  <div class="img_thumb_blogs">
                    <a href="du-lich/<?php echo $post_southerm[0]['slug']; ?>" class="big_img_h">
                      <picture>
                        <source media="(max-width: 480px)" srcset="<?php echo $post_southerm[0]['img_av']; ?>">
                        <source media="(min-width: 481px) and (max-width: 767px)" srcset="<?php echo $post_southerm[0]['img_av']; ?>">
                        <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $post_southerm[0]['img_av']; ?>">
                        <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $post_southerm[0]['img_av']; ?>">
                        <source media="(min-width: 1200px)" srcset="<?php echo $post_southerm[0]['img_av']; ?>">
                        <img src="<?php echo $post_southerm[0]['img_av']; ?>" title="<?php echo $post_southerm[0]['name']; ?>" alt="<?php echo $post_southerm[0]['name']; ?>" class="img-responsive center-block" />
                      </picture>
                    </a>
                  </div>
                  <div class="content_item_blogs">
                    <div class="blog_home_title margin-top-10 margin-bottom-10">
                      <h3 class="news_home_content_short_info">
                        <a href="du-lich/<?php echo $post_southerm[0]['slug']; ?>" title="<?php echo $post_southerm[0]['name']; ?>"><?php echo $post_southerm[0]['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"> <?php echo $post_southerm[0]['description']; ?></div>
                    <div class="content_day_blog margin-bottom-10">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(3) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-blog-index col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php foreach ($post_southerm as $key => $value) {
              if($key > 0){
              ?>
              <div class="xxx clearfix">
                <div class="myblog" onclick="window.location.href='<?php echo $value['slug']; ?>';">
                  <div class="item_blog_big">
                    <div class="figure-big">
                      <div class="image-blog-left img_thumb_blogs">
                        <a href="du-lich/<?php echo $value['slug']; ?>">
                          <picture>
                            <source media="(max-width: 375px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 376px) and (max-width: 767px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1200px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 768px) and (max-width: 1023px)" srcset="<?php echo $value['img_av']; ?>">
                            <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="<?php echo $value['img_av']; ?>">
                            <img src="<?php echo $value['img_av']; ?>" title="<?php echo $value['name']; ?>" alt="<?php echo $value['name']; ?>">
                          </picture>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="content-right-blog">
                    <div class="title_blog_home">
                      <h3>
                        <a href="du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"><?php echo $value['description']; ?></div>
                    <div class="content_day_blog">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(1) Bình luận </span>
                    </div>
                  </div>
                </div>
              </div>
              <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="text-align: center;
    margin-bottom: 50px;"><a href="danh-muc/mien-nam">Xem thêm</a> </div>
</section>

<section class="awe-section-5"> 
    <div class="section_tour-holiday">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="video-wrappers padding-top padding-bottom">
                    <div class="video-wrapper-title">
                        <h5 class="sub-title">Khám phá ẩm thực</h5>
                        <h2 class="title"><?php echo $post_monan[0]['name']; ?></h2>
                        <div class="text"><?php echo $post_monan[0]['content']; ?></div>
                    </div>
                    <a href="danh-muc/am-thuc" class="btn-maincolor">Xem thêm</a>
                </div>
            </div>
            <div class="col-md-7">
                <div class="video-thumbnail">
                    
                    <a href="danh-muc/am-thuc">
                        <img src="<?php echo $post_monan[0]['img_av']; ?>" alt="Ống kính du lịch" class="img-responsive center-block" />
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>




<section class="awe-section-2">
  <div class="section_tour-new">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section_tour-new_title">
            <h2>Cẩm nang du lịch</span>
            </h2>
            <div class="title-line">
              <div class="tl-1"></div>
              <div class="tl-2"></div>
              <div class="tl-3"></div>
            </div>
            <p>Du lịch miền Trung Việt Nam thu hút du khách với những bãi biển tuyệt đẹp, những khu du lịch cực hot vào mùa Hè.</p>
          </div>
        </div>
      </div>
      <div class="row">
      <?php foreach ($post_camnang as $key => $value) { ?>
        <div class="col-md-3 col-sm-6 col-xs-6 col-100">
          <div class="product-box">
            <div class="product-thumbnail">
              <a href="cam-nang/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>">
                <img src="<?php echo $value['img_av']; ?>" alt="<?php echo $value['name']; ?>">
              </a>
            </div>
            <div class="product-info a-left">
			        <div class="content_item_blogs">
                    <div class="blog_home_title margin-top-10 margin-bottom-10">
                      <h3 class="news_home_content_short_info">
                        <a href="cam-nang/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"> <?php echo $value['content']; ?> </div>
                    <div class="content_day_blog margin-bottom-10">
                      <i class="fa fa-clock-o"></i>
                      
                      <span class="news_home_content_short_time"> <?php echo date('d/m/Y',strtotime($post_north[0]['created_at'])); ?> </span>
                      <span class="cmt_count_blog">
                        <i class="fa fa-comments" aria-hidden="true"></i>(3) Bình luận </span>
                    </div>
                  </div>
            </div>
          </div>
		    </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div style="text-align: center;
    margin-bottom: 50px;"><a href="danh-muc/cam-nang">Xem thêm</a> </div>
</section>

<?php include 'footer.php';?>