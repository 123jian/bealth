<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/common.css"/>
<title>登录</title>
</head>

<body class="loginBody">
<div class="logo">
    <img class="fl" src="images/logo.jpg" width="49" height="37" />
    <span class="logoSpan"></span>
    <span class="wel">欢迎登录</span>
</div>
<div class="loginWrapper">
    <div class="login_wrap clearfix">
    	<div class="imgWrap">
		<img src="./images/123.jpg" width="452px" height="370px" >
		</div>
        <form class="loginFrm" action="index.php?r=login/login_pro" method="post">
    		<p class="txt_r"><a class="register" href="index.php?r=register/index">注册</a></p>
            <div class="frmItem mt15">
            	<p>邮箱/用户名/已验证手机</p>
                <input type="text" class="txt" name="username"/>
            </div>
            <div class="frmItem">
            	<p>密码</p>
                <input type="password" class="txt txtPwd" name="password"/>
                <span class="pwdIcon"></span>
            </div>
            <div class="frmItem mt50">
            	<input type="checkbox" class="checkBtn" value="auto" name="autologin"/><span>自动登录</span>
                <input type="checkbox" class="checkBtn" /><span>安全控件登录</span>
                <a class="forgetPwd" href="javascript:void(0);">忘记密码？</a>
            </div>
            <div class="frmItem">
			<input type="submit" class="loginBtn" value="登 录"/>
            	<!--  <a class="loginBtn" href="javascript:void(0);">登 录</a>-->
            </div>
    	</form>
    </div>
</div>
</body>
</html>
