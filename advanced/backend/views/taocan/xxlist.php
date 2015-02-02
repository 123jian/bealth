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
<form class="form-inline definewidth m20" action="index.php?r=category/sear" method="post">  
    分类名称：
    <input type="text" name="cat_name" id="rolename"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增机构</button>
</form>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>商品ID</th>
        <th>商品名称</th>
        <th>价格</th>
        <th>图片</th>
		<th>操作</th>
    </tr>
    </thead>
	<?php foreach($data as $k=>$v){?>
	     <tr>

            <td><?php echo $v['goods_id']?></td>
            <td><?php echo $v['goods_name']?></td>
            <td><?php echo $v['goods_price']?></td>
			<td><img src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/backend/web/'.$v['goods_img'];?>" width="50" height="50"></td>
			<td><a href="#">删除</a>|<a href="index.php/taocan/">编辑</a></td>
        </tr>
	<?php }?>
	</table>
</body>
</html>
<script>
    $(function () {
        
		$('#addnew').click(function(){

				window.location.href="index.php?r=category/addarticle";
		 });


    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.php?r=category/del&id="+id;
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script>