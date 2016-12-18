<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp\www\tp5\public/../application/cadmin\view\means\means.html";i:1481284072;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>请完善个人信息</title>
<style>
	body {
		margin: 0;
		padding: 0;
		background-color: #F7F7F7;
		font-family: '汉仪大隶书繁';
	}

	form {
		max-width: 640px;
		width: 100%;
		margin: 24px auto;
		font-size: 28px;
	}

	label {
		display: block;
		margin: 10px 10px 15px;
		font-size: 24px;
	}

	input {
		display: block;
		width: 100%;
		height: 40px;
		font-size: 22px;
		margin-top: 10px;
		padding: 6px 10px;
		color: #333;
		border: 1px solid #CCC;
		box-sizing: border-box;
	}

	meter, progress {
		display: block;
		width: 100%;
		margin-top: 10px;
	}

	.btn {
		margin-top: 30px;
	}

	.btn input {
		color: #FFF;
		background-color: green;
		border: 0 none;
		outline: none;
		cursor: pointer;
	}

</style>
</head>
<body>
<form action="<?php echo url('cadmin/Means/improve'); ?>" method="post"  enctype="multipart/form-data">
	<fieldset>
		<legend>个人信息完善</legend>
		<label for="">
			姓名: <input type="text" required autofocus placeholder="请输入姓名" name="username">
		</label>
		<label for="">
			手机号码: <input type="tel" pattern="1\d{10}" placeholder="请输入手机号码" name="tel">
		</label>
		<label for="">
			邮箱地址: <input type="email" placeholder="请输入邮箱地址" name="email">
		</label>
		<label for="">
			所属省份: <input type="text" list="course" placeholder="北京" name="address">
			<datalist id="course">
				<option value="北京" name="[]"></option>
				<option value="上海" name="[]"></option>
				<option value="广东" name="[]"></option>
				<option value="河北" name="[]"></option>
				<option value="河南" name="[]"></option>
				<option value="湖南" name="[]"></option>
				<option value="湖北" name="[]"></option>
			</datalist>
		</label>
		<label for="">
			您的年龄段: <input type="number" max="100" id="score" step="10" value="80" name>
		</label>
		<label for="">
			 <meter min="0" max="100" low="60" high="80" value="80" id="level"></meter>
		</label>
		<label for="">
			您的生日: <input type="date" value="2016-01-01" name="birthday" />
		</label>
		<!--  <label for="">
					上传靓照: <input type="file" name="image"><br />
		
				</label>  -->
		
		<label for="" class="btn">
			<input type="submit" value="保存">
		</label>
	</fieldset>
</form>
<script>
	var score = document.getElementById('score');
	var level = document.getElementById('level');

	score.oninput = function () {
		level.value = this.value;
	}
</script>

<!-- <div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div> -->


</body>
</html>