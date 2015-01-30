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
<form action="index.php?r=category/up" method="post" class="definewidth m20">
<input type="hidden" name="cat_id" value="<?php echo $data['cat_id']?>" />
<table class="table table-bordered table-hover ">
    <tr>
        <td width="10%" class="tableleft">分类编号</td>
        <td><span><?php echo $data['cat_id']?></span></td>
    </tr>
    <tr>
        <td class="tableleft">分类名称</td>
        <td ><input type="text" name="cat_name" value="<?php echo $data['cat_name']?>"/></td>
    </tr>  
    <tr>
        <td class="tableleft">状态</td>
        <td >
            <input type="radio" name="cat_status" value="1" 
			<?php  if($data['cat_status']==1){ ?>
				checked
			<?php }?>
			/> 启用
           <input type="radio" name="cat_status" value="0"
			<?php  if($data['cat_status']==0){ ?>
				checked
			<?php }?>
			/> 禁用
        </td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid" onclick="back()">返回列表</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
<script>
	/*function back(){
		window.location='./index?r=category/articlelist';			
	}*/
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.php?r=category/articlelist";
		 });

    });
</script>