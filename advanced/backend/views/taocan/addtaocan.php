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
<form action="index.php?r=taocan/addtaocan_pro" method="post">
<table class="table table-bordered table-hover definewidth m10" >
    <tr>
        <td>商品名称</td>
        <td>
			<select name="goods_id">
				<option value="0" selected>《-请选择商品-》
				<?php foreach($gdata as $v){?>
				<option value="<?php echo $v['goods_id']?>"><?php echo $v['goods_name']?>
				<?php }?>
			</select>打折
			<select name="zhe">
	
				<option value="0.6">6折
				<option value="0.7">7折
				<option value="0.8">8折
				<option value="0.9" selected>9折
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
	<tr align='right'><td colspan="2"><input type="submit" value="添加" onclick=""></td></tr>
 
</table>
</form>
</body>
</html>
