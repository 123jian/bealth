
    <!-- 内容区域 -->
    <div class="containerWrapper">
    	<div class="container">
        	<!--内容区域-->
            <div class="shopping_wrap">
              <div class="title clearfix">
              	<p class="fr">
                  <a href="javascript:void(0);">我的购物车</a>
                  <a class="current" href="javascript:void(0);">填写核对订单信息</a>
                  <a href="javascript:void(0);">支付信息</a>
                  <a href="javascript:void(0);">交易成功</a>
                </p>
                <span class="fl">填写核对订单信息</span>
              </div>
              <div class="shopping_panel">
              	<div class="title">收货人信息<a href="javascript:void(0);">保存收货人信息</a></div>
            
<?php if(!empty(@$array)){ foreach($array as $val){?>                
<div class="shopping_panel">                

 <form class="newAddress">
	<span><input type="radio" name="new" value="<?php echo $val['aid'];?>"/></span>
        <span>收货人:<?php echo $val['name'];?></span><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['country'];?></span>
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['province'];?></span>省
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['city'];?></span>市
	&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo $val['county'];?></span><br>
	&nbsp;&nbsp;&nbsp;&nbsp;<span>手机号码:<?php echo $val['mobiles'];?></span>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>电话:<?php echo $val['phones'];?></span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>详细地址:<?php echo $val['address'];?></span><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<span>邮箱:<?php echo $val['email'];?></span>


</div>
<?php }}?>                
               
                	<div class="title"><input type="radio" name="new"/>使用新地址</div>
                    <div class="frmItem">
                    	<label class="lbl"><span class="redSpan2">*</span>收货人：</label>
                        <input class="txt" type="text" id="shouhuoren"/>
                    </div>
                    <div class="frmItem">
                    	<label class="lbl"><span class="redSpan2">*</span>所在地区：</label>


                        <select name="country" onchange="getregion(this)" id="country">
							<option>选择国家</option>
							<?php
								foreach($data as $v){
							?>
							<option value="<?php echo $v["region_id"]?>"><?php echo $v["region_name"]?></option>

							<?php
								}
							?>
						</select>

						<select name="province" onchange="getregion(this)"  id="province">
							<option>选择省</option>
						</select>

						<select name="city" onchange="getregion(this)"  id="city">
							<option>选择市</option>
						</select>

						<select name="directory" id="desc">
							<option>选择县/区</option>
						</select>


<script src="./jq.js"></script>
<script type="text/javascript">
function getregion(obj){


	var parent_id = $(obj).val();
	//alert(parent_id)
	$.ajax({
			url:"index.php?r=index/region&id="+parent_id,
			type:"get",
			dataType:"json",
			success:function(msg){
				//alert(msg)
				
				if(msg[0]["region_type"] == 1){

					var str = "<option>请选择省</option>";
					var dd = "province";
				}

				if(msg[0]["region_type"] == 2){

					var str = "<option>请选择市</option>";
					var dd = "city";
				}

				if(msg[0]["region_type"] == 3){

					var str = "<option>请选择县</option>";
					var dd = "desc";
				}
				
				for(a in msg){
					str += "<option value='"+msg[a]["region_id"]+"'>"+msg[a]['region_name']+"</option>";	
				}
				$("#"+dd).html(str);
				
			}
		})

}

</script>
                    </div>
                    <div class="frmItem">
                    	<label class="lbl"><span class="redSpan2">*</span>详细地址：</label>
                        <input class="txt width290" type="text"  id="address"/>
                    </div>
                    <div class="frmItem">
                    	<label class="lbl"><span class="redSpan2">*</span>手机号码：</label>
                        <input class="txt" type="text"  id="mobile"/>
                        <span>或</span>
                        <label class="lbl">固定电话：</label>
                        <input class="txt" type="text"  id="phone"/>
                    </div>
                    <div class="frmItem">
                    	<label class="lbl">邮箱：</label>
                        <input class="txt" type="text"  id="email"/>
                        <label>用来接受订单提醒邮件，便于您及时了解订单详情</label>
                    </div>
                    <div class="btnWrapper">
                    	<a class="btn" onclick="dizhi()" href="#">保存收货人地址</a>
                    </div>
                </form>
                <div class="menuList">
                	<div class="title">
                    	<a href="javascript:void(0);">返回购物清单</a>
                    	<span>商品清单</span>
                    </div>
                    <table class="menuTab">
                    	<tr class="title">
             		<td class="width415">商品</td>
                            <td>商城价</td>
                            <td>优惠</td>
                            <td>数量</td>
                            <td>库存状态</td>
                        </tr>
<?php foreach ($result as $val){ ?>                        
                        <tr>
                        	<td>
                            	<div class="clearfix">
                                	<div class="imgWrap"><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val['goods_img'];?>" width='80' height='60'></div>
                                    <div class="menu_msg" style="margin-left:300px;">
                                    	<p class="proName">
                                        	<a class="redSpan" href="javascript:void(0);"><?php echo $val['goods_name'];?></a>
                                        </p>
                                        <p>商品编号：<span><?php echo $val['goods_id'];?></span></p>
                                    </div>
                                </div>
                            </td>
                            <td><span>￥<?php echo $val['goods_price'];?></span></td>
                            <td><span></span></td>
                            <td><span>*<?php echo $val['cart_number'];?></span></td>
                            <td><span><?php echo $val['goods_number'];?></span></td>
                        </tr>
<?php }?>                        
 
                    </table>
                    <div class="btnWrapper">
                    	<a href="index.php?r=goods/payment">立即提交</a>
                    </div>
                </div>
              </div>
            </div>
            <!--内容区域-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
//购物车
function dizhi(){
    //alert($("#province option:selected").text());
    //return false;
    if($('#shouhuoren').val()==''){
        alert('请填写收货人');
        return false;
    }
    if($("#country option:selected").text()=='选择国家'){
        alert('请选择国家');
        return false;
    }
    if($("#province option:selected").text()=='请选择省'){
        alert('请选择省');
        return false;
    }
    if($("#city option:selected").text()=='请选择市'){
        alert('选择市');
        return false;
    }
    if($("#desc option:selected").text()=='请选择县'){
        alert('请选择县/区');
        return false;
    }
    if($('#address').val()==''){
        alert('请填写详细地址');
        return false;
    }
    if($('#mobile').val()==''){
        alert('请填写手机号码');
        return false;
    }

    $.ajax({
        type:"get",
        url:"index.php?r=goods/address",
        data:{'shouhuoren':$('#shouhuoren').val(),'country':$("#country option:selected").text(),'province':$("#province option:selected").text(),'city':$("#city option:selected").text(),'county':$("#desc option:selected").text(),'address':$('#address').val(),'mobile':$('#mobile').val(),'phone':$('#phone').val(),'email':$('#email').val()},
        cache:false,
        dataType:"json",
        success: function(msg){
                    //alert(msg);
                    if(msg==0){
                        alert('保存收货地址失败');
                        return false;
                    }
                    if(msg==1){
                        location.href='index.php?r=goods/shoppingmsg';
                    }                   
                 }
        
    });
    
    
    
}
</script>            
            