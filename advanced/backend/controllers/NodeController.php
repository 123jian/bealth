<?php

namespace backend\controllers;

class NodeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }

}
