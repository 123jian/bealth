<?php
namespace frontend\controllers;
use yii\web\Controller;
use yii\web\Session;
use app\models\Users;

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

	public $enableCsrfValidation = false;
	public function actionLogin_pro()
	{
		 $name=@$_POST['username'];
		//var_dump($name);
         $pwd=@$_POST['password'];

         $a=Users::find()->where(['username' => $name,'password' => $pwd])->one();
         //print_R($a);die;
          if($a){
                   $this->redirect(array('index/index'));
				   $session = new Session;
				   
				   $session->set('name', $_POST['username']);
				   echo "<script>alert('登陆成功');location.href='./index.php?r=index/index'</script>";
          }else{
               echo "<script>alert('登陆失败');location.href='./index.php?r=index/login'</script>";
          }
	}

}
