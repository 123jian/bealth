<?php
use yii\widgets\LinkPager;
?>
    <!-- 内容区域 -->
	<style type="text/css">
	
    </style>
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
                    	<div class="sl_con">
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
                        <!---->
                        <div class="sl_con mt10">
                        	<p class="title">热卖产品</p>
                        	<ul class="sl_list">
                            	<?php foreach($datar as $k=>$vr){?>
                                <li>
                                	<a href="javascript:void(0);">
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
                                	<a href="javascript:void(0);">
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
                                      <li>
                                          <div class="clearfix">
                                              <div class="imgWrap"></div>
                                              <div class="pro">
                                                  <p class="proName">多肽每日保湿霜</p>
                                                  <p class="price">特价：<span class="redSpan">￥199.00</span></p>
                                                  <a class="btn" href="javascript:void(0);">立即抢购</a>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="clearfix">
                                              <div class="imgWrap"></div>
                                              <div class="pro">
                                                  <p class="proName">多肽每日保湿霜</p>
                                                  <p class="price">特价：<span class="redSpan">￥199.00</span></p>
                                                  <a class="btn" href="javascript:void(0);">立即抢购</a>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="clearfix">
                                              <div class="imgWrap"></div>
                                              <div class="pro">
                                                  <p class="proName">多肽每日保湿霜</p>
                                                  <p class="price">特价：<span class="redSpan">￥199.00</span></p>
                                                  <a class="btn" href="javascript:void(0);">立即抢购</a>
                                              </div>
                                          </div>
                                      </li>
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
                                    	<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$v['goods_img'];?>" width="232" height="232"></div>
                                        <p class="proName"><a href="javascript:void(0);"><?php echo $v['goods_name']?></a></p>
                                        <p><span class="appraise">已有120人评价</span>
                                        	<span class="price">￥<?php echo $v['goods_price']?></span>
                                        </p>
                                        <p class="clearfix">
                                        	<a class="btn fr" href="javascript:void(0);">收藏</a>
                                            <a class="btn fl" href="javascript:void(0);">加入购物车</a>
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
           