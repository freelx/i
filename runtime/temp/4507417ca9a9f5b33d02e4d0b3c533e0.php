<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\tp5\public/../application/badmin\view\means\load.html";i:1481714301;}*/ ?>
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
		<form action="<?php echo url('badmin/Means/upload'); ?>" enctype="multipart/form-data" method="post">
		<input type="file" name="image" /> <br>
		<input type="submit" value="上传" />
		</form>
	</div>
</body>
</html>