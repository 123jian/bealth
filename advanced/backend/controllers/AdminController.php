<?php

namespace backend\controllers;

use Yii;
use app\models\Classs;
use app\models\KekeWitkeyMember;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

class AdminController extends \yii\web\Controller
{
	public function __construct($id,$mo)
    {
		parent::__construct($id,$mo);
		if(1){
			$this->redirect('index.php?r=index/index');
		}else{
			$this->redirect('index.php?r=index/login');
		}
        
    }

}

/*public function */