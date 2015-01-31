<?php

namespace frontend\controllers;
use app\models\Users;
use yii\web\Session;
class RegisterController extends \yii\web\Controller
{
	
	public $enableCsrfValidation = false;
    public function actionIndex()
    {
		error_reporting(0);
        return $this->renderpartial('index');
    }
	public function actionZhuce()
    {
		if($_COOKIE['yzm']==$_POST['yzm']){
        //print_r($_POST);
		$arr=Users::find()->where(['username' => $_POST['name']])->one();
		if($arr){
			echo "<script>alert('用户名已存在');location.href='./index.php?r=register/index'</script>";
		}else{
			if($_POST['pwd']==$_POST['cpwd']){
				$connection = \Yii::$app->db;
				$data['username']=$_POST['name'];
				$data['password']=$_POST['pwd'];
				$data['money']=0;
				$connection->createCommand()->insert("users",$data)->execute();
				$session = new Session;
                $session->set('name', $_POST['name']);
				echo "<script>alert('恭喜您注册成功！！');location.href='./index.php?r=index/index'</script>";
			}else{
				echo "<script>alert('两次密码输入不一致');location.href='./index.php?r=register/index'</script>";
			}
		}
		}else{
			echo "<script>alert('验证码不正确，请输入正确的验证码');location.href='./index.php?r=register/index'</script>";
		}
    }

	public function actionLoginout()
    {
		$session = new Session;
        $session->remove('name');
        $session->remove('uid');
		echo "<script>alert('退出成功');location.href='./index.php?r=index/index'</script>";
    }

	public function actions(){
		$yzm="".substr(md5(time()),5,4);
		//$_SESSION['captcha']="".substr(md5(time()),5,4);
		//$this->yzm($yzm);
		setcookie("yzm",$yzm);
		//$yzm='1234'.$a;
		return [
				'captcha' => [
					'class' => 'yii\captcha\CaptchaAction',
					'fixedVerifyCode' => YII_ENV_TEST ? 'testme' :$yzm,
				],
		];
    }


}
