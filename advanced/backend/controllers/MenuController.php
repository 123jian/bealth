<?php

namespace backend\controllers;

class MenuController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("select * from pv");
		$data = $command->queryAll();
		$y = "";
        foreach($data as $key=>$val){
            $y.=$val['pv_count'].",";
        }
		$x="";
        foreach($data as $key=>$val){
            $x.="'".$val['pv_time']."',";
        }

        return $this->renderpartial('index',['x'=>$x,'y'=>$y]);
    }

}
