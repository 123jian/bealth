
<!DOCTYPE HTML>
<html>
 <head>
  <title>后台管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
       <!--<img src="/chinapost/Public/assets/img/top.png">-->
      </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user"><?php
	
	/*use yii\web\Session;
	$session = new Session;
	echo $session->get('name');
	*/
	echo $_COOKIE['name'];
	?></span><a href="index.php?r=index/logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        		<li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>       

      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <script type="text/javascript" src="assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bui-min.js"></script>
  <script type="text/javascript" src="assets/js/common/main-min.js"></script>
  <script type="text/javascript" src="assets/js/config-min.js"></script>
  <script>
    BUI.use('common/main',function(){
      var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'12',text:'机构管理',href:'index.php?r=node/index'},
		  {id:'3',text:'角色管理',href:'index.php?r=role/index'},
		  {id:'4',text:'用户管理',href:'index.php?r=user/index'},
		  {id:'6',text:'网站访问量',href:'index.php?r=menu/index'}]}]},
		  {id:'7',homePage : '9',menu:[{text:'商品管理',items:[{id:'9',text:'商品列表',href:'index.php?r=goods/goodslist'},
		  {id:'12',text:'添加商品',href:'index.php?r=goods/addgoods'}]},
		  {text:'分类管理',items:[{id:'10',text:'分类列表',href:'index.php?r=category/articlelist'},
		  {id:'13',text:'添加分类',href:'index.php?r=category/addarticle'}]},
		  {text:'商品评论管理',items:[{id:'11',text:'评论列表',href:'index.php?r=comment/index'}]},
		  {text:'商品套餐管理',items:[{id:'14',text:'套餐列表',href:'index.php?r=taocan/index'},{id:'15',text:'添加套餐',href:'index.php?r=taocan/addtaocan'}]}
	  ]}];
      new PageUtil.MainPage({
        modulesConfig : config
      });
    });
  </script>
 </body>
</html>