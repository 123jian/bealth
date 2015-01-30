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
<form action="index.php?r=user/edit_pro" method="post" class="definewidth m20">
<input type="hidden" name="uid" value="<?php echo $arr['uid']?>" />
    <table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="10%" class="tableleft">登录名</td>
            <td><input type="text" name="username" value="<?php echo $arr['username']?>"/></td>
        </tr>
        <tr>
            <td class="tableleft">密码</td>
            <td><input type="password" name="password" value="<?php echo $arr['password']?>"/></td>
        </tr>
        <tr>
            <td class="tableleft">真实姓名</td>
            <td><input type="text" name="real_name" value="<?php echo $arr['real_name']?>"/></td>
        </tr>
        <tr>
            <td class="tableleft">角色</td>
            <td>
			<select name="role">
			<?php foreach($data as $v){?>
			    <?php if($v['id']==$arr['role']){?>
				<option value="<?php echo $v['id']?>" selected><?php echo $v['rname']?>
				<?php }else{?>
				<option value="<?php echo $v['id']?>"><?php echo $v['rname']?>
				<?php }?>
			<?php }?>
			</select>
			</td>
        </tr>
        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;
				<a href="index.php?r=user/index" class="btn btn-success" name="backid" id="backid">返回列表</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="{:U('User/index')}";
		 });

    });
</script>