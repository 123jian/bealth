<?php
use yii\widgets\LinkPager;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商城分类页</title>
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
                	
					<?php 
					use yii\web\Session;
					$session = new Session;
					if(empty($session->get('name'))){?>
					<a href="index.php?r=login/index">【登录】</a>
                    <a href="index.php?r=register/index">【免费注册】</a>
					<?php }else{?>
					<span>您好，欢迎<span style="color:#ff0000"><?php 
					
					echo $session->get('name');
					?></span>来到锡盟鑫泰！</span>
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
                        	<?php foreach($cate as $ck=>$cv){?>
                    	<li><a href="./index.php?r=category/index&cid=<?php echo $cv['cat_id']?>"><?php echo $cv['cat_name']?></a></li>
                       <?php }?>
                        </ul>
                    </div>
                	<ul class="menu_list fl clearfix">
					<?php foreach($cate as $ck=>$cv){?>
                    	<li><a href="./index.php?r=category/index&cid=<?php echo $cv['cat_id']?>"><?php echo $cv['cat_name']?></a>|</li>
                    <?php }?>
                    </ul>
                </div>
            </div>
            <!-- 导航END -->
        </div>
    </div>
    <!-- 头部区域END -->
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<!--内容区域-->
            <div>
            	<div class="location clearfix">
                	<a class="go" href="javascript:void(0);">去购物车结算</a>
                    <p>
                    	<a href="javascript:void(0);">鑫泰亿联首页</a>>
                        <a href="javascript:void(0);">多肽美容</a>>
                        <a href="javascript:void(0);">保湿水</a>
                    </p>
                </div>
                <div class="clearfix">
                	<div class="sub_left">

                        <div class="sl_con mt10">
                        	<p class="title">热卖产品</p>
                        	<ul class="sl_list">
                            	<?php foreach($datar as $k=>$vr){?>
                                <li>
                                	<a href="./index.php?r=goods/index&gid=<?php echo $vr['goods_id']?>">
                                		<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$vr['goods_img'];?>" width="130" height="130"></div>
                                        <p class="price"><?php echo $vr['goods_name']?></p>
                                        <p class="price"><span>￥<?php echo $vr['goods_price']?></span></p>
                                    </a>
                                </li>
								<?php }?>
                            </ul>
                        </div>
                        <!--END-->
                        <!---->
                        <div class="sl_con mt10">
                        	<p class="title">浏览记录</p>
                        	<ul class="sl_list">
								<?php foreach($data1 as $k1=>$v1){?>
                            	<li>
                                	<a href="./index.php?r=goods/index&gid=<?php echo $v1['goods_id']?>">
                                		<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$v1['goods_img'];?>" width="130" height="130"></div>
                                        <p class="price"><?php echo $v1['goods_name']?></p>
                                        <p class="price"><span>￥<?php echo $v1['goods_price']?></span></p>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                        <!--END-->
                    </div>
                    <div class="sub_right">
                    	<!---->
                        <div class="sr_con">
                        	<p class="title">热卖推荐</p>
                            <!--轮播效果-->
                            <div class="scroll_wrap">
                              <div class="picScroll-left">
                                <div class="hd">
                                    <ul></ul>
                                </div>
                                <div class="bd">
                                  <ul class="hotWrap clearfix">
                                      <?php foreach($datar as $kk=>$vv){?>
                                      <li>
                                          <div class="clearfix">
                                              <div class="imgWrap">
											  <a href="./index.php?r=goods/index&gid=<?php echo $vv['goods_id']?>">
											  <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$vv['goods_img'];?>" width="145" height="145"></a></div>
                                              <div class="pro">
                                                  <p class="proName"><?php echo $vv['goods_name']?></p>
                                                  <p class="price">特价：<span class="redSpan">￥<?php echo $vv['goods_price']?></span></p>
                                                  <a class="btn" href="./index.php?r=goods/index&gid=<?php echo $vv['goods_id']?>">立即抢购</a>
                                              </div>
                                          </div>
                                      </li>
									  <?php }?>
                                  </ul>
                                </div> 
                                <a href="javascript:void(0);" class="prev" id="idPre"></a>
                                <a href="javascript:void(0);" class="next" id="idNext"></a>                           
                              </div>
                            </div>
                            
                            <!--轮播效果END-->
                            <p class="title">补水霜>商品筛选</p>

                            <!---->
                            <div class="search_wrap">
                              <div class="searchMsg clearfix">
                                  <div class="page fr">
                                      共<span class="redSpan">1000</span>个产品<span class="d4ColorTxt"> | </span>
                                      <span class="redSpan">1</span>/5页
                                      <a href="javascript:void(0);">上一页</a>
                                      <a href="javascript:void(0);">下一页</a>
                                  </div>
                                  <div class="sort fl">
                                      排序：
                                	<a href="javascript:void(0);">销量</a>
                                    <a href="javascript:void(0);">收藏人气</a>
                                    <a href="javascript:void(0);">评论数</a>
                                  </div>
                              </div>
                              <div class="result_wrap">
                              	<ul class="clearfix">
								<?php foreach($data as $k=>$v){?>
                                	<li>
                                    	<div class="imgWrap">
										<a href="./index.php?r=goods/index&gid=<?php echo $v['goods_id']?>">
										<img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$v['goods_img'];?>" width="232" height="232"></a></div>
                                        <p class="proName"><a href="./index.php?r=goods/index&gid=<?php echo $v['goods_id']?>"><?php echo $v['goods_name']?></a></p>
                                        <p><span class="appraise">已有120人评价</span>
                                        	<span class="price">￥<?php echo $v['goods_price']?></span>
                                        </p>
                                        <p class="clearfix">
                                        	<a class="btn fr" href="javascript:void(0);">收藏</a>
                                            <a class="btn fl" href="./index.php?r=cart/">加入购物车</a>
                                        </p>
                                    </li>
                                <?php }?>
                                    
                                </ul>
                                
                              </div>
							  <div class="fuck"><?= LinkPager::widget(['pagination' => $pages]); ?>
                                </div>
                            </div>
                            <!--END-->
                        </div>
                        <!--END-->
                    </div>
                </div>
            </div>
            <!--内容区域-->
   <!-- 底部区域 -->
            <div class="footerWrapper">
                <div class="footer">
                	<p><a class="returnHome" href="./index.php?r=index">
                    	<span class="btn_l"></span>
                    	<span class="btn_c">回首页 HOME</span>
                    	<span class="btn_r"></span>
                    </a>
                    </p>
                    <p class="call">400-625-2655</p>
                    <p>锡盟鑫泰生物制品有限责任公司 版权所有</p>
                    <p>锡盟鑫泰生物是亚洲最大最专业骨髓肽生产商，颐宁多肽是国内首例多肽保健品！</p>
                    <p>www.xmxtsw.com</p>
                </div>
            </div>
            <!-- 底部区域END -->
            <!--跟随窗口浮动区域-->
            <div class="fixedWrap" id="fixedWrap">
                <a href="javascript:scrollTo(0,0);">
                	<div class="imgWrap">
                    	<img src="images/fix_icon_1.png" width="21" height="27" />
                    </div>
                	<p>返回顶部</p>
                </a>
                <a href="index.php?r=index/shoppingcar">
                	<div class="imgWrap">

                    	<img class="mt5" src="images/fix_icon_2.png" width="27" height="22" />
                    </div>
                	<p>购物车</p>
                </a>
                <a href="javascript:void(0);">
                	<div class="imgWrap">
                    	<img class="mt5" src="images/fix_icon_3.png" width="24" height="19" />
                    </div>
                	<p>收藏夹</p>
                </a>
                <a href="javascript:void(0);">
                	<div class="imgWrap">
                    	<img src="images/fix_icon_4.png" width="28" height="26" />
                    </div>
                	<p>联系客服</p>
                </a>
            </div>
            <!--跟随窗口浮动区域-->
        </div>
    </div>
    <!-- 内容区域END -->
</div>
<script type="text/javascript" src="scripts/common.js"></script>
<script type="text/javascript">
	if($(".hotWrap li").size()>2){
		$(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"leftLoop",vis:2});
	}
</script>
</body>
</html>