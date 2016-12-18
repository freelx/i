<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/cadmin/view/car/car.html";i:1481696870;}*/ ?>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>

		<script type="text/javascript" src="__SITE__/static/supp/js/safe/aywmq_qt.js"></script>
		<script type="text/javascript" src="__SITE__/static/supp/js/safe/da_opt.js"></script>
		<script type="text/javascript" src="__SITE__/assets/js/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="__SITE__/assets/js/js.js"></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="__SITE__/static/supp/css/safe/css.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/safe/common.min.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="__SITE__/assets/css/gwc.css" />
		<link rel="stylesheet" href="__SITE__/static/supp/css/tree.css" type="text/css" />
		<style>

			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
		</style>
	</head>

	<body class="ms-body">
	<!-- 代码部分begin -->
		<div class="wraper">
			<div class="teacher">
				<div class="teacherPic">
					<div class="content" id="lanren1">
						<div class="txt">
							<h3>新疆</h3>
							<h4>草场丰腴、林木葱郁，有着“塞外江南”的美称</h4>
							<p>发团日期：7-10月<br>
								参考价格：5280元<br>
								摄影器材: 单反 广角 中长焦 三脚架等</p>
						</div>
					</div>
					<div class="content" id="lanren2">
						<div class="txt">
							<h3>云南</h3>
							<h4>东川红土地的炫彩、高原明珠——抚仙湖的柔美</h4>
							<p>发团日期：7-11月<br>
								参考价格：2780元<br>
								摄影器材: 单反 广角 中长焦 三脚架等</p>
						</div>
					</div>
					<div class="content" id="lanren3">
						<div class="txt">
							<a href="#" ><h3>贵州</h3></a>
							<h4>西江千户苗寨 以美丽回答一切</h4>
							<p>发团日期：7-12月<br>
								参考价格：2680元<br>
								摄影器材: 单反 广角 中长焦 三脚架等</p>
						</div>
					</div>
					<div class="content" id="lanren4">
						<div class="txt">
							<h3>色达</h3>
							<h4>地球上最后的一片净土，心灵净化之旅</h4>
							<p>发团日期：7-10月<br>
								参考价格：3900元<br>
								摄影器材: 单反 广角 中长焦 三脚架等</p>
						</div>
					</div>
					<div class="content" id="lanren5">
						<div class="txt">
							<h3>斯里兰卡</h3>
							<h4>印度洋上的一滴眼泪！</h4>
							<p>发团日期：6-12月<br>
								参考价格：1250美金<br>
								摄影器材: 单反 广角 中长焦 三脚架等</p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
		<script src="__SITE__/static/supp/js/cjquery.js"></script>
		<script>
			$(".content") .hover(function(){
				var that = $(this);
				that .children(".txt").stop().animate({height:"360px"},200);
		        that.parent(".teacherPic").css({"background":"url(__SITE__/static/supp/img/"+($(this).attr('id'))+".jpg) no-repeat","-webkit-transition":"all 0.8s ease 0.2s","transition":"all 0.8s ease 0.2s"});
				that.find(".txt h3").stop().animate({paddingTop:"130"},550);
				that.find(".txt p").stop().show();
			},function(){
				var _that = $(this);
				_that.children(".txt").stop().animate({height:"100px"},200);
				_that.find(".txt h3").stop().animate({paddingTop:"0px"},550);
				_that.find(".txt p").stop().hide();
			})
		</script>
		<!-- 代码部分end -->
		<div id="" class="ng-top-banner"></div>
		<div class="ng-toolbar">
			<div class="ng-toolbar-con wrapper">
				<div class="ng-toolbar-left">
					<a class="ng-bar-node ng-bar-node-backhome" id="ng-bar-node-backhome" style="display: block;" href="__SITE__/cadmin/index/index">
						<span>返回个人首页</span>
					</a>
					<div class="ng-bar-node-box ng-site-nav-box">

						<div class="ng-sn-site-nav ng-d-box site-nav-child" style="display:none;">
							<dl class="sn-site-list lnb">
								<dt>
								    特色购物
								 </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
							    主题频道
							   </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
					    生活助手
					   </dt>
								<dd>
									<p><a target="_blank">###<i class="hot"></i></a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list">
								<dt>
					    会员服务
					   </dt>
								<dd>
									<p><a target="_blank">###<i class="hot"></i></a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
								</dd>
							</dl>
							<dl class="sn-site-list rnb">
								<dt>
					    更多热点
					   </dt>
								<dd>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###</a></p>
									<p><a target="_blank">###<i class="hot"></i></a></p>
								</dd>
							</dl>
							<a href="" class="ng-close"><em class="ng-iconfont"></em></a>
						</div>
					</div>

				</div>
				<div class="ng-toolbar-right">
				
					<div class="ng-bar-node-box username-handle" id="" style="display: block;">
						<a href="" rel="nofollow" class="ng-bar-node username-bar-node username-bar-node-noside">
							<span id="">欢迎您,尊敬的会员=><?php echo $username; ?></span>
							<em class="hasmsg ng-iconfont"></em>
							<em class="ng-iconfont down"></em>
						</a>

					</div>

					



					

	
					<div class="ng-bar-node-box service-handle">
						<a href="javascript:void(0);" class="ng-bar-node ng-bar-node-service ng-bar-node-fix touch-href ng-bar-node-pr5" rel="nofollow"><span><a href="__SITE__index/auth/loginout">退出</a></span><em class="ng-iconfont down"></em>
									    </a>

					</div>
									</div>
									<div id="ng-minicart-slide-box"></div>
								</div> 

		</div>
		<header class="ms-header ms-header-inner ms-head-position">
			<article class="ms-header-menu1">
				<style type="text/css">
					.nav-manage .list-nav-manage {
						position: absolute;
						padding: 15px 4px 10px 15px;
						left: 0;
						top: -15px;
						width: 90px;
						background: #FFF;
						box-shadow: 1px 1px 2px #e3e3e3, -1px 1px 2px #e3e3e3;
						z-index: 10;
					}
					
					.ms-nav li {
						float: left;
						position: relative;
						padding: 0 20px;
						height: 44px;
						font: 14px/26px "Microsoft YaHei";
						color: #FFF;
						cursor: pointer;
						z-index: 10;
					}
				</style>
				<div class="header-menu" style="width: 1200px;">
						<img src="__SITE__/static/supp/img/logo.png" style="float:left;width: 57px;height: 40px;">
						<font style="font-size: 24px;color: #F88600;font-weight: bold; margin-left:6px;">购物车</font>
						
						<!-- <div class="ms-search1">
							<select id="edu" name="edu" style="height: 30px;width:63px;background-color: #F1F1F1;">
						                         <option value="0"><font style="font-size: 12px;color: #949494;">宝贝</font></option>
						</select>
						<input type="button" value="搜索" style="float: right; color:#F2FAFF;background-color:#F88600;height:31px;width:70px;border: 0px;"></input>
						
						</div> -->
				
				</div>

			</article>

		</header>
		<div id="ms-center" class="personal-member">
			<div class="cont">

				<div class="cont-main" style="width: 1210px;">
					<div style="margin-top: 20px;width: 1200px;">
					
	
                        <!-- <input name="店铺" type="checkbox" value="" style="margin-top: 20px;" /> -->
                        <!-- <font style="font-size: 12px;color: #212121;margin-left: 20px;font-weight: bold;display: flex;margin-top: -15px;">店铺:巴鼎红火锅店专用</font>  -->
					

					  <br />

					   


                

					  <div id="box">
						<div id="content_box">
							<div class="imfor_top">

								<div class="pudc_top">商品</div>
								<div><input type="hidden" name=""></div>
								<div><input type="hidden" name=""></div>
								<div class="pices_top">单价</div>
								<div class="num_top">数量</div>
								<div class="totle_top">小计</div>
								<div class="del_top">操作</div>
							</div>

							<form action="__SITE__cadmin/car/add" method="post">
							<?php if($data): foreach($data as $val): ?>
							<div class="imfor">

								<div class="pudc"><img src="<?php echo $val->goods->pic; ?>" /><?php echo $val['goods_name']; ?></span>
								</div>
								<div ><input type="hidden" name="data[price][]" value="<?php echo $val['price']; ?>"></span>
								</div>
								<div ><input type="hidden" name="data[goods_id][]" value="<?php echo $val['goods_id']; ?>"></span>
								</div>									
								<div class="pices"><?php echo $val['price']; ?></div>
								<div class="num"><span class="reduc">&nbsp;-&nbsp;</span><input type="text" name=data[num][] value="1" /><span class="add">&nbsp;+</span></div>
								
								
								<div class="totle"><?php echo $val['price']; ?></div>
								<div class="del">删除</div>
							</div>
							<?php endforeach; else: ?>
							<div class="imfor">
							<div class="pudc">
								购物车里空空如也。。。
								</div>
							</div>
							<?php endif; ?>


						</div>



						<div class="foot">

							<div class="foot_cash"><input type="submit" value="购买"></div>
							<div class="foot_tol"><span>合计：￥</span><span id="susum">0</span></div>
						</div>
						</form>
					</div>
								</div>
							</div>
							<div class="clear "></div>
							<div class="ng-footer ">

								<textarea class="footer-dom " id="footer-dom-02 ">
								</textarea>
								<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
			.ng-footer {
				height: 130px;
				margin-top: 0;
			}
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		<script type="text/javascript " src="__SITE__/static/supp/js/safe/ms_common.min.js "></script>

	</body>

</html>