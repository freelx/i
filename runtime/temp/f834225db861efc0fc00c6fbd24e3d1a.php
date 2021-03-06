<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/admin/view/index/index.html";i:1481786929;}*/ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>首页 - 管理中心</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="__SITE__/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__SITE__/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="__SITE__/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<link rel="stylesheet" href="__SITE__/assets/css/ace-fonts.css" />

		<!-- ace styles -->

		<link rel="stylesheet" href="__SITE__/assets/css/ace.min.css" />
		<link rel="stylesheet" href="__SITE__/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__SITE__/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__SITE__/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="

		__SITE__/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="__SITE__/assets/js/html5shiv.js"></script>
		<script src="__SITE__/assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							管理中心
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="__SITE__/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									创始人
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<!--<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>-->

								<li class="divider"></li>

								<li>
<a href="__SITE__index/auth/loginout" class="b_r login_pop"><b>退出登录</b></a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="__SITE__admin/index/index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 后台首页 </span>
							</a>
						</li>

						<li>
							<a href="__SITE__index/index/index">
								<i class="icon-text-width"></i>
								<span class="menu-text">网站首页</span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 主题站 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="__SITE__admin/subject/elements">
										<i class="icon-double-angle-right"></i>
										现有主题站
									</a>
								</li>

								<li>
									<a href="__SITE__admin/subject/buttons">
										<i class="icon-double-angle-right"></i>
										增加主题站
									</a>
								</li>

								<li>
									<a href="__SITE__admin/subject/treeview">
										<i class="icon-double-angle-right"></i>
										删除主题站
									</a>
								</li>

								

								

								
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="__SITE__admin/Management/tables">
										<i class="icon-double-angle-right"></i>
										商户管理
									</a>
								</li>

								<li>
									<a href="__SITE__admin/Management/jqgrid">
										<i class="icon-double-angle-right"></i>
										会员管理
									</a>
								</li>
								<li>
									<a href="__SITE__admin/Management/user_vip">
										<i class="icon-double-angle-right"></i>
										vip会员管理
									</a>
								</li>
								<li>
									<a href="__SITE__admin/Management/user_admin">
										<i class="icon-double-angle-right"></i>
										员工管理
									</a>
								</li>
								<li>
									<a href="__SITE__admin/Management/announcement">
										<i class="icon-double-angle-right"></i>
										全站公告
									</a>
								</li>
							</ul>
						</li>
<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 网站管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="__SITE__admin/Manage/blogroll">
										<i class="icon-double-angle-right"></i>
										友情链接
									</a>
								</li>

								<li>
									<a href="__SITE__admin/Manage/information">
										<i class="icon-double-angle-right"></i>
										网站信息
									</a>
								</li>

								

								
							</ul>
						</li>

						

						

						

						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					
						

						<div class="row">
							<div class="col-sm-6">
										<h3 class="header smaller lighter green">用户分析&nbsp;&nbsp;&nbsp;共注册用户<?php echo $user; ?>人</h3>

										<div class="row">
											<div class="col-xs-8">

												<div class="progress" data-percent="<?php echo $user/$count*100; ?>%">
													<div class="progress-bar" style="width:<?php echo $user/$count*100; ?>%;"></div>
												</div>
												会员		<br/>
												共计<?php echo $user; ?>人
												<div class="progress" data-percent="<?php echo $vip/$count*100; ?>%">
													<div class="progress-bar" style="width:<?php echo $vip/$count*100; ?>%;"></div>
												</div>
												VIP会员	<br/>
												共计<?php echo $vip; ?>人
												<div class="progress" data-percent="<?php echo $admin/$count*100; ?>%">
													<div class="progress-bar" style="width:<?php echo $admin/$count*100; ?>%;"></div>
												</div>
												管理员	<br/>
												共计<?php echo $admin; ?>人
												<div class="progress" data-percent="<?php echo $bus/$count*100; ?>%">
													<div class="progress-bar" style="width:<?php echo $bus/$count*100; ?>%;"></div>
												</div>
												商户	<br/>
												共计<?php echo $bus; ?>家
												
											</div><!-- /span -->

											
										</div><!-- /row-fluid -->

									</div><!-- /span -->

						</div><!-- /.row -->
						<div class="row">
														<div class="col-sm-6">
										<h3 class="header smaller lighter green">交易分析&nbsp;&nbsp;&nbsp;本月全站交易额为<?php echo $sum[0]['SUM(deal_sum)']; ?>元</h3>

										<div class="row">
											<div class="col-xs-8">

	
												本月销量最高	<br/>
												<?php echo $max[0]['businessname']; ?>，共计销量为<?php echo $max[0]['MAX(deal_sum)']; ?>元，占总销售量的<?php echo $max[0]['MAX(deal_sum)']/$sum[0]['SUM(deal_sum)']; ?><br/>
	
												本月花费最高		<br/>
												<?php echo $umax[0]['username']; ?>,共计花费为<?php echo $umax[0]['MAX(cost)']; ?>元，成为本站最大金主<br/>

												本月销量最低	<br/>
												<?php echo $min[0]['businessname']; ?>，共计销量为<?php echo $min[0]['MIN(deal_sum)']; ?>元.<br/>

												
											</div><!-- /span -->

											
										</div><!-- /row-fluid -->
									</div>



						</div>
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				
					

					
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='__SITE__/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='__SITE__/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__SITE__/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="__SITE__/assets/js/bootstrap.min.js"></script>
		<script src="__SITE__/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="__SITE__/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="__SITE__/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="__SITE__/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__SITE__/assets/js/jquery.slimscroll.min.js"></script>
		<script src="__SITE__/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="__SITE__/assets/js/jquery.sparkline.min.js"></script>
		<script src="__SITE__/assets/js/flot/jquery.flot.min.js"></script>
		<script src="__SITE__/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="__SITE__/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="__SITE__/assets/js/ace-elements.min.js"></script>
		<script src="__SITE__/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->


			
		</script>
	</body>
</html>
