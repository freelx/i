<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/badmin/view/index/index.html";i:1481714572;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link type="text/css" rel="stylesheet" href="__SITE__/static/buss/css/carousel.css">
<link rel="stylesheet" href="__SITE__/static/supp/css/safe/css.css" />
 <link rel="stylesheet" href="__SITE__/static/supp/css/safe/common.min.css" />
<link rel="stylesheet" href="__SITE__/static/supp/css/safe/ms-style.min.css" />
<link rel="stylesheet" href="__SITE__/static/supp/css/safe/personal_member.min.css" />
<link rel="stylesheet" href="__SITE__/static/supp/css/safe/Snaddress.min.css" />
<link rel="stylesheet" href="__SITE__/static/supp/css/sui.css" />
</head>
<body>

<!-- 代码部分begin -->
<div class="container">
<div class="pictureSlider poster-main" data-setting='{"width":1000,"height":270,"posterWidth":640,"posterHeight":270,"scale":0.8,"autoPlay":true,"delay":2000,"speed":300}'>
	<div class="poster-btn poster-prev-btn"></div>
    <ul class="poster-list">
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/01.jpeg" width="200%" height="200%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/02.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/03.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/04.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/05.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/06.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/07.jpeg" width="100%" height="100%"></a></li>
        <li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/08.jpeg" width="100%" height="100%"></a></li>
    	<li class="poster-item"><a href="#"><img src="__SITE__/static/buss/images/09.jpeg" width="100%" height="100%"></a></li>
    </ul>
    <div class="poster-btn poster-next-btn"></div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="__SITE__/static/buss/js/carousel.js"></script>
<script>
$(function(){
	Carousel.init($(".pictureSlider"));
});
</script>
<!-- 代码部分end -->

<div id="" class="ng-top-banner">
            就收到货
        </div>
        

        <header class="ms-header ms-header-inner ms-head-position">
            <!-- <article class="ms-header-menu"> -->
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
                    .personal-member .main-wrap {
                        width: 1068px;
                        margin: 15px 0 30px 180px;
                        padding: 0 0 39px 0;
                        border: 1px solid #ddd;
                        background: none;
                    }

                    
                </style>
                <div class="header-menu">
                    
                   
                </div>

            <!-- </article> -->

            <article class="ms-useinfo">
                <div class="header-useinfo" id="">
                    <div class="ms-avatar">
                        <div class="useinfo-avatar">
                            <img src="">
                            <div class="edit-avatar"></div>
                            
                        </div>
                        
                        <a></a>
                        
                    </div>

                    <div class="ms-name-info">
                        <div class="link-myinfo">
                            
                            <a></a>
                        
                        </div>
                        <div class="info-member">
                            <span class="name-member member-1">
                         商户:<?php echo \think\Session::get('businessname'); ?></span>
                            <span style="margin-left: 20px;">
                         <a href="__SITE__/badmin/means/means">完善我的资料</a></span>
                        </div>
                        <div class="info-safety">
                            <span class="safety-lv lv-3">
                    
                        <a href="__SITE__/badmin/means/load">上传头像：</a>
                    </form>
                            </span>
                            <a class="bind-phone" href="__SITE__/badmin/means/change">
                                <i style="background-image: url(__SITE__/static/supp/img/修改手机.png);"></i>修改个人信息</a>
                        </div>
                    </div>
                </div>

            </article>
        </header>
        <div id="ms-center" class="personal-member">
            <div class="cont">
                <div class="cont-side">
                    <div class="side-neck" style="margin-top: 20px;">
                        <i></i>
                    </div>
                    <div class="ms-side" style="margin-top: 20px;">
                        <article class="side-menu side-menu-off">
                            <dl class="side-menu-tree" style="padding-left: 50px;">
                            <dt><img src="__SITE__/static/supp/img/左侧/我的购物车.png"  style="margin-right: 10px;margin-left: -20px;"/>店铺管理</dt>
                                <dd>
                                    <a href="__SITE__/index/index/index">商城首页</a>
                                </dd>
                                <dd>
                                    <a href="__SITE__/badmin/mygoods/mygoods">我的商品展示</a>
                                </dd>
                                <dd>
                                    <a href="__SITE__/badmin/uploadimg/uploadimg">上传商品美图</a>
                                </dd>
                                <dd>
                                    <a href="__SITE__/badmin/uploadart/uploadart">上传商品美文</a>
                                </dd>
                                <dd>
                                    <a href="__SITE__/badmin/mine/mine">商品销量</a>
                                </dd>
                                <dt><img src="__SITE__/static/supp/img/左侧/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
                                <dd>
                                    <a href="__SITE__/badmin/order/order">我的订单</a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                                <dd>
                                    <a ></a>

                                </dd>
                                <dd>
                                    <a ></a>

                                </dd>
                                <dd>
                                    <a ></a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                                <dt><img src=""  style="margin-right: 10px;margin-left: -20px;"/></dt>
                                <dd>
                                    <a></a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                                <dd>
                                    <a ></a>

                                </dd>
                                <dt><img src=""  style="margin-right: 10px;margin-left: -20px;"/></dt>
                                <dd>
                                    <a ></a>

                                </dd>
                                <dd>
                                    <a></a>

                                </dd>
                            </dl>

                            <a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
                        </article>
                    </div>
                </div>
                <div class="cont-main">
                    <div class="main-wrap mt15" style="border: 0px;">
                        <!--<h3>
                            <strong>我的会员等级</strong>
                        </h3>-->
                        <div class="server-wrapper">
                            <div class="server-tab" style="margin-top: 26px;">
                                <div style=" float: left;vertical-align: bottom;text-align: center;">
                                <div style="width: 680px;padding: 10px;float: left;background-color: #fff;height: 250px;">
                                <div style="float: left;width:200px ;height: 152px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 130px; margin-left: 50px;    margin-top:20px;"></span>
                                        <span style="font-size: 18px;color: #F88600;display: block;    display: block; width: 100px; margin-left: 50px;margin-top: 28;"><?php echo $time; ?></span>
                                        
                                            <input type="hidden" value="10" name="sign" id="ccc" />
                                    
                                             <input id="bbb" onclick="do()"  type="submit" value="当前日期" style="background-color: #f56a48;border-radius: 5px;color: #fff; font-size:14px;border: 0px;width: 107px;height: 26px;margin-top: 30px;" />
                                     
                                        <script type="text/javascript">

                                            function do() {

                                                var a = document.getElementById('ccc').value;
                                                var b = document.getElementById('bbb').value;
                                                //调用ajax封装好的函数，并且传入参数
                                                ajax({
                                                    method: 'get',
                                                    url: 'http://www.tp5.com/cadmin/index/sign',
                                                    async: true,
                                                    data: {
                                                        a: a,
                                                        b: b
                                                    },
                                                    success: function(data) {
                                                    /*var data = eval('('+ data +')');
                                                      if(data.status){
                                                            
                                                           document.getElementById('msg').innerText = data.msg;
                                                        }else{
                                                            document.getElementById('msg').innerText = data.msg;*/
                                                        }
                                                    }
                                                });
                                            }
                                           </script>
                                    </div>
                                </div>
                                
                                <div style="float: left;width:200px ;height: 152px;;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px; margin-bottom: 20px;   margin-top: 20px;">我的收益</span>
                                        <span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;">
                                        <?php if($data[0]['deal_sum'] == 0): ?>
                                        您的收益目前为零
                                        <?php else: ?>
                                        <?php echo $data[0]['deal_sum']; endif; ?>


                                        </span>
                                        <img src="__SITE__/static/supp/img/我的买豆/矢量智能对象.png" style="position: absolute; margin-top: 30px;  margin-left: -80px;;" />  
                                    </div>
                                </div>
                                
                                <div style="float: left;width:200px ;height: 152px;margin-left: 20px;border: 1px #ccc solid;box-shadow: 1px 1px 1px #F5F5F5;padding: 5px;">
                                    <div style="width: 100%;height: 100%;border: 1px #F2873B dashed;">
                                        <span style="font-size: 18px;color: #686868;font-weight: bold;display: block;    display: block; width: 100px; margin-left: 50px;    margin-top: 20px; margin-bottom: 20px;">我的账户</span>
                                        
                                        <span style="width: 87px;height: 20px;background-color: #fee3dc;padding: 5px;border: 1px #C62B26 dashed;border-radius: 5px;"><?php echo $data[0]['balance']; ?></span>
                                        
                                        <img src="__SITE__/static/supp/img/我的买豆/猪的图标.png" style="position: absolute; margin-top: 13px;  margin-left: -80px;;" />                                    </div>
                                </div>
                                
                                
                                </div>  
                                <div style="float: left;width:250px ;height: 152px;margin-left: 20px;">
                                 <p style="font-size: 14px;color: #686868;text-align:center;background-color: #fff;padding: 10px;color: #F88600;font-size: 14px;"><a href="__SITE__index/index/index">返回首页</a></p>
                                 <div style="background-color: #fff;margin-top: 10px;height: 300px;padding: 10px;">
                                    <p style="font-size: 16px;text-align: left;">我的优惠券</p>
                                    <img src="__SITE__/static/supp/img/个人中心/组-15.png"/>
                                    <img src="__SITE__/static/supp/img/个人中心/组-14.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">全部优惠券(<font color="red">2</font>)</p>
                                 </div>
                                
<!--                                 <div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
                                    <p style="font-size: 20px;text-align: left;">收藏的商品</p>
                                    <img src="__SITE__/static/supp/img/个人中心/形状-1.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">您的收藏空空的，赶紧<br/>
                                    去首页看看购物吧</p>
                                 </div> -->
                                <div style="background-color: #fff;margin-top: 10px;height: 200px;padding: 10px;">
                                    <p style="font-size: 16px;text-align: left;">我的足迹</p>
                                    <img src="__SITE__/static/supp/img/个人中心/矢量智能对象.png" style="margin-top: 20px;"/>
                                    <p style="margin-top: 30px;font-size: 14px;color: #686868;">您还没有留下任何足迹呢！</p>
                                 </div>
                                
                                
                                </div>
                                
                                </div>
                                
                                <div style="width: 680px;padding:10px;display: inline-block; margin-top: 20px;background-color: #fff;float: left;border-bottom: 1px #ccc solid;padding-bottom: 20px;">
                                    <span style="text-align: left;line-height: 20px;">根据浏览 猜你喜欢</span>
                                </div>
                                <div style="width: 680px;padding:10px;display: inline-block; margin-top:0px;background-color: #fff;float: left;">
                                </div>
                                
                            
                        </div>
                    </div>
                </div>
                
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
        <div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
