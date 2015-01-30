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


    </style>
</head>
<body>
<form class="form-inline definewidth m20" action="index.php?r=role/index" method="post">  
    角色名称：
    <input type="text" name="rolename" id="rolename"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp;
	<a href="index.php?r=role/add" class="btn btn-success" id="addnew">新增角色</a>
</form>
<table class="table table-bordered table-hover definewidth m10" >
    <thead>
    <tr>
        <th>角色id</th>
        <th>角色名称</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    </thead>
	<?php foreach($arr as $v){?>
	     <tr>
            <td><?php echo $v['id']?></td>
            <td><?php echo $v['rname']?></td>
            <td><?php echo $v['status']?></td>
            <td>
                  <a href="index.php?r=role/edit&id=<?php echo $v['id']?>">编辑</a>
				  <a href="index.php?r=role/del&id=<?php echo $v['id']?>">删除</a>
                  
            </td>
        </tr>
	<?php }?>
		</table>
		</body>
		</html>

<script>
    $(function () {
        
		$('#addnew').click(function(){

				window.location.href="add.html";
		 });


    });

</script>