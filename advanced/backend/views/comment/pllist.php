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
	.page{float:right}
	.page li{float:left}

	li {list-style-type:none;}

    </style>
</head>

<body>
<form class="form-inline definewidth m20" action="index.php?r=comment/sear" method="post">  
    分类名称：
    <input type="text" name="goods_name" id="rolename"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
</form>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>评价编号</th>
        <th>评价人</th>
        <th>评价商品</th>
		<th>评价内容</th>
        <th>管理操作</th>
    </tr>
    </thead>
		<?php foreach($data as $v){?>
	     <tr>
            <td><?php echo $v['com_id']?></td>
            <td><?php echo $v['uname']?></td>
            <td><?php echo $v['goods_name']?></td>
			<td><?php echo $v['content']?></td>
            <td>

				  <button type="button" class="btn btn-success" id="del" onclick="del(<?php echo $v['com_id']?>)">删除</button>
				  
            </td>
        </tr>
		<?php }?>
	</table>
<div class="inline pull-right page">
<?php 
if(!empty(@$pages)){ ?>
<?= LinkPager::widget(['pagination' => $pages]); ?>
<?php }else{}?>
        </div>

</body>
</html>
<script>


	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.php?r=comment/del&id="+id;
			
			window.location.href=url;		
		
		}
	
	}
</script>