
<script src="/assets/library/ckeditor/ckeditor.js"></script>
<script src="/assets/js/jquery/jquery.min.js"></script>
<div class="container-fluid" style="margin-top: 40px;">
	<div class="content_page" style="width: 900px;margin: 0 auto;">
<h3>Bài viết</h3>

<form action="/admin/post_edit" method="POST"  enctype="multipart/form-data">
		<div class="row form-group">
			<div class="col-md-6">
				<img src="<?php echo $post['img_av']; ?>" style="width: 200px;">
				<input type="file" name="img_av">
			</div>
		</div>
		<div class="row form-group"> 
			<div class="col-md-1">
				Tên
			</div>
			<div class="col-md-8">
				<input class="form-control" name="name" value="<?php echo $post['name']; ?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-1">
				Mô tả
			</div>
			<div class="col-md-8">
				<textarea class="form-control" name="description"><?php echo $post['description']; ?></textarea>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-1">
				Danh mục
			</div>
			<div class="col-md-8">
			<select name="cate_id">
					<option value="1" <?php if ($post['id'] == '1') echo "selected"; ?> >Du lịch miền bắc</option>
					<option value="2" <?php if ($post['id'] == '2') echo "selected"; ?>>Du lịch miền trung</option>
					<option value="3" <?php if ($post['id'] == '3') echo "selected"; ?>>Du lịch miền nam</option>
					<option value="4" <?php if ($post['id'] == '4') echo "selected"; ?>>Ẩm thực</option>
					<option value="5" <?php if ($post['id'] == '5') echo "selected"; ?>>Cẩm nang</option>
					<option value="6" <?php if ($post['id'] == '6') echo "selected"; ?>>Truyện tranh</option>
				</select>
			</div>
		</div>
		

		<div class="row form-group">
			<div class="col-md-1">
				Nội dung bài viết
			</div>
			<div class="col-md-8">
				<textarea class="form-control" name="" id="content" value=""><?php echo $post['content']; ?></textarea>
				<textarea class="form-control" id="content_hidden" name="content"><?php echo $post['content']; ?></textarea>
			</div>
		</div>


		<div class="row form-group">
			<div class="col-md-1">
				Hot
			</div>
			<div class="col-md-8">
				<input type="checkbox" name="hot" value="1" <?php if ($post['hot'] == '1') echo "checked"; ?>>
			</div>
		</div>
		<div>
			<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
			<button type="submit" class="btn btn-success">Cập nhật</button>
		</div>
	</form>
	</div>
</div>
<script>
 	var editor = CKEDITOR.replace('content');

	editor.on( 'change', function() {
		var desc = CKEDITOR.instances['content'].getData();
		$('#content_hidden').val(desc);

	} );


</script>