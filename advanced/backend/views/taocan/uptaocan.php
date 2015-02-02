<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script type="text/javascript" src="./Js/jquery.js"></script>
    <script type="text/javascript" src="./Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="./Js/bootstrap.js"></script>
    <script type="text/javascript" src="./Js/ckform.js"></script>
    <script type="text/javascript" src="./Js/common.js"></script>

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
        .page{float:right;}
	.page li{float:left;}
	li {list-style-type:none;}


    </style>
</head>
<body>
<form action="index.php?r=taocan/uppro" method="post">
<table class="table table-bordered table-hover definewidth m10" >
    <tr>
        <td>商品名称</td>
        <td>
			<select name="goods_id">
				<?php foreach($gdata as $v){?>
				<option value="<?php echo $v['goods_id']?>"
				<?php 
					if($v['goods_id']==$arr['goods_id']){
						echo "selected";
					}
				?>
				><?php 
					if($v['goods_id']==$arr['goods_id']){
						echo $v['goods_name'];
					}else{
						echo $v['goods_name'];
					}
				?>
					
				<?php }?>
			</select>打折
			<select name="zhe">
	
				<option value="0.6" <?php 
					if($arr['zhe']==0.6){
						echo "selected";
					}
				?>>
				<?php 
					if($arr['zhe']==0.6){
						echo 6;
					}else{
						echo 6;
					}
				?>
				折
				<option value="0.7"
				<?php 
					if($arr['zhe']==0.7){
						echo "selected";
					}
				?>
				>
				<?php 
					if($arr['zhe']==0.7){
						echo 7;
					}else{
						echo 7;
					}
				?>
				折
				<option value="0.8"
				<?php 
					if($arr['zhe']==0.8){
						echo "selected";
					}
				?>
				>
				<?php 
					if($arr['zhe']==0.8){
						echo 8;
					}else{
						echo 8;
					}
				?>
				折
				<option value="0.9" 
				<?php 
					if($arr['zhe']==0.9){
						echo "selected";
					}
				?>
				>
				<?php 
					if($arr['zhe']==0.9){
						echo 9;
					}else{
						echo 9;
					}
				?>
				折
			</select>
		</td>
		
    </tr>
	<tr>
		<td></td>
		<td>
		<?php foreach($gdata as $v){?>
				<input type="checkbox" name="taocan_id[]" value="<?php echo $v['goods_id']?>"><?php echo $v['goods_name']?>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php }?></td>
	</tr>
	<tr align='right'><td colspan="2"><input type="submit" value="修改" onclick=""></td></tr>
 
</table>
</form>
</body>
</html>
