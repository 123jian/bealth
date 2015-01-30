<?php

namespace backend\controllers;

use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class AdminController extends \yii\web\Controller
{
	public function __construct($id,$mo)
    {
		parent::__construct($id,$mo);
		
			$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
			$url=dirname($url);


			$id=$_COOKIE['uid'];
			$connection = \Yii::$app->db;
			$command = $connection->createCommand('SELECT role FROM admin_user WHERE uid='.$id);
			$post = $command->queryOne();
			

			$command = $connection->createCommand('SELECT * FROM role WHERE id='.$post['role']);
			$role = $command->queryOne();
			//print_r($role);


			$u=substr(strrchr($url,"="),1);
			foreach($role as $k=>$v){
				if(strpos($k,$u)){
					if($role[$k]!=1){
						echo "<script>alert('对不起，您的权限不够。无法访问');location.href='./index.php?r=index/norole'</script>";
					}
				}
			}
			exit();
    }

}

/*public function */