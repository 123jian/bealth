
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<div class="banner_wrap">
                    

<!--主广告位轮播start-->
<div style="width:997px;text-align:center;">
<!--主广告轮播start-->
<script src="js/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
var varText = ""
	function addInfo(title,photourl,sphotourl){
		if(varText!=""){
			varText+="|||";
		}
		varText+=title+"|_|"+photourl+"|_|"+sphotourl;
	}
addInfo("","images/201411329960407.jpg","images/201411329960407.jpg");
addInfo("","images/201411329963845.jpg","images/201411329963845.jpg");
addInfo("","images/201411329974297.jpg","images/201411329974297.jpg");
//
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="997" height="338" id="01" align="middle">')
	document.write('<param name="allowScriptAccess" value="sameDomain" />')
	document.write('<param name="movie" value="images/main.swf?info='+varText+'" />')
	document.write('<param name="quality" value="high" />')
	document.write('<param name="bgcolor" value="#ffffff" /><param name="wmode" value="transparent" />')
	document.write('<embed src="images/main.swf?info='+varText+'"" quality="high" bgcolor="#ffffff" width="997" height="338" name="01" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />')
	document.write('</object>')
</script>
</div>
<!--主广告轮播end-->
                
            </div>
            <!---->
            <div class="pro_wrap">
            	<div class="title">
                	<span class="titleIcon"></span>
                    <ul class="clearfix">
                    	<li class="current"><a href="javascript:void(0);">限时秒杀</a>|</li>
                        <li><a href="javascript:void(0);">人气单品</a>|</li>
                        <li><a href="javascript:void(0);">镇店之宝</a>|</li>
                        <li><a href="javascript:void(0);">付邮试用</a></li>
                    </ul>
                </div>
                <!-- 限时秒杀 -->
<?php foreach($result4 as $val4){ ?>                
                <div class="secKill_wrap clearfix">
                	<div class="imgWrap">
                    	<img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val4['goods_img'];?>" width="614" height="292" />
                    </div>
                    <div class="pro_detail">
                    	<div class="time">
                        	<span><?php echo $val4['goods_name'];?></span>
                        </div>
                        <div class="pro_msg">
                        	<p><?php echo $val4['goods_desc'];?></p>
                        </div>
                        <div class="price">
                        	<a class="btn" href="index.php?r=index/mall">去看看</a>
                        	<span class="nowPrice">￥<?php echo $val4['goods_price'];?></span>
                            <span class="oldPrice">￥340</span>
                        </div>
                        <div class="appraise_wrap clearfix">
                        	<span class="fr"><span class="num">1276</span>人已经购买</span>
                            <div class="fl">
                            	4.7分
                            	<span class="start"></span>
                                <span class="start"></span>
                                <span class="start"></span>
                                <span class="start"></span>
                                <span class="start"></span>
                                口碑266
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>                
                <!-- 限时秒杀END -->
            </div>
            <!-- END -->
            <!---->
            <div class="hot_wrap">
            	<div class="title">
                	<ul class="clearfix">
                    	<li><a href="javascript:void(0);">HOT 当季热荐</a>\</li>
                        <li><a href="javascript:void(0);">HOT 精品套装</a>\</li>
                        <li><a href="javascript:void(0);">HOT 会员专区</a></li>
                    </ul>
                </div>
            </div>
            <!--END-->
            <!---->
            <div class="con">
            	<div class="con_head">
                	<a href="javascript:void(0);">查看更多>></a>
                    <div class="title">
                    	<img class="fl" src="images/icon_02.jpg" width="56" height="30" />
                        <span>颐宁多肽</span>
                    </div>
                </div>
                <div class="margin_wrap">
                  <!--轮播效果-->
                  <div class="slideBox">
                      <div class="hd">
                          <ul class="clearfix">
<?php foreach($result3 as $val3){ ?>                              
                          	<li><a href="javascript:void(0);"><?php echo $val3['goods_name'];?></a></li>
<?php } ?>                            
                          </ul>
                      </div>
                      <div class="bd">
                          <ul>
<?php foreach($result3 as $val3){ ?>                              
                              <li>
                              	<div class="clearfix">
                                    <div class="imgWrap">
                                        <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val3['goods_img'];?>" width="540" height="331" />
                                    </div>
                                    <div class="pro_detail">
                                    	<div class="time">
                                        	<span><?php echo $val3['goods_name'];?></span>
                                        </div>
                                        <div class="pro_msg">
                                            <p><?php echo $val3['goods_desc'];?></p>
                                        </div>
                                        <div class="price">
                                            <a class="btn" href="javascript:void(0);">去看看</a>
                                            <span class="nowPrice">￥<?php echo $val3['goods_price'];?></span>
                                            <span class="oldPrice">￥340</span>
                                        </div>
                                        <div class="appraise_wrap clearfix">
                                            <span class="fr"><span class="num">1276</span>人已经购买</span>
                                            <div class="fl">
                                                4.7分
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                口碑266
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </li>
<?php } ?>                              
                              <li>
                              	<div class="clearfix">
                                    <div class="imgWrap">
                                        <img src="images/pic_02.jpg" width="540" height="331" />
                                    </div>
                                    <div class="pro_detail">
                                    	<div class="time">
                                        	<span>颐宁多肽冲剂 礼品装</span>
                                        </div>
                                        <div class="pro_msg">
                                            <p>主要功能:抑制细胞变性，提高人体免疫力。激活细胞活性，保证人体各器官功能正常。修复受损细胞，维护细胞功能与功能正常。促进细胞新陈代谢，有效清除对人体有害的自由基。</p>
                                        </div>
                                        <div class="price">
                                            <a class="btn" href="javascript:void(0);">去看看</a>
                                            <span class="nowPrice">￥199</span>
                                            <span class="oldPrice">￥340</span>
                                        </div>
                                        <div class="appraise_wrap clearfix">
                                            <span class="fr"><span class="num">1276</span>人已经购买</span>
                                            <div class="fl">
                                                4.7分
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                口碑266
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </li>
                              <li>
                              	<div class="clearfix">
                                    <div class="imgWrap">
                                        <img src="images/pic_02.jpg" width="540" height="331" />
                                    </div>
                                    <div class="pro_detail">
                                    	<div class="time">
                                        	<span>颐宁多肽冲剂 礼品装</span>
                                        </div>
                                        <div class="pro_msg">
                                            <p>主要功能:抑制细胞变性，提高人体免疫力。激活细胞活性，保证人体各器官功能正常。修复受损细胞，维护细胞功能与功能正常。促进细胞新陈代谢，有效清除对人体有害的自由基。</p>
                                        </div>
                                        <div class="price">
                                            <a class="btn" href="javascript:void(0);">去看看</a>
                                            <span class="nowPrice">￥199</span>
                                            <span class="oldPrice">￥340</span>
                                        </div>
                                        <div class="appraise_wrap clearfix">
                                            <span class="fr"><span class="num">1276</span>人已经购买</span>
                                            <div class="fl">
                                                4.7分
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                <span class="start"></span>
                                                口碑266
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </li>
                          </ul>
                      </div> 
                      <a href="javascript:void(0);" class="prev" id="idPre"></a>
                      <a href="javascript:void(0);" class="next" id="idNext"></a>
                  </div>
                  <!--轮播效果END-->
                </div>
            </div>
            <!--END-->
            <!--多肽美容start-->
            <div class="con">
            	<div class="con_head">
                	<a href="javascript:void(0);">查看更多>></a>
                    <div class="title">
                    	<img class="fl" src="images/icon_03.jpg" width="35" height="33" />
                        <span>多肽美容</span>
                    </div>
                </div>
                <div class="flowWrapper">
                	<ul class="clearfix">
<?php foreach($result as $val){ ?>                            
                    	<li>
                            <div class="pro_img">
                                <a href="javascript:void(0);"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val['goods_img'];?>" width="475" height="385"/></a>
                            </div>
                            <div class="pro_introduce clearfix">
                                <div class="price fr">
                                    ￥<span class="newPrice"><?php echo $val['goods_price'];?></span>
                                    <span class="oldPrice">￥300</span>
                                </div>
                                <div class="pro_con fl">
                                    <a href="javascript:void(0);" class="proName"><?php echo $val['goods_name'];?></a>
                                    <p><?php echo $val['goods_desc'];?></p>
                                </div>
                            </div>
                        </li>
<?php }?>                        
                    </ul>
                  </div>
                </div>
            </div>
            <!--多肽美容END-->
            <!---->
            <div class="con">
            	<div class="pro_con">
                  <div class="con_head">
                      <a href="javascript:void(0);">查看更多>></a>
                      <div class="title">
                          <img class="fl" src="images/icon_04.jpg" width="43" height="29" />
                          <span>多肽食品</span>
                      </div>
                  </div>
                  <div class="flowWrapper">
                	<ul class="clearfix">
<?php foreach($result2 as $val2){ ?>                            
                    	<li>
                            <div class="pro_img">
                                <a href="javascript:void(0);"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val2['goods_img'];?>" /></a>
                            </div>
                            <div class="pro_introduce clearfix">
                                <div class="price fr">
                                    ￥<span class="newPrice"><?php echo $val2['goods_price'];?></span>
                                    <span class="oldPrice">￥300</span>
                                </div>
                                <div class="pro_con fl">
                                    <a href="javascript:void(0);" class="proName"><?php echo $val2['goods_name'];?></a>
                                    <p><?php echo $val2['goods_desc'];?></p>
                                </div>
                            </div>
                        </li>
<?php }?>                        
                    </ul>
                  </div>
                </div>
            </div>
            <!--END-->
            <!---->
            <div class="con">
            	<div class="pro_con">
                  <div class="con_head">
                      <a href="javascript:void(0);">查看更多>></a>
                      <div class="title">
                          <span>爆款推荐</span>
                      </div>
                  </div>
                  <div class="recommendWrapper">
                	<ul class="clearfix">
<?php foreach($result3 as $val3){ ?>                            
                    	<li>
                            <div class="pro_img">
                                 <a href="javascript:void(0);"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val3['goods_img'];?>" /></a>

                            </div>
                        </li>
<?php }?>                            
                    </ul>
                  </div>
                </div>
            <!--END-->

            
