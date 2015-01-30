<?php

namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

use yii\filters\AccessControl;
use app\models\Goods;
use app\models\Classs;
use common\models\LoginForm;
use yii\data\Pagination;
use app\models\Category;
use app\models\Comment;
use yii\db\Query;

class GoodsController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		//导航
		$cat=new Category();
		$c=$cat->find()->where(['cat_status'=>1])->all();
		//print_r($c);die;
		//商品信息
		$gid=$_GET['gid'];
		$goo= new Goods();
		$data=$goo->find()->where(['goods_id'=>$gid])->one();
		//
		$data1=$goo->find()->limit(2)->all();
		//print_R($data1);die;
		$datar=$goo->find()->limit(4)->all();
		return $this->renderPartial('mall',['cate'=>$c,'data1'=>$data1,'datar'=>$datar,'data'=>$data,]);
    }
	//评论
	public function actionPinglun()
	{
		//print_r($_GET);die;
		$uname=@$_GET['uname'];
		$goods_id=@$_GET['goods_id'];
		$content=@$_GET['content'];
	
		$model=new Comment();

		$model->content="$content";
    	$model->uname="$uname";
    	$model->goods_id="$goods_id";
		$model->com_time=time();
    	$row=$model->save();
    	if($row)
    	{
    		exit(json_encode(1));
    	}else
    	{
    		exit(json_encode(0));
    	}/**/
	}
}