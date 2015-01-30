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
	public function actionIndex()
    {
		$cat= new Category();
		$data = $cat::find();
		//print_r($data);die;
		$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->orderBy('cat_id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		return $this->renderPartial('protype',['data'=>$model,'pages' => $pages]);
        //return $this->renderpartial('articlelist');
    }
	
}