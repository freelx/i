<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/badmin/view/uploadimg/uploadimg.html";i:1481689620;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传头像</title>
<style>
	.img{width:200px; height:200px;}
</style>
</head>
<body background="__SITE__/static/supp/img/xing.png">
	<div class="img">

		<form action="<?php echo url('badmin/uploadimg/doupload'); ?>" enctype="multipart/form-data" method="post">
		<span><font color="red">商品图片展示1(请务必上传)</font></span>
		<input type="file" name="image[]" /> <br>
		<span><font color="red">商品图片展示2(请务必上传)</font></span>
		<input type="file" name="image[]" /> <br>
		<span><font color="red">商品图片展示3(请务必上传)</font></span>
		<input type="file" name="image[]" /> <br>
		<span><font color="red">商品图片展示4(请务必上传)</font></span>
		<input type="file" name="image[]" /> <br>
		<span><font color="red">商品图片展示5(请务必上传)</font></span>
		<input type="file" name="image[]" /> <br>
		<input type="submit" value="上传" />
		</form>
	</div>
</body>
</html>
