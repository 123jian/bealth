<?php

namespace frontend\controllers;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
	}
	public function actionLogin()
    {
        return $this->renderpartial('index');
	}

}
