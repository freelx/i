<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/index/view/auth/login.html";i:1481678232;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>登录</title>
<link rel="stylesheet" type="text/css" href="__SITE__/static/css/style2.0.css">
<script type="text/javascript" src="__SITE__/static/js/jquery-1.11.3.js"></script>

<style type="text/css">
	.codeff{width:40px; height:20px;}
	ul li{font-size: 30px;color:#2ec0f6;}
	.tyg-div{z-index:-1000;float:left;position:absolute;left:5%;top:20%;}
	.tyg-p{
		font-size: 14px;
	    font-family: 'microsoft yahei';
	    position: absolute;
	    top: 135px;
	    left: 60px;
	}
	.tyg-div-denglv{
		z-index:1000;float:right;position:absolute;right:3%;top:10%;
	}
	.tyg-div-form{
		background-color: #23305a;
		width:300px;
		height:auto;
		margin:120px auto 0 auto;
		color:#2ec0f6;
	}
	.tyg-div-form form {padding:10px;}
	.tyg-div-form form input[type="text"]{
		width: 270px;
	    height: 30px;
	    margin: 25px 10px 0px 0px;
	}
	.tyg-div-form form button {
	    cursor: pointer;
	    width: 270px;
	    height: 44px;
	    margin-top: 25px;
	    padding: 0;
	    background: #2ec0f6;
	    -moz-border-radius: 6px;
	    -webkit-border-radius: 6px;
	    border-radius: 6px;
	    border: 1px solid #2ec0f6;
	    -moz-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    -webkit-box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    box-shadow:
	        0 15px 30px 0 rgba(255,255,255,.25) inset,
	        0 2px 7px 0 rgba(0,0,0,.2);
	    font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	    font-size: 14px;
	    font-weight: 700;
	    color: #fff;
	    text-shadow: 0 1px 2px rgba(0,0,0,.1);
	    -o-transition: all .2s;
	    -moz-transition: all .2s;
	    -webkit-transition: all .2s;
	    -ms-transition: all .2s;

}
</style>
<script type="text/javascript">
	$(function(){
		function checkUsername(){
			
			$.post('__SITE__/index/Auth/authentication', {username:$("#username").val()}, function(data){
				if (data.status) {
							$('#username').next().html('<font color="green" size="2">用户名正确</font>');
						} else {
							$('#username').next().html('<font color="red" size="2">查无此人</font>');
						}
			},'json');
		}

		$("#username").blur(function(){
					checkUsername();
				});

		$('#sub').click(function (){
					$.post('__SITE__/index/Auth/loginCheck',{username:$('#username').val(),password:$('#password').val()},function(data){
						if (data.status) {
							location.href = '__SITE__';
						} else {
							alert(data.msg);
						}
					},'json');
				});

	});
</script>
</head>
<body>
<div class="tyg-div">
	<ul>
    	<li>让</li>
    	<li><div style="margin-left:20px;">创</div></li>
    	<li><div style="margin-left:40px;">意</div></li>
    	<li><div style="margin-left:60px;">改</div></li>
    	<li><div style="margin-left:80px;">变</div></li>
    	<li><div style="margin-left:100px;">生</div></li>
    	<li><div style="margin-left:120px;">活</div></li>
    </ul>
</div> 
<div id="contPar" class="contPar">
	<div id="page1"  style="z-index:1;">
		<div class="title0">顶级创意交易共享平台</div>
		<div class="title1">旅游、交通、气象、公共安全、大数据</div>
		<div class="imgGroug">
			<ul>
				<img alt="" class="img0 png" src="__SITE__/static/img/page1_0.png">
				<img alt="" class="img1 png" src="__SITE__/static/img/page1_1.png">
				<img alt="" class="img2 png" src="__SITE__/static/img/page1_2.png">
			</ul>
		</div>
		<img alt="" class="img3 png" src="__SITE__/static/img/page1_3.jpg">
	</div>
</div>
<div class="tyg-div-denglv">
	<div class="tyg-div-form">
			<h1 id="msg"></h1>
			<h2><font color="green">会员登录</font>/<a href="__SITE__index/bauth/blogin">商户登录</a></h2><!-- <p class="tyg-p">欢迎访问  智慧能力</p> -->
			<div style="margin:5px 0px;">
				<input type="text" placeholder="请输入账号..." name="username" id="username" style="width:200px; height:30px" /><span></span>
			</div>
			<div style="margin:5px 0px;">
				<input type="password" placeholder="请输入密码..." name="password" id="password" style="width:200px; height:30px"/><span></span>
			</div>
			<!-- <div style="margin:5px 0px;">
				<input type="text" style="width:150px;" placeholder="请输入验证码..." id="code"  style="width:200px; height:30px" name="code"/><span><span>
				<br />
				<?php echo captcha_img(); ?>
				<img src="__SITE__/static/img/1.png" style="vertical-align:bottom;" alt="验证码" />
			</div>  -->
			<input type="submit" value="登录" id="sub" />
		
	</div>
</div>

<script type="text/javascript" src="__SITE__/static/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="__SITE__/static/js/com.js"></script>
<!--[if IE 6]>
<script language="javascript" type="text/javascript" src="./script/ie6_png.js"></script>
<script language="javascript" type="text/javascript">
DD_belatedPNG.fix(".png");
</script>
<![endif]-->
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>


</body>
</html>