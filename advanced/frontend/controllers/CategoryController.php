<?php

namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
//use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Goods;
use app\models\Classs;
use common\models\LoginForm;
use yii\data\Pagination;
use app\models\Category;
use yii\db\Query;

class CategoryController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		$cat=new Category();
		$c=$cat->find()->where(['cat_status'=>1])->all();
		//print_r($c);die;
		//$this->layout='@app/views/layouts/layout.php';
		//echo 111;die;
		/**/$goo= new goods();
		$id=8;
		$data = $goo::find();
		//print_r($data);die;
		$cid=8;
		if(@$_GET['cid']!=""){
			$cid=$_GET['cid'];
		}
		$pages = new Pagination(['totalCount' =>$data->where(['cat_id'=>$cid])->count(), 'pageSize' => '6']);
		$model = $data->where(['cat_id'=>$cid])->offset($pages->offset)->limit($pages->limit)->orderBy('goods_id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		$data1=$goo->find()->where(['cat_id'=>$cid])->limit(2)->all();
		//print_R($data1);die;
		$datar=$goo->find()->where(['cat_id'=>$cid])->limit(4)->all();
		return $this->renderPartial('protype',['cate'=>$c,'data'=>$model,'data1'=>$data1,'datar'=>$datar,'pages' => $pages]);
        //return $this->render('protype');
    }
}