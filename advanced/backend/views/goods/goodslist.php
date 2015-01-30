<?php
use yii\widgets\LinkPager;
?>
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
<form class="form-inline definewidth m20" action="index.php?r=goods/search" method="post">  
    机构名称：
    <input type="text" name="rolename" id="rolename" class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <a href="index.php?r=goods/addgoods" type="button" class="btn btn-success" id="addnew">添加商品</a>
</form>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>商品编号</th>
        <th>商品名称</th>
        <th>商品分类</th>
        <th>商品数量</th>
        <th>商品价格</th>
        <th>商品图片</th>
        <th>状态</th>
        <th>商品描述</th>        
        <th>管理操作</th>
    </tr>
    </thead>
<?php foreach($result as $val){?>    
    <tr>
        <td><?php echo $val['goods_id'];?></td>
        <td><?php echo $val['goods_name'];?></td>
        <td><?php echo $val['cat_id'];?></td>
        <td><?php echo $val['goods_number'];?></td>
        <td><?php echo $val['goods_price'];?></td>
        <td><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$val['goods_img'];?>" width="100" height="100"></td>
        <td><?php echo $val['goods_status'];?></td>
        <td><?php echo substr($val['goods_desc'],0,10);?></td>
        <td><a href="index.php?r=goods/edit&id=<?php echo $val['goods_id'];?>">编辑</a>||<a href="index.php?r=goods/del&id=<?php echo $val['goods_id'];?>">删除</a></td>
    </tr>
<?php }?>    
</table>
<div class="inline pull-right page">
         <?= LinkPager::widget(['pagination' => $pages]); ?>
</div>
</body>
</html>
<script>
    $(function () {
        
		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.html";
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script>