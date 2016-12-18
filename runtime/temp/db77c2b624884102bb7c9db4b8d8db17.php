<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\tp5\public/../application/index\view\theme\theme.html";i:1481717342;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND | 主题站</title>
    <meta name="keywords" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta name="description" content="TOPYS | 全球顶尖创意分享平台 OPEN YOUR MIND">
    <meta charset="UTF-8">
    <meta property="wb:webmaster" content="6b7e8fe750e725d7" />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="stylesheet" href="__SITE__/static/css/default_4.css" type="text/css" />
    <link rel="stylesheet" href="__SITE__/static/css/jqtransform_4.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="__SITE__/static/css/frontend_4.css" />    <!--[if IE 7]>
    <link rel="stylesheet" href="__SITE__/static/css/set_ie7_4.css" type="text/css" />
   
 
    <link rel="stylesheet" href=_SITE__static/css/set_ie6_4.css" type="text/css" />
    <![endif]-->

    <link rel="stylesheet" href="__SITE__/static/css/style_4.css" type="text/css" />
    <script src="__SITE__/static/js/jquery_4.js" type="text/javascript"></script>
    <script src="__SITE__/static/js/common_4.js" type="text/javascript"></script>
    <script src="__SITE__/static/js/jquery.placeholder.min_4.js" type="text/javascript"></script>
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
            <a href="/index"><h1 id="logo"></h1></a>
            <div class="nav-menu">
                <ul>
                    <!-- <li><a href="/topic/topics?category_id=60">主题站</a></li>
                    <li><a href="/album?special=1">专栏</a></li>
                    <li><a href="/event">活动</a></li>
                    <li><a href="/jobs">招聘</a></li> -->
                    <li><a href="__SITE__index/index/index">返回首页</a></li>
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

<!-- 主题站 -->
<div class="subject-station-wrap">
    <div class="s-station-left">
        <span>主题站</span>
        <p>发掘更多的主题站就在这里</p>
    </div>
    <div class="s-station-right">
         <font color="red"><b>全站最热排行</b></font>
    </div>
</div>

<!-- 主题站 左侧块 -->
<div class="center-wrap">
<div class="gambit-left">
    <div class="contact-wrap">
        <div class="theme-box">
            <div class="touch-container">
                <div class="touch-container-top">
                    <div class="touch-container-bott">
                        <div class="theme-text-personal clear">
                            <div class="personal-Center">
                                <ul>
                                                                        <?php foreach($data_theme as $dt): ?>
                                    
                                                                            <li style="background:#FFFFFF;"><a class="station-ico2" href="__SITE__/index/theme/theme?theme_id=<?php echo $dt['id']; ?>"><?php echo $dt['theme_name']; ?></a></li>
                                                                        <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gambit-right">
<!-- 审核 -->
<div class="subject-talk-wrap station-mT" id="article-list">
</div>
    <?php foreach($data as $d): ?>
                    <div class="flexible-box">
                    <div class="circle-container">
                        <div class="circle-center">


                            <div class="circle-top" style="background:#FFFFFF;">
                                <div class="circle-bottom" >
                                    <a href=""><div class="circle-img fancy-img" >
                                        <a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $d['id']; ?>" target="_blank"><img src="<?php echo $d['pic']; ?>"alt="" /></a>
                                        <!-- <span class="ci-ico1"><a target="_blank" href="/topic/topics?category_id=71"><font color="red">dddd</font></a></span> -->
                                    </div></a>
                                    <div class="circle-text">
                                        <a href="__SITE__/index/theme/goodsdetails?goods=<?php echo $d['id']; ?>" target="_blank"><?php echo $d['title']; ?></a>
                                    </div>
                                    <div class="circle-share">
                                       <img src="__SITE__/static/img/gwc.png" style="width:20px;height:20px;"> <?php echo $d['num']; ?>

                                       <img src="__SITE__/static/img/dj.png" style="width:20px;height:20px;"><?php echo $d['hits']; ?>
                                       &nbsp;&nbsp;&nbsp;&nbsp;
                                       <b>商品：</b><b><?php echo $d['goods_name']; ?></b>
                                    </div>
                                </div>
                            </div>
                        


                        </div>
                    </div>
                    <div class="ctext-container">

                        <span><a href="/master/detail?id=167943" target="_blank"><b>business:<?php echo $d->businessman->businessname; ?></b></a></span>
                    </div>
              </div>
              <?php endforeach; ?>
<!-- 翻页 -->
<div >

</div>
<div class="clear"></div>
</div>
</div>

<div class="clear"></div>
<div style="list-style-type: none;
display: inline;"></div>
<!-- 尾部 -->
<div id="footer-wrap">
    <div class="footer-container">
        <div class="ft-container">

            <div class="jiathis_style_32x32 none">
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_douban"></a>
                <a class="jiathis_button_fb"></a>
                <a class="jiathis_button_renren"></a>
                <a class="jiathis_button_email"></a>
                <a class="jiathis_button_cqq"></a>
                <a class="jiathis_button_weixin"></a>
                <a class="jiathis_button_twitter"></a>
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                <a class="jiathis_counter_style"></a>
            </div>
            <script type="text/javascript" >
                var jiathis_config={
                    appkey:{
                        "tsina":"3007137979"
                    },
                    pic:"",
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
            <script type="text/javascript" src="__SITE__/static/js/jia_4.js" charset="utf-8"></script>

            <div class="ft-logo"><a href="javascript:;"></a></div>
            <div class="ft-share">
                <a class="ftS-ico1" href="javascript:;" id="php-share-weixin"></a>
                <a class="ftS-ico2" href="http://weibo.com/topys" target="_blank"></a>
                <a class="ftS-ico3" href="http://www.douban.com/group/topys/" target="_blank"></a>
                <a class="ftS-ico4" href="https://www.facebook.com/kanjiantopys" target="_blank"></a>
                <a class="ftS-ico5" href="http://www.topys.cn/api/rss" target="_blank"></a>
                <a class="ftS-ico6" href="http://i.youku.com/u/id_UMjE4Njc0MzAw.html" target="_blank"></a>
                <a class="ftS-ico7" href="javascript:;" id="php-share-email"></a>
            </div>
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
            <div class="ft-copy"><b><?php echo $site[0]['blogroll']; ?> </b>&nbsp;&nbsp;<b>Author&nbsp;:&nbsp;Mr.廖&nbsp;&&nbsp;Mr.汤</b>&nbsp;&nbsp; ｜ <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: #747474"><?php echo $site[0]['record']; ?></a>｜<b>联系我们</b></div>
        </div>
    </div>
</div>


    

</body>
</html>