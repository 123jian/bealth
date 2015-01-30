<?php

namespace backend\controllers;

use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Category;
use yii\db\Query;

class CategoryController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionArticlelist()
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
		$cat= new Category();
		$data = $cat::find();
		//print_r($data);die;
		$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->orderBy('cat_id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		return $this->renderPartial('articlelist',['data'=>$model,'pages' => $pages]);
        //return $this->renderpartial('articlelist');
    }
	public function actionAddarticle()
    {
        return $this->renderpartial('addarticle');
    }
	//添加分类
	public function actionAddcategory()
    {
		//print_r($_POST);die;
		$cat = new Category();
		if($_POST['cat_name']==""){
			echo "<script>alert('分类名称不能为空');location.href='./index.php?r=category/addarticle'</script>";
		}
		$cat->cat_name = $_POST['cat_name'];
		$cat->cat_status = $_POST['cat_status'];
		$in=$cat->insert();
		if($in){
			//echo "<script>alert('添加失败');location.href='./index.php?r=category/addcategory'</script>";
			$this->redirect('index.php?r=category/articlelist');
		}else{
			echo "<script>alert('添加失败');location.href='./index.php?r=category/addcategory'</script>";
		}
    }
	public function actionArticleedit()
    {
		//print_r($_GET['id']);die;
		$id=$_GET['id'];
		$cat = new Category();
		$arr = $cat::findOne($id);
		//print_r($arr);die;
        return $this->renderpartial('articleedit',['data'=>$arr]);
    }
	public function actionUp()
    {
		//print_r($_POST);die;
		$cat = new Category();
		if($_POST['cat_name']==""){
			echo "<script>alert('分类名称不能为空');location.href='./index.php?r=category/articlelist'</script>";
		}
		$update=$cat->updateall($_POST,["cat_id"=>$_POST['cat_id']]);
		if($update){
			$this->redirect('index.php?r=category/articlelist');
		}else{
			echo "<script>alert('修改失败');location.href='./index.php?r=category/articlelist'</script>";
		}
    }
	public function actionDel()
    {
		//print_r($_GET['id']);die;
		$id=$_GET['id'];
		$cat = new Category();
		$del = $cat::deleteAll('cat_id='.$id);
		if($del){
			$this->redirect('index.php?r=category/articlelist');
		}else{
			echo "<script>alert('删除失败');location.href='./index.php?r=category/articlelist'</script>";
		}
        return $this->renderpartial('articleedit',['data'=>$arr]);
    }
	//状态开启
	public function actionKq()
    {
		//print_r($_GET);die;
		$cat = new Category();
		$update=$cat->updateall(['cat_status'=>1],["cat_id"=>$_GET['id']]);
		if($update){
			$this->redirect('index.php?r=category/articlelist');
		}else{
			echo "<script>alert('开启失败');location.href='./index.php?r=category/articlelist'</script>";
		}
    }
	//状态开启
	public function actionGb()
    {
		//print_r($_GET);die;
		$cat = new Category();
		$update=$cat->updateall(['cat_status'=>0],["cat_id"=>$_GET['id']]);
		if($update){
			$this->redirect('index.php?r=category/articlelist');
		}else{
			echo "<script>alert('开启失败');location.href='./index.php?r=category/articlelist'</script>";
		}
    }
	//搜索
	public function actionSear()
    {
		//print_r($_POST);//die;
		$cat= new Category();
		//find();
		$cat_name=$_POST['cat_name'];
		$data = $cat->find()->where(['like', 'cat_name', $cat_name]);
		//print_R($data);die;
		$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->orderBy('cat_id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		return $this->renderPartial('articlelist',['data'=>$model,'pages' => $pages]);
		//return $this->renderPartial('articlelist',['data'=>$data]);
    }
}