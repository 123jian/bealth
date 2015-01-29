<?php

namespace backend\controllers;

use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class CategoryController extends \yii\web\Controller
{
	public function actionArticlelist()
    {
		
        return $this->renderpartial('articlelist');
    }
	public function actionAddarticle()
    {
		
        return $this->renderpartial('addarticle');
    }

}