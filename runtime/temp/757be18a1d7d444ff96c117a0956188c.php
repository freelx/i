<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wamp\www\tp5\public/../application/badmin\view\uploadart\uploadart.html";i:1481692666;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传头像</title>
	<script type='text/javascript' src='__SITE__/static/ckeditor/ckeditor.js'></script>
<style>
	.img{width:500px; height:2600px; }
	.one{width:500px; height:700px;}
	.two{width:500px; height:500px;}
</style>
</head>
<body background="__SITE__/static/supp/img/xing.png">
	<div class="img">

		<form action="<?php echo url('badmin/uploadart/doupload'); ?>" method="post">
		<div class="one">
		<select name="goods_id">
			<option value="0">请选择商品id</option>
			<?php foreach($rel as $val): ?>								
			<option value="<?php echo $val->id; ?>"><?php echo $val->id; ?></option>
			<?php endforeach; ?>
		</select><br />
		<span><font color="red">商品名称(请务必填写)</font></span><br />
		<input type="text" name="goods_name" value="" placeholder="请输入商品名称"><br />
		<span><font color="red">商品类型(请务必填写)</font></span><br />
		<select name="theme_id">
			<option value="-1">请选择商品类型</option>
			<?php foreach($data as $val): ?>								
			<option value="<?php echo $val->id; ?>"><?php echo $val->theme_name; ?></option>
			<?php endforeach; ?>
			<!-- <option value="2">大设计</option>
			<option value="3">泛阅读</option>
			<option value="4">建筑派</option>
			<option value="5">轻艺术</option> -->
		</select><br />
		<!-- <span><font color="red">商品名称(请务必填写)</font></span><br />
		<input type="text" name="goods_name" value="" placeholder="请输入商品名称"><br /> -->
		<span><font color="red">商品价格(请务必填写)</font></span><br />
		<input type="text" name="price" value="" placeholder="请输入商品价格"><br />
		<span><font color="red">商品库存量(请务必填写)</font></span><br />
		<input type="text" name="stock" value="" placeholder="请输入商品库存量"><br />
		<span><font color="red">商品文字描述1(请务必填写)</font></span><br />
		<input type="text" name="title" value="" placeholder="请输入文章标题">
		<textarea class='ckeditor' name="content[]" id='textarea'></textarea>
		</div>
		 <br>
		<div class="two">
		<span><font color="red">商品文字描述2(请务必填写)</font></span>
		<!-- <input type="text" name="title" value="" placeholder="请输入文章标题"> -->
		<textarea class='ckeditor' name="content[]" id='textarea1'></textarea>
		</div> 
		<br>
		<div class="three">
		<span><font color="red">商品图片描述3(请务必填写)</font></span>
		<textarea class='ckeditor' name="content[]" id='textarea2'></textarea>
		</div>
		 <br>
		<input type="submit" value="提交"/>
		</form>
	</div>
</body>
</html>
