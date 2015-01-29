<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/common.css"/>
<title>注册</title>
</head>

<body class="registerBody">
<div class="wrapper">
	<!--头部信息-->
    <div class="site_wrap">
        <div class="site_con">
            <span>您好，欢迎<span style="color:#ff0000"><?php 
			use yii\web\Session;
			$session = new Session;
			echo $session->get('name');
			?></span>来到锡盟鑫泰！</span>
			<?php if(empty($session->get('name'))){?>
			<a href="index.php?r=login/index">【登录】</a>
			<a href="index.php?r=register/index">【免费注册】</a>
			<?php }else{?>
			<a href="index.php?r=register/loginout">退出</a>
			<?php }?>
        </div>
    </div>
    <!--头部信息END-->
    <!--logo-->
    <div class="logo">
      <img class="fl" src="images/logo.jpg" width="49" height="37" />
      <span class="logoSpan"></span>
      <span class="wel">欢迎注册</span>
  	</div>
    <!--logo END-->
    <!--注册信息-->
    <div class="register_wrap">
    	<p class="title">注册信息</p>
        <div class="register_panel clearfix">
        	<div class="imgWrap">
			<img src="./images/123.jpg" width="345px" height="345px" >
			</div>
            <form class="registerFrm" action="index.php?r=register/zhuce" method="post">
            	<div class="frmItem">
                	<label class="lbl"><span class="redSpan">*</span>账户名：</label>
                    <input type="text" class="txt" value="" name="name" />
                    <span class="userIcon"></span>
                </div>
                <div class="frmItem">
                	<label class="lbl"><span class="redSpan">*</span>请输入密码：</label>
                    <input type="password" class="txt" name="pwd" />
                    <span class="pwdIcon"></span>
                </div>
                <div class="frmItem">
                	<label class="lbl"><span class="redSpan">*</span>请输入密码：</label>
                    <input type="password" class="txt" name="cpwd" />
                    <span class="pwdIcon"></span>
                </div>
                <div class="frmItem clearfix">
                	<label class="lbl fl"><span class="redSpan">*</span>验证码：</label>

                    <input type="text" class="txt txtTest" name="yzm"/>
                    <div class="testImg"><img id='secode_img' src="index.php?r=register/captcha"></div>
                    <a style="cursor:pointer;" class="changeTest" onclick="document.getElementById('secode_img').src='index.php?r=register/captcha&count='+Math.random(); return false;">看不清？换一组</a></a>
				</div>
                <div class="frmItem">
                	<input type="checkbox" class="checkBtn" id="redio" value="2" /><label>我已阅读并同意<a class="redSpan" href="javascript:void(0);">《用户注册协议》</a></label>
                </div>
                <div class="frmItem">
					<input type="submit" class="submitBtn" value="立即注册" onclick="return checkradio()">
                </div>
            </form>
        </div>
    </div>
	<script type="text/javascript" src="./jq.js"></script>
	<script type="text/javascript">
	<!--
	function checkradio(){ 
      if($("#redio").attr("checked")){
			var name=$("#name").val();
			//alert(name)
			$.ajax({
				url:"index.php?r=register/yanname",
				data:{'name':name},
				type:"get",
				success:function(e){
					if(e){
						return true;
					}else{
						return false;
					}
				}
			})
	  }else{
		  alert("对不起，您没有同意用户注册协议")
		return false;
	  }
	}
	function name(){ 
		alert($)
		//var name=$("#name").val();
		//alert(name)
	}
	//-->
	</script>



    <!--注册信息END-->
    <!-- 底部区域 -->
    <div class="footerWrapper">
        <div class="footer">
            <p class="call">400-625-2655</p>
            <p>锡盟鑫泰生物制品有限责任公司 版权所有</p>
            <p>锡盟鑫泰生物是亚洲最大最专业骨髓肽生产商，颐宁多肽是国内首例多肽保健品！</p>
            <p>www.xmxtsw.com</p>
        </div>
    </div>
    <!-- 底部区域END -->
</div>
</body>
</html>
