<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//引入百度编辑器
$this->registerJsFile('@web/public/ueditor/ueditor.config.js');//注册自定义js
$this->registerJsFile('@web/public/ueditor/ueditor.all.min.js');
$this->registerJsFile('@web/public/ueditor/lang/zh-cn/zh-cn.js');
?>

<script>
 $(function(){
 	var ue = UE.getEditor('editor');
 })
</script>
<style>
	.inline .radio,.inline .checkbox{display: inline-block;margin: 0 5px;}
	#editor{margin-top: 20px;padding:0;margin:20px 0;width:100%;height:auto;border: none;}
	
</style>
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
    
    <link rel="stylesheet" href="./kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="./kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="./kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="./kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="./kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : './kindeditor/plugins/code/prettify.css',
				uploadJson : './kindeditor/php/upload_json.php',
				fileManagerJson : './kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
    
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
<form action="index.php?r=goods/adds" method="post" enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">商品名称</td>
        <td><input type="text" name="goods_name"/></td>
    </tr>
    <tr>
        <td class="tableleft">商品分类</td>
        <td>
            <select name="category">
                <option value="1" selected>--请选择--</option>
<?php foreach($result as $val){?>                 
                <option value="<?php echo $val['cat_id']?>"><?php echo $val['cat_name']?></option>
<?php }?> 
            </select>
        </td>
    </tr>
    <tr>
        <td class="tableleft">商品数量</td>
        <td><input type="text" name="goods_number"/></td>
    </tr>
    <tr>
        <td class="tableleft">商品价格</td>
        <td><input type="text" name="goods_price"/></td>
    </tr>
    <tr>
        <td class="tableleft">商品图片</td>
        <td><input type="file" name="goods_img"/></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
            <input type="radio" name="goods_status" value="1" checked/> 上架
            <input type="radio" name="goods_status" value="0"/> 下架
			<input type="radio" name="goods_status" value="2"/> 限时秒杀
			<input type="radio" name="goods_status" value="3"/> 人气单品
			<input type="radio" name="goods_status" value="4"/> 镇店之宝
			<input type="radio" name="goods_status" value="5"/> 付邮试用
        </td>
    </tr>
    <tr>
        <td class="tableleft">商品描述</td>
        <td>
            <textarea name="content1" style="width:700px;height:200px;visibility:hidden;"></textarea>   
        </td>
    </tr>
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary">添加</button>&nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
        </td>
    </tr>
</table>
</form>
<div>
                <script type="text/plain" id="editor" style="width:800px;height:300px;"></script>
            </div>
</body>
</html>


<script>
    $(function () {       
		$('#backid').click(function(){
				window.location.href="index.html";
		 });

    });
</script>

