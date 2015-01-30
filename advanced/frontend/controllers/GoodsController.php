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
use yii\db\Query;

class GoodsController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		//print_r($_GET);die;
		$gid=$_GET['gid'];
		//echo $gid;die;
		$goo= new Goods();
		$data=$goo->find()->where(['goods_id'=>$gid])->one();
		//$data = $goo::where(['goods_id'=>$gid])->find()->one();
		//print_r($data);die;
		$this->renderPartial('protype',['data'=>$data]);
    }
}