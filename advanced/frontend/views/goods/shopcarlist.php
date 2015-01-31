<style>
    tr{vertical-align:middle; text-align:center;}
</style>
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<!--内容区域-->
            <div class="shopping_wrap">
            	<div class="title clearfix">
                	<p class="fr">
                    	<a class="current" href="javascript:void(0);">我的购物车</a>>
                        <a href="javascript:void(0);">填写核对订单信息</a>>
                        <a href="javascript:void(0);">支付信息</a>>
                        <a href="javascript:void(0);">交易成功</a>
                    </p>
                	<span class="fl">我的购物车</span>
                </div>
                <div class="shoppingTab">
                	<form><center>
                	<table border="1">
                    	<tr class="title">
                        	<td class="width55"><input class="checkBtn" type="checkbox" />全选</td>
                            <td class="width55">产品</td>
                            <td class="width55">名称</td>
                            <td class="width55">价格</td>
                            <td class="width55">优惠</td>
                            <td class="width55">数量</td>
                            <td class="width55">操作</td>
                        </tr>
<?php foreach($result as $val){?>                        
                        <tr style="vertical-align:middle; text-align:center;width:10px;">
                        	<td><input class="checkBtn" type="checkbox" /></td>
                            <td>
                            	<div class="pro_msg clearfix">
                                	<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val['goods_img'];?>" width='80' height='80'></div></td>
                                    <td width="10"><a class="proName" href="javascript:void(0);"><?php echo $val['goods_name'];?></a>
                                </div>
                                <div class="give_wrap">
                                  <p></p>
                                  <p></p>
                                </div>
                            </td>
                            <td><span>￥<?php echo $val['goods_price'];?></span><span class="giveIcon"></span></td>
                            
                            <td><span>暂无优惠
                                </span>
                            </td>
                            <td>
                              <div class="num clearfix">
                                <a href="javascript:void(0);">-</a>
                                <input type="text" class="txt" value="1" />
                                <a href="javascript:void(0);">+</a>
                              </div>
                            </td>
                            <td><a class="deleteBtn" href="javascript:void(0);">删除</a></td>
                        </tr>
<?php }?>                        
                     </table></center>
                    </form>
                </div>
                <div class="discount_wrap">
                  <table class="moneyTable">
                    <tr>
                        <td class="txt_l"><a href="javascript:void(0);"><span class="subIcon"></span>使用优惠券抵部分总额</a></td>
                        <td><span>5件商品，总金额：</span></td>
                        <td><span>￥500.00</span></td>
                    </tr>
                    <tr>
                        <td class="txt_l"><a href="javascript:void(0);"><span class="subIcon"></span>使用积分抵现支付</a></td>
                        <td><span>抵现：</span></td>
                        <td><span>-￥0.00</span></td>
                    </tr>
                    <tr>
                        <td class="txt_l"><a href="javascript:void(0);"><span class="subIcon"></span>添加订单备注</a></td>
                        <td><span>运费：</span></td>
                        <td><span>+￥0.00</span></td>
                    </tr>
                    <tr>
                        <td class="txt_l"></td>
                        <td><span>应付金额：</span></td>
                        <td><span>=￥500.00</span></td>
                    </tr>
                  </table>
                  <div class="submit_wrap">
                  	应付总额：<span class="money">￥500.00</span>元
                    <a href="index.php?r=index/shoppingmsg">提交订单</a>
                  </div>
                </div>
                <!---->
                <div class="recommend">
                	<div class="title"><a href="javascript:void(0);">查看更多>></a>其他用户还购买了</div>
                    <div class="proList clearfix">
                    	<div class="proItem clearfix">
                        	<div class="imgWrap"></div>
                            <div class="proWrap">
                            	<p>鑫泰亿联鑫泰亿联鑫泰亿联鑫泰亿联</p>
                                <p class="proFun">此商此商品具有美白效果，补水效果。此商品具有美白效果，补水效果。此商品具有美白效果，补水效果。品具有美白效果，补水效果。</p>
                            </div>
                        </div>
                        <div class="proItem clearfix">
                        	<div class="imgWrap"></div>
                            <div class="proWrap">
                            	<p>鑫泰亿联鑫泰亿联鑫泰亿联鑫泰亿联</p>
                                <p class="proFun">此商此商品具有美白效果，补水效果。此商品具有美白效果，补水效果。此商品具有美白效果，补水效果。品具有美白效果，补水效果。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END-->
                <!---->
                <div class="recommend">
                	<div class="title"><a href="javascript:void(0);">查看更多>></a>今日最受欢迎</div>
                    <div class="proList">
                    	<ul class="pro_list clearfix">
                        	<li>
                            	<div class="imgWrap"></div>
                                <p class="proName"><a href="javascript:void(0);">多肽补水霜</a></p>
                                <p><span class="nowPrice">￥200.00</span>
                                	<span class="oldPrice">￥280.00</span>
                                </p>
                                <p><a class="addCar" href="javascript:void(0);">加入购物车</a></p>
                            </li>
                            <li>
                            	<div class="imgWrap"></div>
                                <p class="proName"><a href="javascript:void(0);">多肽补水霜</a></p>
                                <p><span class="nowPrice">￥200.00</span>
                                	<span class="oldPrice">￥280.00</span>
                                </p>
                                <p><a class="addCar" href="javascript:void(0);">加入购物车</a></p>
                            </li>
                            <li>
                            	<div class="imgWrap"></div>
                                <p class="proName"><a href="javascript:void(0);">多肽补水霜</a></p>
                                <p><span class="nowPrice">￥200.00</span>
                                	<span class="oldPrice">￥280.00</span>
                                </p>
                                <p><a class="addCar" href="javascript:void(0);">加入购物车</a></p>
                            </li>
                            <li>
                            	<div class="imgWrap"></div>
                                <p class="proName"><a href="javascript:void(0);">多肽补水霜</a></p>
                                <p><span class="nowPrice">￥200.00</span>
                                	<span class="oldPrice">￥280.00</span>
                                </p>
                                <p><a class="addCar" href="javascript:void(0);">加入购物车</a></p>
                            </li>
                            <li>
                            	<div class="imgWrap"></div>
                                <p class="proName"><a href="javascript:void(0);">多肽补水霜</a></p>
                                <p><span class="nowPrice">￥200.00</span>
                                	<span class="oldPrice">￥280.00</span>
                                </p>
                                <p><a class="addCar" href="javascript:void(0);">加入购物车</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--END-->
            </div>
            <!--内容区域-->
           