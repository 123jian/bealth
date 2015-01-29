<?php

namespace backend\controllers;

class GoodsController extends \yii\web\Controller
{
    public function actionGoodslist()
    {
		
        return $this->renderpartial('goodslist');
    }
	public function actionAddgoods()
    {
		
        return $this->renderpartial('addgoods');
    }
	public function actionArticlelist()
    {
		
        return $this->renderpartial('articlelist');
    }
	public function actionAddarticle()
    {
		
        return $this->renderpartial('addarticle');
    }

}
