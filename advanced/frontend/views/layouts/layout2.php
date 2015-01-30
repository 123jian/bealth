<header>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" type="text/css" href="styles/common.css"/>
<script type="text/javascript" src="scripts/jquery1.42.min.js"></script>
<script type="text/javascript" src="scripts/jquery.superslide.2.1.1.js"></script>

</head>

<body>
<div class="wrapper">
	<!-- 头部区域 -->
	<div class="headerWrapper">
    	<div class="header">
        	<!--顶部登录信息-->
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
            <!--顶部登录信息END-->
            <div class="site_title clearfix">
            	<div class="notice_wrap">
                	<span></span>
                </div>
                <div class="logo_wrap fl clearfix">
                	<img class="fl" src="images/logo.jpg" width="49" height="37" />
                    <span></span>
                </div>
            </div>
            
            
            <!-- 导航 -->
            <div class="menuWrapper">
            	<div class="menu_wrap clearfix">
                	<div class="addShopping clearfix">
                    	<span>加入购物车</span>
                        <a href="index.php?r=index/shoppingcar"><span class="arrowIcon"></span></a>
                    </div>
                	<div class="allType">
                    	<p>全部分类<span class="arrowIcon"></span></p>
                        <ul class="type_list none">
                        	<li><a href="javascript:void(0);">多肽保健</a></li>
                            <li><a href="index.php?r=category">多肽美容</a></li>
                            <li class="noBorder"><a href="javascript:void(0);">多肽食品</a></li>
                        </ul>
                    </div>
                	<ul class="menu_list fl clearfix">
                    	<li><a href="javascript:void(0);">多肽保健</a>|</li>
                        <li><a href="index.php?r=category">多肽美容</a>|</li>
                        <li><a href="javascript:void(0);">多肽食品</a>|</li>
                    </ul>
                </div>
            </div>
            <!-- 导航END -->
        </div>
    </div>
    <!-- 头部区域END -->


</header>
<div class="wrap">
  <div class="container">
    <?= $content ?>
  </div>
</div>
<footer class="footer">
  <div>
      <?= $footer ?>
  </div>
</footer>
 <?= $right ?>