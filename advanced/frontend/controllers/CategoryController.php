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
		$this->layout='@app/views/layouts/layout.php';
		//echo 111;die;
		/**/$goo= new goods();
		$id=8;
		$data = $goo::find();
		//print_r($data);die;
		$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '6']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->orderBy('goods_id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		$data1=$goo->find()->limit(2)->all();
		//print_R($data1);die;
		$datar=$goo->find()->limit(4)->all();
		return $this->render('protype',['data'=>$model,'data1'=>$data1,'datar'=>$datar,'pages' => $pages]);
        //return $this->render('protype');
    }
	
}