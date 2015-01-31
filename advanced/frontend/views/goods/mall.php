<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商城详情</title>
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
    	<div class="container mall_wrap">
        	<!--内容区域-->
            <div>
            	<div class="location clearfix">
                	<a class="go" href="index.php?r=index/shoppingcar">去购物车结算</a>
                    <p>
                    	<a href="javascript:void(0);">鑫泰亿联首页</a>>
                        <a href="javascript:void(0);">多肽美容</a>>
                        <a href="javascript:void(0);">保湿水</a>
                    </p>
                </div>
                <div class="clearfix">
                	<div class="sub_left">
                    	<!--<div class="sl_con">
                        	<ul class="firstList">
                            	<li class="current"><a href="javascript:void(0);"><span class="arrowIcon"></span>类型</a>
                                	<ul class="secList">
                                    	<li class="current"><a href="javascript:void(0);">补水霜</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                        <li><a href="javascript:void(0);">洁面乳</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span class="arrowIcon"></span>功效</a></li>
                                <li><a href="javascript:void(0);"><span class="arrowIcon"></span>适用人</a></li>
                            </ul>
                        </div>
                        -->
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
                    <!-- 右侧 -->
                    <div class="sub_right mb30">
                    	<!---->
                        <div class="detail_wrap clearfix">
                        	<div class="proImg">
                            	<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$data['goods_img'];?>" width="325" height="325"></div>
<input type='hidden' id='img' value='<?php echo $data['goods_img']?>'>                                
                                <div class="imgList">
                                  <!-- 图片轮播效果 -->
                                  <div class="picScroll">
                                      <div class="hd">
                                          <ul></ul>
                                      </div>
                                      <div class="bd">
                                          <ul class="proImgList clearfix">
										  <?php for($i=0;$i<4;$i++){?>
                                            <li><a href="javascript:void(0);"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$data['goods_img'];?>" width="87" height="87"></a></li>
                                            <?php }?>
                                          </ul>
                                      </div> 
                                      <a href="javascript:void(0);" class="prev" id="idPre"></a>
                                      <a href="javascript:void(0);" class="next" id="idNext"></a>
                                    </div>
                                    <!-- 图片轮播效果END -->
                                	<!-- 图片轮播 
                                    <ul class="proImgList clearfix">
                                    	<li><a href="javascript:void(0);"></a></li>
                                        <li><a href="javascript:void(0);"></a></li>
                                        <li><a href="javascript:void(0);"></a></li>
                                    </ul>
                                    <!-- 图片轮播END -->
                                </div>
                            </div>
                            <div class="proIntroduce">
                            	<form>
                            	<p class="proName"><?php echo $data['goods_name']?></p>
 <input type='hidden' id='gname' value='<?php echo $data['goods_name']?>'>                               
                                <div class="price_wrap clearfix">
                                	<span class="price">￥<?php echo $data['goods_price']?></span>
 <input type='hidden' id='price' value='<?php echo $data['goods_price']?>'>

                                    <!--<div class="price_msg">
                                    	<p><span class="discount">4.1折</span>为您节省￥410.00</p>
                                        <p>(市场价：￥698.00)</p>
                                    </div>-->
                                    <div class="time_msg">
                                    	<p>02:20:05:17.6</p>
                                        <p><a href="javascript:void(0);">包邮</a></p>
                                    </div>
                                </div>
                                <div class="clearfix">
                                	<label class="fl">赠品：</label>
                                	<div class="imgWrap"></div>
                                    <label class="fl">【赠品】多肽保健品</label>
                                </div>
                                <div class="num_wrap clearfix">
                                	<label class="fl">选数量：</label>
                                    <a href="javascript:void(0);">-</a>
                                    <input class="txt" type="text" value="1" id='number'/>
                                    <a href="javascript:void(0);">+</a>
                                </div>
                                <div>
                                	<a class="buyBtn" onclick="shopcar(<?php echo $data['goods_id'];?>)" href='#'><span class="carIcon"></span>立即抢购</a>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!--END-->
                        <!---->
                        <div class="safe_wrap clearfix">
                        	<div class="span_wrap">
                            	本商品由锡盟鑫泰生物多肽商城直接发货，并且提供售后服务
                            </div>
                            <div class="safe_panel">
                            	<div class="safeList">
                                	<a href="javascript:void(0);"><span class="zhengIcon"></span>官方正品</a>
                                    <a href="javascript:void(0);"><span class="safeIcon"></span>质量保险</a>
                                    <a href="javascript:void(0);"><span class="qiIcon"></span>7天退货</a>
                                    <a href="javascript:void(0);"><span class="youIcon"></span>满159包邮</a>
                                </div>
                                <div class="shareList">
                                	<span class="ml15">分享到：</span>
                                    <a class="weibo" href="javascript:void(0);"></a>
                                    <a class="tqzone" href="javascript:void(0);"></a>
                                    <a class="tqweibo" href="javascript:void(0);"></a>
                                    <a class="renren" href="javascript:void(0);"></a>
                                    <a class="douban" href="javascript:void(0);"></a>
                                    <a class="addIcon" href="javascript:void(0);"></a>
                                </div>
                            </div>
                        </div>
                        <!--END-->
                        <!---->
                        <div class="con_wrap">
                        	<div class="title">
                            	<a class="current" href="javascript:void(0);">搭配套餐1</a>
                                <a href="javascript:void(0);">搭配套餐1</a>
                                <a href="javascript:void(0);">搭配套餐1</a>
                                <a href="javascript:void(0);">搭配套餐1</a>
                            </div>
                            <div class="pro_menu clearfix">
                            	<div class="pros">
                                	<ul class="clearfix">
                                    	<li>
                                        	<div class="imgWrap"></div>
                                            <p>多肽保健多肽保健多肽保健多肽保健多肽保健</p>
                                        </li>
                                        <li class="addLi">
                                        	<div class="addIcon"></div>
                                        </li>
                                        <li>
                                        	<div class="imgWrap"></div>
                                            <p>多肽保健多肽保健多肽保健多肽保健多肽保健</p>
                                        </li>
                                        <li class="addLi">
                                        	<div class="addIcon"></div>
                                        </li>
                                        <li>
                                        	<div class="imgWrap"></div>
                                            <p>多肽保健多肽保健多肽保健多肽保健多肽保健</p>
                                        </li>
                                        <li class="addLi">
                                        	<div class="addIcon"></div>
                                        </li>
                                        <li>
                                        	<div class="imgWrap"></div>
                                            <p>多肽保健多肽保健多肽保健多肽保健多肽保健</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="totlePrice">
                                	<p>购买人气组合</p>
                                    <p class="equal"><span class="equalIcon"></span></p>
                                    <p>￥988.00</p>
                                    <p class="oldPrice">￥1900.00</p>
                                    <p><a class="buyBtn" href="javascript:void(0);">购买组合</a></p>
                                </div>
                            </div>
                        </div>
                        <!--END-->
                        <!---->
                        <div class="con_wrap">
                        	<div class="title">
                            	<a href="javascript:void(0);">商品介绍</a>
                            </div>
                            <div class="introduce_wrap">
                            	<table>
                                	<tr>
                                    	<td>
                                        	<span class="title">商品名称：</span>
                                            <span class="pro_msg"><?php echo $data['goods_name']?></span>
                                        </td>
                                        <td>
                                        	<span class="title">上架时间：</span>
                                            <span class="pro_msg"><?php echo date("Y-m-d h:i:s",$data['goods_addtime'])?></span>
                                        </td>
                                        <td>
                                        	<span class="title">商品产地：</span>
                                            <span class="pro_msg">颐宁多肽</span>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                        <!--END-->
                        <!---->
                        <div class="con_wrap">
                        	<div class="title">
                            	<a class="current2" href="javascript:void(0);">商品详情</a>
                                <a href="javascript:void(0);">商品评价</a>
                                <a href="javascript:void(0);">咨询与回复</a>
                            </div>
                            <!-- 商品详情 -->
                            <div class="pro_intr clearfix">
                            	<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$data['goods_img'];?>" width="192" height="192"></div>
                                <div class="pro_msg">
                                	<p><?php echo $data['goods_desc']?></p>
                                </div>
                            </div>
                            <!-- 商品详情END -->
                            <!-- 商品评价 -->
                            <div class="pro_review">
                                <p class="title2">商品评价</p>
								<?php if(!empty($pin)){
										foreach($pin as $pk=>$pv){
								?>
                                <div class="p15">
                                	<div class="reviewItem clearfix">
                                    	<div class="userMsg">
                                        	<div class="imgWrap"></div>
                                            <p><?php echo $pv['uname']?></p>
                                            <!--<p class="level">超级会员</p>-->
                                        </div>
                                        <div class="reviewMsg">
                                        	<span class="arrowIcon"></span>
                                            <div class="start_wrap">
                                            	<span class="startIcon"></span>
                                                <span class="startIcon"></span>
                                                <span class="startIcon"></span>
                                                <span class="startIcon"></span>
                                                <span class="startIcon"></span>
                                            </div>
                                            <div class="review clearfix">
                                            	<span class="reviewTitle">评&nbsp;&nbsp;&nbsp;&nbsp;价：</span>
                                                <p class="review_msg"><?php echo $pv['content']?></p>
                                            </div>
                                            <div class="review clearfix">
                                            	<span class="reviewTitle">购买日期：</span>
                                                <p class="review_msg">
                                                	<a href="javascript:void(0);">回复</a>
                                                    <a href="javascript:void(0);">赞</a>
                                                	<span>
													<?php echo date("Y-m-d h:i:s",$pv['com_time'])?>
													</span>
                                                </p>
                                            </div>
											
                                        </div>
										<div>
										
                                        
                                    </div>
									</div>
									
                                   <!--评论框-->
								   

                                    </div><?php 
											}
										}else{}
										?>
									<input type="button" value="发表评论" class="carIcon" onclick="pinglun()">
                                   <div style="display:none" id="pin">
                                        <span class="reviewTitle">发表评论：</span>
                                        <p class="review_msg">
                                            <input type="hidden" name="uname" id="uid" value="<?php
											if(!empty(@$session->get('name'))){
												echo @$session->get('name');
											}else{
												echo "游客";
											}
											 ?>">
                                            <input type="hidden" name="gid" id="gid" value="<?php echo @$data['goods_id'];?>">
                                            <textarea rows="4px" cols="50px" id="lun" name="lun">欢迎您来评论！</textarea>
                                            <br><input type="button"  class="carIcon" value="评论" onclick="tijiao()">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 商品评价END -->
                            <!-- 咨询与回复 -->
                            <div class="reply_wrap">
                            	<p class="title2">咨询与回复</p>
                                <div class="reply_panel">
                                	<p class="userMsg">网友：<span class="userName">123</span><span class="time ml15">2014年6月3日 14:25:18</span></p>
                                    <p class="ask_wrap clearfix"><span>咨询内容：</span><span class="ask">您好，请问。。。。</span></p>
                                    <p class="reply_msg clearfix"><span>回复：</span><span class="reply">您好，由于。。。。。。。。。。。。。。。。。。。。。。。。您好，由于。。。。。。。。。。。。。。。。。。。。。。。。您好，由于</span></p>
                                    <p class="txt_r">2014年6月3日 15:25:18</p>
                                </div>
                            </div>
                            <!-- 咨询与回复END -->
                        </div>
                        <!--END-->
                    </div>
                    <!-- 右侧 END-->
                </div>
            </div>
            <!--内容区域-->
            <!-- 底部区域 -->
            <div class="footerWrapper">
                <div class="footer">
                	<p><a class="returnHome" href="./index.php?r=index/index">
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
                <a href="javascript:void(0);">
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
function pinglun()
    {
        //alert($);
        $("#pin").slideToggle();
        //$("#pin").show();
    }
function tijiao()
    {
        con=$("#lun").val();
        uname=$("#uid").val();
        gid=$("#gid").val();
        //alert(con);
        $.ajax({
                url:"index.php?r=goods/pinglun",
                type:"get",
                dataType:"json",
                data:{"content":con,"goods_id":gid,"uname":uname},
                success:function(msg)
                {
					//alert(msg)
                    if(msg==1)
                    {
                        alert("评论成功");
                        //$("#pin").hide();
                        history.go(0);
                    }else
                    {
                        alert("评论失败");
                    }/**/
                },
                error:function(msg){
                    alert("no");
                }
            });/**/
    }

	if($(".proImgList li").size()>3){
		$(".picScroll").slide({mainCell:".bd ul",effect:"leftLoop",vis:3});
	}
</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
//购物车
function shopcar(gid){
    //alert($);
    var number=$('#number').val();
    var gname=$('#gname').val();
    var price=$('#price').val();
    var img=$('#img').val();
    //alert(gname);
    //alert(price);
    if(number==''){
        alert('请输入购买数量');
        return false;
    }
    $.ajax({
        type:"get",
        url:"index.php?r=goods/shopcar",
        data:{'gid':gid,'number':number,'gname':gname,'price':price,'img':img},
        cache:false,
        dataType:"json",
        success: function(msg){
                    //alert(msg);
                    if(msg==0){
                        alert('请登录');
                        return false;
                    }
                    if(msg==1){
                        location.href='index.php?r=goods/shopcarlist';
                    }
                    if(msg==2){
                        alert('添加购物车失败');
                        return false;
                    }
                 }
        
    });
}
</script>

</body>
</html>
