<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/home/wwwroot/www.iseeyou.ac.cn/public/../application/index/view/bauth/bregister.html";i:1481678684;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页</title>
	<meta name="keywords" content="创意共享">
	<meta name="content" content="创意共享">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link type="text/css" rel="stylesheet" href="__SITE__/static/css/login.css">
    <script type="text/javascript" src="__SITE__/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="__SITE__/static/js/jquery-1.11.3.js"></script>
    <script>
        $(function(){
            function checkUsername() {
                //alert(11);
                var reg = /^[a-zA-Z0-9\u4e00-\u9fa5]{2,18}/;
                $.post('__SITE__/index/Bauth/authentication', {username:$("#username").val()}, function(data){
                    if (data.status) {
                            $("#username").next().html('<font color="red">用户名已被注册</font>');
                            
                            return;
                        }
                       
                        //正则匹配用户名
                        if (reg.test($("#username").val())) {
                           
                                $("#username").next().html('<font color="green">合乎要求的用户名</font>');
                                return true;
                            } else {
                                
                                $("#username").next().html('<font color="red">用户名需为6-18位</font>');
                                return false;
                            } 
                }, 'json');
            }

            function checkPassword() {
                    var reg = /\w{6,32}/;
                    //正则检测密码是否符合要求
                    if (reg.test($("#password").val())) {
                        $("#password").next().html('<font color="green">合乎要求的密码</font>');
                        return true;
                    } else {
                        $("#password").next().html('<font color="red">不合乎要求的密码</font>');
                        return false;
                    }
                }

            $("#username").blur(function(){
                    checkUsername();
                });

            $("#password").blur(function(){
                    checkPassword();
                });


            function checkVerify(){
                    $.ajaxSetup({ 
                        async : false  
                    });
                    var i;
                    $.post('__SITE__/index/Bauth/verify',{verify:$("#verify").val()},function(data){
                        if (data.status) {
                            $("#verify").next().html('<font color="green">验证码正确</font>');
                            i = true;
                            
                        } else {
                            $("#verify").html('<font color="red">验证码错误</font>');
                            i = false;
                        }
                    },'json');

                    return i;
                }

                var j;

                $("#sub").click(function () {
                j = checkVerify();
                if (checkPassword() && j) {
                        $.post('__SITE__/index/Bauth/registerVerify',{username:$("#username").val(),password:$("#password").val()},function(data){
                            if (data.status) {
                           
                                setTimeout(function(){
                                    location.href='__SITE__/index/Bauth/blogin';
                                },30);
                            } else {
                                alert(data.msg);
                            }
                        },'json');
                } else {
                    if (!checkPassword()) {
                        alert('你没看见不符合要求吗');return;
                    }
                    if (!j) {
                        alert('你没看见叉号吗');
                    }
                }
        
                });


        });
    </script>
</head>
<body class="login_bj" >

<div class="zhuce_body">
	<div class="logo"><a href="#"><img src="__SITE__/static/img/logo.png" width="114" height="54" border="0"></a></div>
    <div class="zhuce_kong">
    	<div class="zc">
        	<div class="bj_bai">
             <h3><a href="__SITE__index/auth/register">会员注册</a> /<font color="green">商户注册</font></h3>

       	  	  
                <input name="username" id="username" type="text" class="kuang_txt phone" placeholder="用户名为6-18位"><span class="one"></span>
                <!-- <input name="" type="text" class="kuang_txt email" placeholder="密码"> -->
                <input name="password" id="password" type="password" class="kuang_txt possword" placeholder="密码为6-32位"><span></span>
                <!-- <input name="" type="text" class="kuang_txt possword" placeholder="邀请码"> -->
                <input name="verify" id="verify" type="text" class="kuang_txt yanzm" placeholder="验证码"><span></span>
                <div>
                	<div class="codeff"><?php echo captcha_img(); ?></div>
                	<!-- <div class="shuaxin"><a href="#"><img src="__SITE__/static/img/zc_25.jpg" width="13" height="14"></a></div> -->
                </div>
                <div>
               		<input name="" type="checkbox" value=""><span>已阅读并同意<a href="#" target="_blank"><span class="lan">《XXXXX使用协议》</span></a></span>
                </div>
                <input name="注册" id="sub" type="submit" class="btn_zhuce" value="注册">
                
             
            </div>
        	<!-- <div class="bj_right">
                            <p>使用以下账号直接登录</p>
                            <a href="#" class="zhuce_qq">QQ注册</a>
                            <a href="#" class="zhuce_wb">微博注册</a>
                            <a href="#" class="zhuce_wx">微信注册</a>
                            <p>已有账号？<a href="login.html">立即登录</a></p>
                        
                        </div> -->
        </div>
        <P>Diyhe.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎您定制盒子模型</P>
    </div>

</div>
    
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>

</body>
</html>