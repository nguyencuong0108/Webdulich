<?php include 'header.php';?>
<section class="bread-crumb margin-bottom-10">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">						
					<li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="/" title="Trang chủ">
							<span itemprop="name">Trang chủ</span>
							<meta itemprop="position" content="1">
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
					<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<a itemprop="item" href="/danh-muc/<?php echo $cate[0]['slug']; ?>" title="<?php echo $cate[0]['name']; ?>">
							<span itemprop="name"><?php echo $cate[0]['name']; ?></span>
							<meta itemprop="position" content="2">
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					
				</ul>
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
            <h2><?php echo $cate[0]['name']; ?></span>
            </h2>
            <div class="title-line">
              <div class="tl-1"></div>
              <div class="tl-2"></div>
              <div class="tl-3"></div>
            </div>
            <p><?php echo $cate[0]['description']; ?></p>
          </div>
        </div>
      </div>
      <div class="row">
	  <?php foreach ($post as $key => $value) { ?>
        <div class="col-md-4 col-sm-6 col-xs-6 col-100">
          <div class="product-box">
            <div class="product-thumbnail">
              <a href="/du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>">
                <img src="/<?php echo $value['img_av']; ?>" alt="<?php echo $value['name']; ?>">
              </a>
            </div>
            <div class="product-info a-left">
			<div class="content_item_blogs">
                    <div class="blog_home_title margin-top-10 margin-bottom-10">
                      <h3 class="news_home_content_short_info">
                        <a href="/du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                      </h3>
                    </div>
                    <div class="content-sum"> <?php echo $value['description']; ?> </div>

                  </div>
            </div>
          </div>
		</div>
		<?php } ?>
      </div>
    </div>
  </div>
</section>
		
	
<?php include 'footer.php';?>
