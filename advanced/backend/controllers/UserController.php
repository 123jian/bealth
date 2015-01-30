<?php

namespace backend\controllers;
use app\models\Role;
use app\models\Adminuser;
use yii\db\Query;
use yii\web\Controller;
class UserController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {

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
		$model=new query();
		if(@$_POST){
			$arr=$model->from(['admin_user','role'])->where("admin_user.role=role.id and username like '%".$_POST['username']."%'")->all();
		}else{
			$arr=$model->from(['admin_user','role'])->where("admin_user.role=role.id")->all();
		}
        return $this->renderpartial('index',["data"=>$arr]);
    }
	//用户添加
    public function actionAdd()
    {
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("SELECT * FROM role");
		$posts = $command->queryAll();
        return $this->renderpartial('add',["arr"=>$posts]);
    }
	//用户添加
    public function actionAdd_pro()
    {
		$connection = \Yii::$app->db;
        $connection->createCommand()->insert('admin_user',$_POST)->execute();
		echo "<script>alert('添加成功');location.href='./index.php?r=user/index'</script>";
    }
	public function actionDel()
    {
		$connection = \Yii::$app->db;
		$connection->createCommand()->delete('admin_user', 'uid = '.$_GET['id'])->execute();
		echo "<script>alert('删除成功');location.href='./index.php?r=user/index'</script>";
    }
	


	//修改页面
	public function actionEdit()
    {
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM admin_user WHERE uid='.$_GET['id']);
		$post = $command->queryOne();
		//print_r($post);
		$command = $connection->createCommand('SELECT * FROM role');
		$data = $command->queryAll();
        return $this->renderpartial('edit',["arr"=>$post,"data"=>$data]);
    }
	//修改
	public function actionEdit_pro()
    {
		$connection = \Yii::$app->db;
        $connection->createCommand()->update('admin_user', $_POST, 'uid ='.$_POST['uid'])->execute();
		echo "<script>alert('修改成功');location.href='./index.php?r=user/index'</script>";
    }

}
