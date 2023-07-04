
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
						<a itemprop="item" href="/danh-muc/<?php echo $cate['slug']; ?>" title="<?php echo $value['name']; ?>">
							<span itemprop="name"><?php echo $cate['name']; ?></span>
							<meta itemprop="position" content="2">
						</a>
						<span><i class="fa fa-angle-right"></i></span>
					</li>
					<li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
						<strong itemprop="name"><?php echo $post['name']; ?></strong>
						<meta itemprop="position" content="3">
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container article-wraper">
	<div class="row">		
		<section class="right-content col-md-9 col-md-push-3">
			<article class="article-main" itemscope="" itemtype="http://schema.org/Article">
				<meta itemprop="mainEntityOfPage" content="/<?php echo $post['slug']; ?>">
				<meta itemprop="description" content="">
				<meta itemprop="author" content="">
				<meta itemprop="headline" content="<?php echo $post['name']; ?>">
				<meta itemprop="image" content="<?php echo $post['img_av']; ?>">
				<meta itemprop="datePublished" content="10-03-2018">
				<meta itemprop="dateModified" content="10-03-2018">
				<div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
					<div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
						<meta itemprop="width" content="200">
						<meta itemprop="height" content="49">
					</div>
					<meta itemprop="name" content="<?php echo $post['name']; ?>">
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1 class="title-head"><?php echo $post['name']; ?></h1>
						<?php if (in_array($post['id'], ['35','36','37'])) { ?>
						<video controls autoplay="autoplay"  name="media"><source src="http://ongkinhdulich.com/assets/sound/nhacnen.mp3" type="audio/mpeg"></video>
						<? } ?>
						<div class="postby">
							<span>Đăng bởi <b>Admin</span>
						</div>
						<div class="article-details">						
							<div class="article-content">
								<div class="rte">
									<div class="caption">
									<?php echo $post['content']; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="blog_related">
							<h2>Bài viết liên quan</h2>
							<?php foreach ($post_lq as $key => $value) { ?>
							<article class="blog_entry clearfix">
								<h3 class="blog_entry-title"><a rel="bookmark" href="/du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $value['name']; ?></a></h3>
							</article>
							<?php } ?>
						</div>
					</div>
				</div>				
			</article>
		</section>		
		
		<aside class="left left-content col-md-3 col-md-pull-9">
			
<aside class="aside-item collection-category blog-category">	
	<div class="heading">
		<h2 class="title-head margin-bottom-0"><span>Danh mục</span></h2>
	</div>	
	<div class="aside-content">
		<nav class="nav-category  navbar-toggleable-md">
			<ul class="nav navbar-pills">

				<li class="nav-item "><a class="nav-link" href="/">Trang chủ</a></li>
				<li class="nav-item ">
					<a href="/danh-muc/truyen-tranh" class="nav-link">truyện tranh vui nhộn</a>
				</li>
				<li class="nav-item ">
					<a href="/danh-muc/mien-bac" class="nav-link">Du lịch miền Bắc</a>
				</li>
				<li class="nav-item ">
					<a href="/danh-muc/mien-trung" class="nav-link">Du lịch miền Trung</a>
				<li class="nav-item "><a class="nav-link" href="/danh-muc/mien-nam">Du lịch miền Nam</a></li>
				<li class="nav-item "><a class="nav-link" href="/danh-muc/cam-nang">Cẩm nang du lịch</a></li>
				<li class="nav-item "><a class="nav-link" href="/danh-muc/am-thuc">Ẩm thực ba miền</a></li>

			</ul>
		</nav>
	</div>
</aside>





<div class="aside-item">
	<div class="heading">
		<h2 class="title-head">Bài viết khác</h2>
	</div>
	<div class="list-blogs">
		<div class="row">
		<?php foreach ($post_lq as $key => $value) { ?>							
			<article class="blog-item blog-item-list col-md-12">
				<a href="/du-lich/<?php echo $value['slug']; ?>" class="panel-box-media"><img src="/<?php echo $value['img_av']; ?>" width="70" height="70" alt="<?php echo $value['name']; ?>"></a>
				<div class="blogs-rights">
					<h3 class="blog-item-name">
						<a href="/du-lich/<?php echo $value['slug']; ?>" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a></h3>
					<div class="post-time">10/03/2023</div>
				</div>
			</article>			
			<?php } ?>
		</div>
		
	</div>
</div>

		</aside>
		
	</div>
</div>


	<?php include 'footer.php';?>