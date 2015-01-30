<?php

namespace backend\controllers;

class RoleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }
	public function actionEdit()
    {
        return $this->renderpartial('edit');
    }

}
