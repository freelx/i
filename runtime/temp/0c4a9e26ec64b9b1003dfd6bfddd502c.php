<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/index/view/index/index.html";i:1481721840;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND</title>
    <meta name="keywords" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta name="description" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta charset="UTF-8">
    <meta property="wb:webmaster" content="6b7e8fe750e725d7" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="__SITE__/static/css/default.css" type="text/css" />
    <link rel="stylesheet" href="__SITE__/static/css/jqtransform.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="__SITE__/static/css/frontend.css" /><link rel="stylesheet" type="text/css" href="__SITE__/static/css/android.css" /> 
    <link rel="stylesheet" type="text/css" href="__SITE__/static/css/lunstyle.css" />   

    <!--[if IE 7]>
    <link rel="stylesheet" href="css/set_ie7.css" type="text/css" />
    <![endif]-->
    <!--[if IE 6]>
    <link rel="stylesheet" href="css/set_ie6.css" type="text/css" />
    <![endif]-->

    <link rel="stylesheet" href="__SITE__/static/css/style.css" type="text/css" />
    <script src="__SITE__/static/js/common.js" type="text/javascript"></script>

    <script src="__SITE__/static/js/jquery.placeholder.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $('input, textarea').placeholder();
        });
    </script>

</head>
<body>
<!-- 头部 -->
<div class="header-wrap">
    <div class="header-container">
        <div class="nav-container">
            
            <div class="nav-menu">
                   
                <ul>
                        <?php foreach($data as $v): ?>

                    <li><a href="__SITE__/index/theme/theme"><?php echo $v['theme_name']; ?></a></li>
                          <?php endforeach; ?>  
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
                <span>欢迎您，商户:<b><?php echo \think\Session::get('businessname'); ?></b></span>
                <span class="sign"><font color="blue"><a href="__SITE__badmin/index/index" class="b_r login_pop">商户中心</a></font></span>
                <span class="sign"><a href="__SITE__index/auth/loginout" class="b_r login_pop"><b>退出登录</b></a></span>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>
        <!-- 轮播 -->
       
        	<!-- 代码部分begin -->
			<div class="main_banner">
				<div class="main_banner_wrap">
					<canvas id="myCanvas" width="150" height="150"></canvas>
					<div class="main_banner_box" id="m_box">
						<a href="javascript:void(0)" class="banner_btn js_pre">
							<span class="banner_btn_arrow"><i></i></span>
						</a>
						<a href="javascript:void(0)" class="banner_btn btn_next js_next">
							<span class="banner_btn_arrow"><i></i></span>
						</a>
						<ul>
							<li id="imgCard0">
								<a href=""><span style="opacity:0;"></span></a>      
								<img src="__SITE__/static/img/lun1.jpg" alt="">
								<p style="bottom:0">周杰伦粉丝版MV</p>
							</li> 
							<li id="imgCard1">
								<a href=""><span style="opacity:0.4;"></span></a>      
								<img src="__SITE__/static/img/lun2.jpg" alt="">
								<p>乐侃有声节目第二期</p>
							</li> 
							<li id="imgCard2">
								<a href=""><span style="opacity:0.4;" ></span></a>        
								<img src="__SITE__/static/img/lun3.jpg" alt="">
								<p>乐见大牌：”荣“耀之声，”维“我独尊</p>
							</li> 
							<li id="imgCard3">
								<a href=""><span style="opacity:0.4;"></span></a>      
								<img src="__SITE__/static/img/lun4.jpg" alt="">
								<p>王力宏四年心血结晶</p>
							</li> 
							<li id="imgCard4">
								<a href=""><span style="opacity:0.4;"></span></a>      
								<img src="__SITE__/static/img/lun5.jpg" alt="">
								<p>MV精选：《武媚》女神团美艳大比拼</p>
							</li> 
						</ul>
						<!--火狐倒影图层-->
						<p id="rflt"></p>
						<!--火狐倒影图层-->
					</div>
					<!--序列号按钮-->
					<div class="btn_list">
						<span class="curr"></span><span></span><span></span><span></span><span></span>        
					</div>
				</div>
			</div>
			<script src="__SITE__/static/js/jquery44.js"></script>
			<script src="__SITE__/static/js/lanren.js"></script>
			<!-- 代码部分end -->

            <!-- <ul>
                <li>
                            <a href="/ad?id=80&type=1&url=http://www.topys.cn/article/detail?id=22292" target="_blank">
                                <img data-src="__SITE__/static/picture/5823d57b45da9.png" alt="" />
                            </a>
                        </li><li>
                            <a href="/ad?id=17&type=1&url=http://www.topys.cn/article/detail?id=22140" target="_blank">
                                <img data-src="__SITE__/static/picture/581c4a43eb47d.png" alt="" />
                            </a>
                        </li><li>
                            <a href="/ad?id=18&type=1&url=http://www.topys.cn/thenorthface/" target="_blank">
                                <img data-src="__SITE__/static/picture/57fefafeef3e6.png" alt="" />
                            </a>
                        </li><li>
                            <a href="/ad?id=103&type=1&url=http://www.topys.cn/article/detail?id=22129" target="_blank">
                                <img data-src="__SITE__/static/picture/58202420ae58b.png" alt="" />
                            </a>
                        </li>            </ul>
            <div class="prev-stn prev"></div>
            <div class="next-stn next"></div>
            <div class="button-wrap">
                <a href="javascript:;"></a>
                <a href="javascript:;"></a>
                <a href="javascript:;"></a>
                <a href="javascript:;"></a>
            </div> -->
       
        <!-- 图片 -->
<!--         <div class="i-paly-wrap">
            <ul>
                <li ><a href="/ad?id=206&type=6&url=http://www.topys.cn/jobs/jobs_detail?id=21617" target="_blank"><img src="__SITE__/static/picture/58326cf26e233.jpg" alt="" /></a></li><li ><a href="/ad?id=213&type=6&url=http://www.topys.cn/article/detail?id=22419" target="_blank"><img src="__SITE__/static/picture/5832549096283.png" alt="" /></a></li><li ><a href="/ad?id=216&type=6&url=http://www.topys.cn/article/detail?id=18182" target="_blank"><img src="__SITE__/static/picture/58340f158970d.png" alt="" /></a></li><li class="n-theM"><a href="/ad?id=110&type=6&url=http://www.topys.cn/article/detail?id=22360" target="_blank"><img src="__SITE__/static/picture/583252af4acba.png" alt="" /></a></li>            </ul>
        </div> -->

        <!-- 精选 -->

        <div class="fancy">
            <div class="fancy-f"><a href="javascript:;" style="color:#FF0000;">精选</a></div>
            
            <div class="fancy-text">
        <?php foreach($data as $d): ?>            
                <a class="f-ico<?php echo $d['id']; ?>" href="__SITE__/index/theme/theme"><?php echo $d['theme_name']; ?></a>
        <?php endforeach; ?>
            </div>
            
            <div class="fancy-more"><a href="/index"><font color="red">最热商品</font></a></div>
        </div>
        <div class="fancy">
            <div class="fancy-f"><a href="javascript:;" style="color:#FF0000;"></a></div>
            
            <div class="fancy-text">

            </div>
            
<div class="fancy-more"><a href="/index">公告:<font color="red"><marquee><?php echo $n; ?></marquee></font></a></div>
        </div>
        <!--  -->
        <div class="popular-activity-wrap iF-wrap">
<table>
        <?php foreach($data as $d): ?>
         <tr>

            <?php foreach($bb[($d['id']-1)] as $b): ?>
            <td>
                <div class="flexible-box">
                    <div class="circle-container">
                        <div class="circle-center">


                            <div class="circle-top" style="background:#FFFFFF;">
                                <div class="circle-bottom" >
                                    <div class="circle-img fancy-img">
                                        <a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $b['id']; ?>" target="_blank" ><img src="<?php echo $b['pic']; ?>  "alt="" /></a>
                                        <span class="ci-ico1"><a target="_blank" href="/topic/topics?category_id=71"><font color="red"><?php echo $d['theme_name']; ?></font></a></span>
                                    </div>
                                    <div class="circle-text">
                                        <a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $b['id']; ?>" target="_blank"><?php echo $b['title']; ?></a>
                                    </div>
                                    <div class="circle-share">
                                       <img src="__SITE__/static/img/gwc.png" style="width:20px;height:20px;"> <?php echo $b['num']; ?>

                                       <img src="__SITE__/static/img/dj.png" style="width:20px;height:20px;"><?php echo $b['hits']; ?>
                                       &nbsp;&nbsp;&nbsp;&nbsp;
                                       <b>商品：</b><b><?php echo $b['goods_name']; ?></b>
                                    </div>
                                </div>
                            </div>
                        


                        </div>
                    </div>
                    <div class="ctext-container">

                        <span><a href="/master/detail?id=167943" target="_blank"><b>business:<?php echo $b->businessman->businessname; ?></b></a></span>
                    </div>
              </div>
              </td>
                  <?php endforeach; ?>

           </tr>
            <?php endforeach; ?>

</table>

</div>





        <!-- 精彩文章 -->
        <div class="wonderful-article">
            <div class="splendid-box">
                <div class="splendid-title"><a href="javascript:;">精彩文章</a></div>

                <?php if($best[0]['pic'] === null): ?>
                                <div class="splendid-img">
                <b>请联系管理员添加图片</b>
                </div>
                
                <?php else: ?>
                <div class="splendid-img">
                    <img src="<?php echo $best[0]['pic']; ?>"  />

                </div>
                <?php endif; ?>
                <div class="splendid-text"><?php echo $best[0]['title']; ?></div>

            </div>
        </div>

        <!-- 加载更多 -->

<!--             <div class="load-more">
            <div class="load-midd-bg" style="background:#428BCA;" id="a">加载更多</div>
            <input type="hidden" name="id" value="<?php echo $count; ?>" id="b">
            </div> -->


<!-- 尾部 -->
<div id="footer-wrap">
    <div class="footer-container">
      
        <div class="ft-menu-container">

            <div class="ft-copy"><b><?php echo $site[0]['blogroll']; ?> </b>&nbsp;&nbsp;<b>Author&nbsp;:&nbsp;Mr.廖&nbsp;&&nbsp;Mr.汤</b>&nbsp;&nbsp; ｜ <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: #747474"><?php echo $site[0]['record']; ?></a>｜<b>联系我们</b></div>
            <div class="ft-copy">
            <?php foreach($si as $s): ?>
            <b><a href="<?php echo $s['blogroll']; ?>"><?php echo $s['site_name']; ?> </a></b> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>






</body>
</html>
