<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }
	public function actionLogin()
    {
        return $this->renderpartial('login');
    }

}
