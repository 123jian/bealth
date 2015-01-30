<?php

namespace backend\controllers;
class RoleController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	//列表
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


		if(@$_POST){
			$sql="select * from role where rname like '%".$_POST['rolename']."%'";
		}else{
			$sql="SELECT * FROM role";
		}
		$connection = \Yii::$app->db;
		$command = $connection->createCommand($sql);
		$posts = $command->queryAll();
        return $this->renderpartial('index',["arr"=>$posts]);
    }
	//角色添加
    public function actionAdd()
    {
        return $this->renderpartial('add');
    }
	//角色添加
    public function actionAdd_pro()
    {
		$connection = \Yii::$app->db;
        $connection->createCommand()->insert('role',$_POST)->execute();
		echo "<script>alert('添加成功');location.href='./index.php?r=role/index'</script>";
    }
	public function actionDel()
    {
		$connection = \Yii::$app->db;
		$connection->createCommand()->delete('role', 'id = '.$_GET['id'])->execute();
		echo "<script>alert('删除成功');location.href='./index.php?r=role/index'</script>";
    }
	


	//修改页面
	public function actionEdit()
    {
		$connection = \Yii::$app->db;
		$command = $connection->createCommand('SELECT * FROM role WHERE id='.$_GET['id']);
		$post = $command->queryOne();
        return $this->renderpartial('edit',["arr"=>$post]);
    }
	//修改
	public function actionEdit_pro()
    {
		$connection = \Yii::$app->db;
        $connection->createCommand()->update('role', $_POST, 'id ='.$_POST['id'])->execute();
		echo "<script>alert('修改成功');location.href='./index.php?r=role/index'</script>";
    }
	

}
