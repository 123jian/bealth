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
<form action="index.php?r=role/edit_pro" method="post" class="definewidth m20" >
<input type="hidden" name="id" value="<?php echo $arr['id']?>" />
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">标题</td>
        <td><input type="text" name="rname" value="<?php echo $arr['rname']?>"/></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="status" value="1" <?php if($arr['status']==1){ echo "checked";}?>/> 启用
           <input type="radio" name="status" value="0"  <?php if($arr['status']==0){ echo "checked";}?> /> 禁用
        </td>
    </tr>
    <tr>
        <td class="tableleft">权限</td>
        <td>
		<ul>
		<li>
		<label class='checkbox inline'>权限</label>
		<ul>
		<li><label class='checkbox inline'><input type='checkbox' name='node_goods' value='1'<?php if($arr['node_goods']==1){ echo "checked";}?>/>商品管理</label><li>
		<label class='checkbox inline'><input type='checkbox' name='node_category' value='1'  <?php if($arr['node_category']==1){ echo "checked";}?>/>分类管理</label>
		<li><label class='checkbox inline'><input type='checkbox' name='node_user' value='1' <?php if($arr['node_user']==1){ echo "checked";}?>/>会员管理</label>
		<li><label class='checkbox inline'><input type='checkbox' name='node_role' value='1'  <?php if($arr['node_role']==1){ echo "checked";}?>/>角色管理</label>
		</ul>
		</li>
		</ul></td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<a href="index.php?r=role/index" class="btn btn-success" name="backid" id="backid">返回列表</a>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>
    $(function () {
        $(':checkbox[name="group[]"]').click(function () {
            $(':checkbox', $(this).closest('li')).prop('checked', this.checked);
        });

		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script>