<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp\www\tp5\public/../application/badmin\view\means\change.html";i:1481697692;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/amazeui.min.css" />
		<script type="text/javascript" src="__SITE__/static/supp/js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="__SITE__/static/supp/js/amazeui.min.js"></script>
		<link rel="stylesheet" href="__SITE__/static/supp/css/zpwd/sjsz.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/sui.css" />
		<script type="text/javascript" src="__SITE__/static/supp/js/sui.js"></script>
		<link rel="stylesheet" href="__SITE__/static/supp/css/jd.css" />
		<title></title>
		<style>
			.new{margin-left:300px; font-size:16px; font-family:"楷体";font-weight: bold;}
			.bottomLine {
				border-bottom: 1px solid #ccc;
				border-top: 1px solid #ccc;
				padding-top: 8px;
				/*padding-bottom:10px;*/
			}
			
			.bot {
				margin-bottom: 50px;
				/*text-align: center;*/
				color: #7b6f5b;
			}
			
			.radio-pretty.checked > span:before {
				color: #f88600;
			}
			
			input {
				height: 62px;
			}
			
			.imgbot {
				width: 128px;
				height: 128px;
			}
			.am-form-field {
   /*  display: inline; */
    width: 100%;
    width: 90%;
    padding: .5em;
    font-size: 1.6rem;
    line-height: 1.2;
    color: #555;
    vertical-align: middle;
    background-color: #fff;
   /*  background-image: none; */
    border: 1px solid #ccc;
    border-radius: 0;
    /* -webkit-appearance: none; */
    -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
}
		</style>
	</head>

	<body>
		<!--<div class="am-g" style="margin-top: 25px;">
			
		</div>-->
		<div style="background-color: #F8F8F8;padding-top: 40px;">
		<div class="am-g" >
			<div class="logo"> <img src="__SITE__/static/supp/img/logo.png" style="    float: left" />
				<p style="font-size: 16px;color: #3d3d3d;margin-left: 16px;font-weight: bold;margin-top: 20px;    float: left">修改商户信息</p>
			</div>
			<div style="width: 1200px;margin: 0 auto;font-size: 12px;margin-top: -38px;"> <span style="float: right;color: #333333;">欢迎您，尊敬的商户=><?php echo \think\Session::get('businessname'); ?><!-- <span style="margin-left: 20px;margin-right: 20px;">|</span>退出<span style="margin-left: 20px;margin-right: 20px;">|</span>我的买啦</span> -->
			</div>
		</div>
		</div>
		<div style="background-color: #ffffff;padding-top: 30px;margin-top: 21px;">
			<div class="am-g content" style="margin-top: 45px;">
				<div data-am-widget="tabs" class="am-tabs am-tabs-d2">
					<ul class="am-tabs-nav1" style="margin-top: 20px;display:flex;list-style: none;text-align: center;">
						<li style="max-width: 95px; margin-left: 100px;"></li>
						<!-- <li style="max-width: 80px;"><span class="am-badge1 am-round am-badge-warning-active " style="background-color: #F89406;font-size: 18px;">1</span>
							<br />
							<p class="bottitle active">验证身份</p>
						</li>
						<li style="max-width: 273px;">
							<hr style="width: 273px;    border-top: 3px #F89406 solid;">
						</li> -->
						<li style="max-width: 80px;margin-left: 10px;"><span class="am-badge1  am-round am-badge-warning-active" style="background-color: #F89406;font-size: 18px">赞</span>
							<br />
							<p class="bottitle active">修改商户信息</p>
						</li>
						
					</ul>
					<form action="<?php echo url('badmin/Means/dochange'); ?>" method="post">
						<?php foreach($info as $val): ?>
							<div class="new">
							您的当前邮箱是<input type="text" name="email" value="<?php echo $val->email; ?>" style="width: 285px;height: 45px;margin-left: 20px;"><br /><br />
							您的当前地址是<input type="text" name="shop_name" value="<?php echo $val->shop_name; ?>" style="width: 285px;height: 45px;margin-left: 20px;"><br /><br />
							您的当前电话是<input type="text" name="tel" value="<?php echo $val->tel; ?>" style="width: 285px;height: 45px;margin-left: 20px;"><br /><br />
							您的当前电话是<input type="text" name="ship_address" value="<?php echo $val->ship_address; ?>" style="width: 285px;height: 45px;margin-left: 20px;"><br /><br />
							请输入您的密码<input type="password" name="password"  style="width: 285px;height: 45px;margin-left: 20px;"><br /><br />
						<?php endforeach; ?>
							</div>
								<!-- <div class="am-g" style="margin-top: 30px;margin-left: 165px;"> -->
								<br />
									<button type="submit" class="am-btn am-btn-warning" style="width: 265px;height: 50px;font-size: 16px;border: 1px rgba(187, 187, 187, 0.5)B solid;margin: 0 auto;border-radius: 5px;margin-left: 450px;">确任修改</button> 
								<!-- </div> -->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="am-g " style="margin-top: 81px;text-align: center;font-size: 12px;">
			<div class="bottomLine" style="margin:0 auto;width:700px;height: 35px;">
				<span style="float: left;word-spacing:0.52rem;    text-align: center;    width: 100%;">关于我们 | 联系我们 | 商家入驻 | 友情链接 | 站点地图 | 手机商城 | 销售联盟 | 商城社区 | 企业文化 | 帮助中心 
			</span>
			</div>
		</div>
		<div class="am-g">
			<div class="bot ">
				<div style="margin:0 auto;width:700px;height: 30px;">
					<p style="font-size: 12px;float: left;">© &nbsp;2005-2016 买啦网 版权所有 ，并保留所有权利 <span style="margin-left: 30px;">买啦 Tel ：4008125181 </span><span style="margin-left: 30px;">E-mai：maila@163.com</span> </p>
				</div>
			</div>
		</div>
		</div>
	</body>

</html>