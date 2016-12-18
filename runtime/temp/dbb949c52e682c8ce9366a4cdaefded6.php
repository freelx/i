<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/cadmin/view/means/load.html";i:1481442844;}*/ ?>
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
		<form action="<?php echo url('cadmin/Means/upload'); ?>" enctype="multipart/form-data" method="post">
		<input type="file" name="image" /> <br>
		<input type="submit" value="上传" />
		</form>
	</div>
</body>
</html>