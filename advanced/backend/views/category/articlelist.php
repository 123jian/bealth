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
<form class="form-inline definewidth m20" action="index.html" method="get">  
    分类名称：
    <input type="text" name="rolename" id="rolename"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <button type="button" class="btn btn-success" id="addnew">新增机构</button>
</form>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>分类编号</th>
        <th>分类名称</th>
        <th>状态</th>
        <th>管理操作</th>
    </tr>
    </thead>
	<?php foreach($data as $k=>$v){?>
	     <tr>
            <td><?php echo $v['cat_id']?></td>
            <td><?php echo $v['cat_name']?></td>
            <td><?php if($v['cat_status']){ echo "已启用";}else{ echo "已关闭";}?></td>
            <td>
                  <?php if($v['cat_status']){ ?>
					<a href="index.php?r=category/gb&id=<?php echo $v['cat_id']?>">关闭</a>&nbsp;&nbsp;
				  <?php }else{ ?> 
					<a href="index.php?r=category/kq&id=<?php echo $v['cat_id']?>">开启</a>&nbsp;&nbsp;
				  <?php }?>
                  <a href="index.php?r=category/articleedit&id=<?php echo $v['cat_id']?>">编辑</a>&nbsp;&nbsp;
				  <button type="button" class="btn btn-success" id="del" onclick="del(<?php echo $v['cat_id']?>)">删除</button>
				  <a href="index.php?r=category/del&id=<?php echo $v['cat_id']?>"></a>&nbsp;&nbsp;
            </td>
        </tr>
	<?php }?>
	</table>
<div class="inline pull-right page">
        <?= LinkPager::widget(['pagination' => $pages]); ?></div>

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