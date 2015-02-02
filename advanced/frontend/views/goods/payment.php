
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<!--内容区域-->
            <div class="shopping_wrap">
            	<div class="title clearfix">
                	<p class="fr">
                    	<a href="javascript:void(0);">我的购物车</a>>
                        <a href="javascript:void(0);">填写核对订单信息</a>>
                        <a class="current" href="javascript:void(0);">收银台</a>>
                        <a href="javascript:void(0);">订单提交成功</a>
                    </p>
                	<span class="fl">支付信息</span>
                </div>
                <!---->
                <div class="payment_wrap">
                	<p class="title">收货人信息</p>
                    <?php foreach($arr as $val){?>                
<div class="shopping_panel">                

 <form class="newAddress">

        &nbsp;&nbsp;&nbsp;&nbsp;<span>收货人:<?php echo $val['name'];?></span><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['country'];?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['province'];?></span>省
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['city'];?></span>市
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['county'];?></span><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span>手机号码:<?php echo $val['mobiles'];?></span>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>电话:<?php echo $val['phones'];?></span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>详细地址:<?php echo $val['address'];?></span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>邮箱:<?php echo $val['email'];?></span>


</div>
<?php }?> 
                    <form>
                    <div class="paymentType">
                      <p class="payType">支付方式</p>
                      <p><input name="pay" class="rdo" type="radio" />线下付款</p>
                      <p><input name="pay" class="rdo" type="radio" />在线支付</p>
                      <p class="payType">支持支付宝付款：</p>
                      <div class="zfb_wrap">
                        <a class="current" href="javascript:void(0);">
                            <img src="images/zfb.jpg" width="119" height="70" />
                        </a>
                      </div>
                    </div>
                    <div class="btnWrapper">
                    	<a href="index.php?r=goods/paymentok">马上支付</a>
                    </div>
                    </form>
                </div>
                <!--END-->
                <!---->
                <div class="recommend">
                	<div class="title"><a href="javascript:void(0);">查看更多>></a>其他用户还购买了</div>
                    <div class="proList clearfix">
<?php foreach($data as $value){?>                        
                    	<div class="proItem clearfix">
                        	<div class="imgWrap"><a class="btn" href="./index.php?r=goods/index&gid=<?php echo $value['goods_id']?>"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$value['goods_img'];?>" width='126' height='126'></a></div>
                            <div class="proWrap">
                            	<p><?php echo $value['goods_name'];?></p>
                                <p class="proFun"><?php echo $value['goods_desc'];?></p>
                            </div>
                        </div>
<?php }?>                       

                    </div>
                </div>
                <!--END-->
                <!---->
                <div class="recommend">
                	<div class="title"><a href="javascript:void(0);">查看更多>></a>今日最受欢迎</div>
                    <div class="proList">
                    	<ul class="pro_list clearfix">
 <?php foreach($array as $v){?>                             
                        	<li>
                                    
                            	<div class="imgWrap"><a class="btn" href="./index.php?r=goods/index&gid=<?php echo $v['goods_id']?>"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$v['goods_img'];?>" width='126' height='126'></a></div>
                                <p class="proName"><a href="javascript:void(0);"><?php echo $v['goods_name'];?></a></p>
                                <p><span class="nowPrice">￥<?php echo $v['goods_price'];?></span>
                                	<span class="oldPrice">￥<?php echo $v['goods_price']+100;?></span>
                                </p>
                                <p><a class="addCar" onclick="shopcar(<?php echo $v['goods_id'];?>)" href="#">加入购物车</a></p>
                            </li>
 <?php }?>  


                        </ul>
                    </div>
                </div>
                <!--END-->
            </div>
            <!--内容区域-->
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
//购物车
function shopcar(gid){
    //alert(gid);
    var number=1;
    var gname=$('#gname').val();
    var price=$('#price'+gid).val();
    //alert(gname);
    //alert(price);
    $.ajax({
        type:"get",
        url:"index.php?r=goods/shopcar",
        data:{'gid':gid,'number':number,'gname':gname,'price':price},
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
		
         