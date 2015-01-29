<?php

namespace backend\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
