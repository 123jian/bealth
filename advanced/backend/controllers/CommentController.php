<?php

namespace backend\controllers;

use Yii;

use app\models\Comment;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Category;
use yii\db\Query;

class CommentController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		$model=new Query();
		$data = $model->from(['comment','goods'])->where("comment.goods_id=goods.goods_id order by com_time desc")->all();
		//print_r($data);die;
		$pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>5]);
		$data=$model->offset($pages->offset)->limit($pages->limit)->all();
		//print_r($data);die;
		return $this->renderPartial('pllist',['data'=>$data,'pages' => $pages]);
    }
	public function actionDel()
    {
		//print_r($_GET['id']);die;
		$id=$_GET['id'];
		$com = new Comment();
		$del = $com::deleteAll('com_id='.$id);
		if($del){
			$this->redirect('index.php?r=comment/index');
		}else{
			echo "<script>alert('删除失败');location.href='index.php?r=comment/index'</script>";
		}
        //return $this->renderpartial('articleedit',['data'=>$d]);
    }
	//搜索
	public function actionSear()
    {

		$goods_name=$_POST['goods_name'];
		//$data = $cat->find()->where(['like', 'cat_name', $cat_name]);

		$model=new Query();
		$data = $model->from(['comment','goods'])->where("comment.goods_id=goods.goods_id order by com_time desc")->where(['like', 'goods.goods_name', $goods_name])->all();
		//print_r($data);die;
		//$pages = new Pagination(['totalCount'=>$model->count(),'pageSize'=>10]);
		//$data=$model->offset($pages->offset)->limit($pages->limit)->all();
		//print_r($data);die;,'pages' => $pages
		return $this->renderPartial('pllist',['data'=>$data]);
    }
	
}