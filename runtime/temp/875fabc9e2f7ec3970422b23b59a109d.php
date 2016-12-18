<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp\www\tp5\public/../application/index\view\theme\goodsdetails.html";i:1481804679;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>坐上KitKat的椅子，感觉整个人都轻松了呢 | TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND | 作品</title>
    <meta name="keywords" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta name="description" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta charset="UTF-8">
    <meta property="wb:webmaster" content="6b7e8fe750e725d7" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="__SITE__/static/css/default.css" type="text/css" />
    <link rel="stylesheet" href="__SITE__/static/css/jqtransform.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="__SITE__/static/css/frontend.css" /><link rel="stylesheet" type="text/css" href="__SITE__/static/plugins/glDatePicker/css/android.css" />    <!--[if IE 7]>
    <link rel="stylesheet" href="__SITE__/static/css/set_ie7.css" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link rel="stylesheet" href="__SITE__/static/css/set_ie6.css" type="text/css" />
    <![endif]-->

    <link rel="stylesheet" href="__SITE__/static/css/style.css" type="text/css" />
    <script type='text/javascript' src='__SITE__/static/ckeditor/ckeditor.js'></script>
    <script src="__SITE__/static/js/jquery.js" type="text/javascript"></script>
    <script src="__SITE__/static/js/common.js" type="text/javascript"></script>
    <script src="__SITE__/static/js/jquery.placeholder.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $('input, textarea').placeholder();
        });
    </script>
    <style type="text/css">
    #qwert {
    	margin-left: 100px;

    }
    #qazx {
    	margin-left: 110px;
    	width: 200px;
    }
    #asdafas{
    	margin-left: 80px;
    }
    </style>
</head>
<body>
<!-- 头部 -->
<div class="header-wrap">
    <div class="header-container">
        <div class="nav-container">
            <a href="/index"><h1 id="logo"></h1></a>
            <div class="nav-menu">
                <ul>
                    <li><a href="__SITE__index/theme/theme">主题站</a></li>

                    
                </ul>
            </div>
        </div>
        <div class="set-container">

            <?php if(empty($user_type)): ?>
            <div class="set-box">
                <span><a href="<?php echo url('Index/Auth/register'); ?>">注册</a></span>
               	<span class="sign"><a href="<?php echo url('Index/Auth/login'); ?>" class="b_r login_pop">登录</a></span>
            </div>
            <?php elseif($user_type == 1): ?>

            <div class="set-box">
                <span>欢迎您，<b><?php echo $username; ?></b></span>
                <span class="sign"><font color="blue"><a href="__SITE__cadmin/index/index" class="b_r login_pop">个人秀</a></font></span>
                <span class="sign"><a href="__SITE__index/auth/loginout" class="b_r login_pop"><b>退出登录</b></a></span>
            </div>
             <?php elseif($user_type == -1): ?>
            <div class="set-box">
                <span>欢迎您，管理员<b><?php echo $username; ?></b></span>
                <span class="sign"><font color="blue"><a href="__SITE__sadmin/index/index" class="b_r login_pop">管理中心</a></font></span>
                <span class="sign"><a href="__SITE__index/auth/loginout" class="b_r login_pop"><b>退出登录</b></a></span>
            </div>
            <?php elseif($user_type == 2): ?>
            <div class="set-box">
                <span>欢迎您，创始人<b><?php echo $username; ?></b></span>
                <span class="sign"><font color="blue"><a href="__SITE__admin/index/index" class="b_r login_pop">超级管理中心</a></font></span>
                <span class="sign"><a href="__SITE__index/auth/loginout" class="b_r login_pop"><b>退出登录</b></a></span>
            </div>
            <?php elseif(\think\Session::get('user_type') == 3): ?>
            <div class="set-box">
                <span>欢迎您，商户<b><?php echo \think\Session::get('businessname'); ?></b></span>
                <span class="sign"><font color="blue"><a href="__SITE__badmin/index/index" class="b_r login_pop">商户中心</a></font></span>
                <span class="sign"><a href="__SITE__index/bauth/loginout" class="b_r login_pop"><b>退出登录</b></a></span>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
<!-- 广告图 -->

<!-- 讲座按钮 -->
<div class="article-lectures">
    <a href="javascript:;"><?php echo $theme; ?></a>
</div>

<div class="main-wrap">
	<div class="main-container-left">
		<div class="mcl-center">
			<div class="mcl-top">
				<div class="mcl-bott" style="background:#FFFFFF;">
					<div class="article-wrap">
						<div class="culling" style="display: none;"><a href="javascript:;">编辑精选</a></div>
						<div class="exclusive" style="display: none;"><a href="javascript:;">独家内容</a></div>

						<div class="article-title-box"></div>
						<div class="writing-box">
							<div class="writing-left">
								<div class="wri-ico" id="article-source"></div>
								<div class="wri-text">
									<span id="editor" style="font-weight:bold;"></span>
									<strong id="add_time" style="font-style:normal; font-weight:normal;"></strong>
								</div>
							</div>
							<div class="writing-right">
								<span><a href="javascript:;" class="c-share1" id="ico_view"></a><img src="__SITE__/static/img/dj.png" style="width:20px;height:20px;">|<?php echo $data[0]['hits']; ?></span>
								<span><a href="javascript:;" class="c-share1" id="ico_view"></a><img src="__SITE__/static/img/gwc.png" style="width:20px;height:20px;">|<?php echo $data[0]['num']; ?></span>
							</div>
						</div>
						<div class="details-img article-iBox show_ct">
						<?php foreach($data as $d): ?>
						<p><h1><?php echo $d['title']; ?></h1></p>

						<p><img src="<?php echo $d['pic']; ?>" style="width:650px;height:500px;"></p>
						<p><?php echo $d['article']; ?></p>
						<p><img src="<?php echo $d['pic_1']; ?>" style="width:650px;height:500px;"></p>
						<p><img src="<?php echo $d['pic_2']; ?>" style="width:650px;height:500px;"></p>
						<p><?php echo $d['article_1']; ?></p>
						<p><img src="<?php echo $d['pic_3']; ?>" style="width:650px;height:500px;"></p>
						<p><?php echo $d['article_2']; ?></p>
						<p><img src="<?php echo $d['pic_4']; ?>" style="width:650px;height:500px;"></p>
						<?php endforeach; ?>
						</div>


					</div>
					<b>我要评论</b>
					
					

					<?php if($user_id && $details && $indent): ?>
										<div>
					<form action="__SITE__/index/theme/add_comment" method="post">
					<textarea name="content" class='ckeditor' id='textarea'></textarea>
					<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
					<input type="hidden" name="goods_id" value="<?php echo $goods_id; ?>">
					<input type="submit" value="提交">
					</form>
					</div>
					<?php else: ?>

					
					<a href="__SITE__cadmin/means/means"></a>
					<font color="red"><b>请先登录或完善个人资料(商家不允许评论)</b></font>
					
					<?php endif; ?>


	
					<!-- 评论 -->

				</div>
			</div>
		</div>
	</div>

	<!-- 联系 -->
	<div class="main-container-right">
		<div class="contact-wrap">
			<div class="at-m">
			<?php foreach($data as $img): ?>
				<div class="atT-container" style="background:#FFFFFF;" id="person-inf">
					
						
							<div id="qwert">
							<?php if($img->businessman->pic): ?>
							<b><img src="<?php echo $img->businessman->pic; ?>" width="80"; height="80";></b><br/>
							<?php else: ?>
							头像暂无<br/>
							<?php endif; ?>
							<b>卖家：<?php echo $img->businessman->businessname; ?></b>
							</div>
							<div id="qazx"><b><font face="verdana" color="green">￥：<?php echo $price; ?></font></b></div>
							<!-- <div id="qazx"><b><font face="verdana" color="green">加入购物车</font></b></div> -->
							<br/><br/><br/>

                            <?php if(\think\Session::get('user_type') == 3 || \think\Session::get('user_type') == 2): ?>
                           <font color="red"><b> 商户购买行为已被禁止，如需购物请注册会员</b></font>
                            <?php else: ?>
                            <div class="class="ts-right store"">
                            <a class="ar-ico1 follow"  rel="22502" type="article" style="background:red;" id="asdafas" href="__SITE__/index/theme/add_car?goods_id=<?php echo $goods_id; ?>&user_id=<?php echo $user_id; ?>&price=<?php echo $price; ?>">加入购物车</a>
                            </div>
                            <?php endif; ?>

                            <br/><br/><br/><br/>


                             <?php if(\think\Session::get('user_type') == 3 || \think\Session::get('user_type') == 2): else: ?>
                            <a class="ar-ico1 follow"  rel="22502" type="article" style="background:red;" id="asdafas" href="__SITE__/index/theme/purchase?goods_id=<?php echo $goods_id; ?>&user_id=<?php echo $user_id; ?>&price=<?php echo $price; ?>&business_id=<?php echo $img->businessman->id; ?>">购买</a>&nbsp;&nbsp;&nbsp;
                            </div>
                            <?php endif; endforeach; ?>
			</div>
		</div>
				<div class="contact-wrap">
			<div class="touch-container">
				<div class="touch-container-top">
					<div class="touch-container-bott">
						<div class="available" style="background:#FFFFFF;">
							<div class="latest-title">本商品最新评论</div>
							<?php foreach($goodsinfo as $g): ?>
							<div class="latest-text">

								<div class="Popular-comments">
									<strong><a ><img src="<?php echo $g->userinfo->pic; ?>" alt="" /></a></strong>
									<a href=""><?php echo $g->user->username; ?></a>
		

									<span><?php echo $time/3600-$g['create_time']/3600; ?>小时前</span>

								</div>
								<div class="popular-box">
									<div class="popular-center">
										<div class="popular-center-top">
											<div class="popular-center-bott">
												<div class="popular-text"><?php echo $g['content']; ?></div>
											</div>
										</div>
									</div>
								</div>
								<div class="comm-on">
									<span>评论于</span>
									<a href=""><?php echo $g->goods->goods_name; ?></a>
								</div>



							</div>
							<?php endforeach; ?>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-wrap">
			<div class="touch-container">
				<div class="touch-container-top">
					<div class="touch-container-bott">
						<div class="available"  style="background:#FFFFFF;">
							<div class="latest-title"><font color="blue"><?php echo $theme; ?></font>：热门商品</div>
							<div class="latest-text">

							<?php foreach($goods as $val): ?>
								<div class="Pop-container ">
									<div class="h-portrait"><a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $val['id']; ?>" target="_blank"><img src="<?php echo $val['pic']; ?>" alt="" /></a></div>
									<div class="portrait-text">
										<div class="pT-tit"><a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $val['id']; ?>" target="_blank"><?php echo $val['goods_name']; ?></a></div>
										<div class="pT-name">By <?php echo $val->businessman->businessname; ?></div>
									</div>
									<div class="clear"></div>
								</div>
							<?php endforeach; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>

<!-- 广告 -->


<!--  -->


<!-- 尾部 -->
<!-- 尾部 -->
<div id="footer-wrap">
    <div class="footer-container">
        <div class="ft-container">


            <script type="text/javascript" >
                var jiathis_config={
                    appkey:{
                        "tsina":"3007137979"
                    },
                    pic:"http://112.74.87.111/attachments/1612/07/5847e4826dfc1.png",
                            shareImg:{
                    "showType":"MARK",
                            "bgColor":"",
                            "txtColor":"",
                            "text":"",
                            "services":"",
                            "position":"",
                            "imgwidth":"",
                            "imgheight":"",
                            "divname":""
                    }
                }
            </script>
            <!-- <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1361118040089811" charset="utf-8"></script> -->

            <div class="ft-logo"><a href="javascript:;"></a></div>
            <!-- <div class="ft-share">
                <a class="ftS-ico1" href="javascript:;" id="php-share-weixin"></a>
                <a class="ftS-ico2" href="http://weibo.com/topys" target="_blank"></a>
                <a class="ftS-ico3" href="http://www.douban.com/group/topys/" target="_blank"></a>
                <a class="ftS-ico4" href="https://www.facebook.com/kanjiantopys" target="_blank"></a>
                <a class="ftS-ico5" href="http://www.topys.cn/api/rss" target="_blank"></a>
                <a class="ftS-ico6" href="http://i.youku.com/u/id_UMjE4Njc0MzAw.html" target="_blank"></a>
                <a class="ftS-ico7" href="javascript:;" id="php-share-email"></a>
            </div> -->
        </div>
        <div class="ft-menu-container">
            <div class="ft-nav">
                <ul>
                    <li><a href="/about/aboutus">关于我们 ABOUT US</a>｜</li>
                    <li><a href="/about/contact">联系我们 CONTACT</a>｜</li>
                    <li><a href="/about/service">招聘及广告服务 ADVERTISE</a>｜</li>
                    <li style="display: none;"><a href="/about/feedback">意见反馈</a>｜</li>
                    <li><a href="/about/statement">免责声明 PRIVACY</a>｜</li>
                    <li style="display: none;"><a href="/about/links">友情链接</a>｜</li>
                    <li><a href="/about/mobile_app">移动应用 MOBILE</a></li>
                </ul>
            </div>
            <div class="ft-copy">TOPYS.CN 深圳市看见文化传播有限公司  2003-2015 ALL RIGHTS RESERVED.  ｜ <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: #747474">粤ICP备06047857号</a></div>
        </div>
    </div>
</div>

<!-- 分享 -->
<div class="recruit-share returnTop clear">
    <div class="recruit-sLink" style="display:none;">
        <a class="rsL-ico1" href="javascript:;"></a>
        <!-- a class="rsL-ico2" id="returnTop" href="javascript:;"></a -->
    </div>
    <div class="recruit-sLinkTwo">
        <div class="sLinkTwo-cent">
            <div class="slc-icoBox">
                <a class="slt-ico1" href="javascript:;"></a>
                <a class="slt-ico2" href="javascript:;"></a>
                <a class="slt-ico3" href="javascript:;"></a>
                <a class="slt-ico4" href="javascript:;"></a>
                <a class="slt-ico5" href="javascript:;"></a>
                <a class="slt-ico6" href="javascript:;"></a>
                <a class="slt-ico7" href="javascript:;"></a>
            </div>
        </div>
    </div>
    <div class="recruit-up"><a class="rsL-ico2" id="returnTop" href="javascript:;"></a></div>
    <div style="float:left;margin-top:10px;display: none;">
       <!--  <script src="http://s15.cnzz.com/stat.php?id=2317851&web_id=2317851&show=pic1" language="JavaScript"></script> -->
        <!-- <script type="text/javascript">
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?7d03826329b9cbb4dbc58d74f9b0a417";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script> -->
    </div>
</div>
<!--[if IE 6]>
<script src="__SITE__/static/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('.prev-stn,.next-stn,.button-wrap a,.ob-top,.ci-ico1 a,.ci-ico2,.ci-ico3,.rc-ico1,.pb-btn,.pb-btn-midd,.pb-btn-bott,.ci-ico3 a,.rc-ico1 a');
</script>
<![endif]-->
<script type="text/javascript">var __SITE__ = ''; var __USER__ = null;</script><script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100235449" data-redirecturi="http://www.topys.cn/connect/qq" charset="utf-8"></script><script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=3111834059" type="text/javascript" charset="utf-8"></script><script src="__SITE__/static/js/pagination.js"></script><script src="__SITE__/static/js/global.js"></script><script src="__SITE__/static/js/Detail/detail.js"></script><script type="text/javascript">
    $('#php-share-weixin').mouseover(function(){
        $('.jiathis_button_weixin').click();
        $('#jiathis_weixin_h3').html('关注我们的微信公共号');
        $('#jiathis_weixin_tip').html('打开微信，点击底部的“发现”，使用 “扫一扫” 即可关注我们的微信公共号。 ');
        var _src = __SITE__+'__SITE__/static/images/weixin.jpg';
        var _html = '<img width="250" height="250" src="'+_src+'" style="" alt="二维码加载失败...">';
        setTimeout(function(){
            $('#jiathis_webchat').html(_html);
        }, 1000)
    });
    $('#php-share-weixin').mouseout(function(){
        $('#jiathis_weixin_close').click();
    });

    $('#php-share-email').click(function(){
        $('.jiathis_button_email').click();
    });
</script>

<!--找回密码功能-->
<script src="__SITE__/static/js/Find/Find.js" type="text/javascript"></script>
<div class="pops-wrap show-layer-fpsw" style="display: none;">
    <div class="pops-center">
        <div class="pops-center-top">
            <div class="pops-center-bott">
                <!-- 登录 -->
                <div class="login-wrap" style="height: 260px;">
                    <div class="closed"></div>
                    <div class="login-title">找回密码</div>
                    <div class="login-box">
                        <form method="GET" action="/find" id="sendform">
                            <div class="pop-layer-btn">
                                <span class="pop-bg1"></span>
                                <span class="pop-bg2"><input class="pop-input" type="text" placeholder="邮箱" name="email" id="email"/></span>
                                <span class="pop-bg3"></span>
                            </div>
                            <div class="pop-btn-box"><a href="javascript:;" id="php-psw-submit">提交</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 找回密码功能弹出层 -->
<!--找回密码功能-->

<!--找回用户名功能-->
<div class="pops-wrap show-layer-username" style="display: none;">
    <div class="pops-center">
        <div class="pops-center-top">
            <div class="pops-center-bott">
                <!-- 登录 -->
                <div class="login-wrap" style="height: 260px;">
                    <div class="closed"></div>
                    <div class="login-title">找回用户名</div>
                    <div class="login-box">
                        <form method="GET" action="/find" id="sendformusername">
                            <div class="pop-layer-btn">
                                <span class="pop-bg1"></span>
                                <span class="pop-bg2"><input class="pop-input" type="text" placeholder="邮箱" name="email" id="email"/></span>
                                <span class="pop-bg3"></span>
                            </div>
                            <div class="pop-btn-box"><a href="javascript:;" id="php-username-submit">提交</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 找回用户名功能弹出层 -->
<!--找回用户名功能-->

<!-- 注册-选择用户类型 -->
<script src="__SITE__/static/plugins/location/location.js" type="text/javascript"></script>
<script src="__SITE__/static/js/jquery.jqtransform.js" type="text/javascript"></script>
<script src="__SITE__/static/js/Member/register.js" type="text/javascript"></script>
<div class="pops-wrap show-layer-usertype" style="display: none;">
    <div class="pops-center">
        <div class="pops-center-top">
            <div class="pops-center-bott">
                <!-- 注册 -->
                <div class="login-wrap">
                    <div class="closed"></div>
                    <div class="login-title">注册</div>
                    <div class="head-portrait"><a href="javascript:;"><img src="__SITE__/static/images/head-portrait-img.gif" alt="" /></a></div>
                    <div class="login-box register">
                        <div class="pop-btn-box php-select-utype" utype="1"><a href="javascript:;">我是个人用户</a></div>
                        <div class="pop-reg-btn php-select-utype" utype="4"><a href="javascript:;">我是企业用户</a></div>
                        <!--div class="pop-reg-btn php-select-utype" utype="5"><a href="javascript:;">我是品牌商&nbsp;/&nbsp;广告主</a></div-->
                    </div>
                    <div class="third-party-not reg-pop">已TOPYS账户？<a href="javascript:;" class="php-login-now">马上登录！</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 注册-选择用户类型 -->

<!-- 注册-填写用户资料 -->
<div class="pops-wrap show-layer-userinfo" style="display: none;">
    <div class="pops-center">
        <div class="pops-center-top">
            <div class="pops-center-bott">
                <!-- 登录 -->
                <form id="registerForm" action="" method="POST" onsubmit="return false;">
                <input type="hidden" name="type" id="type" class="" value="">
                <input type="hidden" name="district" id="district" class="" value="">
                <div class="login-wrap" style="height: 700px;">
                    <div class="closed"></div>
                    <div class="submit-portrait individuals"><a href="javascript:;"><img src="__SITE__/static/images/head-portrait-img.gif" alt="" /></a></div>
                    <div class="login-box">
                        <div class="pop-layer-btn">
                            <span class="pop-bg1"></span>
                            <span class="pop-bg2"><input class="pop-reg-input" type="text" placeholder="用户名" name="username" id="reg_user" validate="anc" len="7"/></span>
                            <span class="pop-bg3"></span>
                        </div>
                        <div class="pop-layer-btn">
                            <div class="per-regs  beau-form-province">
                                <span class="pop-bg1"></span>
                                <span class="pop-bg2 personal">
                                    <select id="province" name="province" class="be-select-width175 location-select">
                                        <option value="">省</option>
                                    </select>
                                </span>
                                <span class="pop-bg3"></span>
                            </div>
                            <div class="per-regs rerso-mar  beau-form-city">
                                <span class="pop-bg1"></span>
                                <span class="pop-bg2 personal">
                                    <select id="city" name="city"  class="be-select-width175 location-select" style="display: none;">
                                        <option value="">市</option>
                                    </select>
                                </span>
                                <span class="pop-bg3"></span>
                            </div>
                        </div>
                        <div class="pop-layer-btn beau-form-work" style="display: none;">
                            <span class="pop-bg1"></span>
                            <span class="pop-bg2">
                                <select  id="work" name="work" class="be-select-width380">
                                </select>
                            </span>
                            <span class="pop-bg3"></span>
                        </div>
                        <div class="pop-layer-btn">
                            <span class="pop-bg1"></span>
                            <span class="pop-bg2"><input class="pop-input" type="text" placeholder="邮箱" name="email"  id="reg_email" validate="email"/></span>
                            <span class="pop-bg3"></span>
                        </div>
                        <div class="pop-layer-btn">
                            <span class="pop-bg1"></span>
                            <span class="pop-bg2"><input class="pop-input" type="password" placeholder="密码" name="user_pass" id="reg_passwd"/></span>
                            <span class="pop-bg3"></span>
                        </div>
                        <div class="pop-layer-btn">
                            <span class="pop-bg1"></span>
                            <span class="pop-bg2"><input class="pop-input" type="password" name="repassword" class="" id="reg_repasswd" placeholder="确认密码" /></span>
                            <span class="pop-bg3"></span>
                        </div>
                        <div class="pop-layer-btn">
                            <div class="per-regs">
                                <span class="pop-bg1"></span>
                                <span class="pop-bg2 personal">
                                    <input class="pop-reg-input" name="verification" id="verification" type="text" placeholder="输入验证码" maxlength="4" validate="alpha" len="4"/>
                                </span>
                                <span class="pop-bg3"></span>
                            </div>
                            <div class="per-registered rerso-mar">
                                <a class="reg-code" href="javascript:;">
                                    <img id="php-reg-code" src="/api/verification" align="absmiddle" onclick="$(this).attr('src', '/api/verification&amp;'+Math.random());$('#verification').val('').focus();return false;" style="cursor:pointer" />
                                </a>
                                <a class="reg-refresh" href="javascript:;" id="php-reg-refresh"></a>
                            </div>
                        </div>
                        <div class="steps-container steps-two labe-perl">
                            <a href="javascript:;" class="prev-s php-prev-s">上一步</a>
                            <a href="javascript:;" class="nex-sTwo" id="php-done">完成注册</a>
                        </div>
                        <div class="clear"></div>
                        <div class="third-party-not reg-pop">已TOPYS账户？<a href="javascript:;" class="php-login-now">马上登录！</a></div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- 注册-填写用户资料 -->

</body>
</html>