
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<!--内容区域-->
            <div class="shopping_wrap">
            	<div class="title clearfix">
                	<p class="fr">
                    	<a class="current" href="javascript:void(0);">我的购物车</a>
                        <a href="javascript:void(0);">填写核对订单信息</a>
                        <a href="javascript:void(0);">支付信息</a>
                        <a href="javascript:void(0);">交易成功</a>
                    </p>
                	<span class="fl">我的购物车</span>
                </div>
                <div class="shoppingTab">
                	<form><center>
                	<table>
                    	<tr class="title">
                        	<td class="width55"><input class="checkBtn" type="checkbox" />全选</td>
                            <td class="width55">产品</td>
                            <td class="width55">名称</td>
                            <td class="width55">库存</td>
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
                                    <td><a class="proName" href="./index.php?r=goods/index&gid=<?php echo $val['goods_id']?>"><?php echo $val['goods_name'];?></a>

                                </div>
                                <div class="give_wrap">
                                  <p></p>
                                  <p></p>
                                </div>
                            </td>
                            <td><span><?php echo $val['goods_number'];?>
                                </span>
                            </td>
                            
                            <td><span>￥<?php echo $val['goods_price'];?></span><span class="giveIcon"></span></td>
                            
                            <td><span>暂无优惠
                                </span>
                            </td>
                            <td>
                              <div class="num clearfix">
                                <a href="javascript:void(0);">-</a>
                                <input type="text" class="txt" value="<?php echo $val['cart_number'];?>" id="number"/>
                                <a href="javascript:void(0);">+</a>
                              </div>
                            </td>
                            <td><a class="deleteBtn" href="#" onclick="del(<?php echo $val['goods_id'];?>)">删除</a></td>
                        </tr>
<?php }?>                        
                     </table></center>
                    </form>
                </div>
                <div class="discount_wrap">
                  <table class="moneyTable">
                    <tr>
                        <td class="txt_l"><a href="javascript:void(0);"><span class="subIcon"></span>使用优惠券抵部分总额</a></td>
                        <td><span><font color="red" size="5"><?php echo $arr['count'];?></font>件商品，总金额：</span></td>
                        <td><span>￥<?php echo $arr['sum'];?></span></td>
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
                        <td><span>=￥<?php echo $arr['sum'];?></span></td>
                    </tr>
                  </table>
                  <div class="submit_wrap">
                  	应付总额：<span class="money">￥<?php echo $arr['sum'];?></span>元
                    <a href="#" onclick="orders()">提交订单</a>
                  </div>
                </div>
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
 <input type='hidden' id='gname' value='<?php echo $v['goods_name']?>'>                               
                                <p><span class="nowPrice">￥<?php echo $v['goods_price'];?></span>
                                	<span class="oldPrice">￥<?php echo $v['goods_price']+100;?></span>
                                </p>
                                <p><a class="addCar" onclick="shopcar(<?php echo $v['goods_id'];?>)" href="#">加入购物车</a></p>
                            </li>
 <input type='hidden' id='price<?php echo $v['goods_id'];?>' value='<?php echo $v['goods_price'];?>'>
 <input type='hidden' id='gname' value='<?php echo $v['goods_name']?>'>
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
function del(gid){
    //alert(gid);
    if(confirm('您确定要删除吗？')){       
        $.ajax({
            type:"get",
            url:"index.php?r=goods/delcar",
            data:{'gid':gid},
            cache:false,
            dataType:"json",
            success: function(msg){
                        //alert(msg);
                        if(msg==0){
                            alert('删除失败');
                            return false;
                        }
                        if(msg==1){
                            history.go(0);
                        }
                     }

        }); 
    }
}
 //提交订单
function orders(){
    //alert(gid);
    var number=$('#number').val();
    if(number<1){
        alert('请输入购买数量');
        return false;
    }
    
}
</script> 

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