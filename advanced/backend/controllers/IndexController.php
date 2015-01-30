<?php
namespace backend\controllers;
use app\models\AdminUser;
use yii\web\Controller;
use yii\web\Session;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
		error_reporting(0);
		//$session = new Session;
		if($_COOKIE['name']){
			return $this->renderpartial('index');
		}else{
			echo "<script>alert('请登录');location.href='./index.php?r=index/login'</script>";
		}
        
    }
	public $enableCsrfValidation = false;
	public function actionLogin()
    {
		return $this->renderpartial('login');
			
    }
	public function actionLogin_pro(){


		//print_r($_POST);die;
		    $name=@$_POST['username'];
            $pwd=@$_POST['password'];
            $a=AdminUser::find()->where(['username' => $name,'password' => $pwd])->one();
            //print_R($a);die;
            if($a){
				if($_POST['DropExpiration']=="day"){
					setcookie("name",$name,time()+3600*24);
				}else
				if($_POST['DropExpiration']=="month"){
					setcookie("name",$name,time()+3600*24*30);
				}else
				if($_POST['DropExpiration']=="year"){
					setcookie("name",$name,time()+3600*24*365);
				}else if($_POST['DropExpiration']=="none"){
					setcookie("name",$name);
				}
				   echo "<script>alert('登陆成功');location.href='./index.php?r=index/index'</script>";
                    
            }else{
                return $this->renderpartial('login');
            }
	}


	public function actionLogout(){
		setcookie("name",$_COOKIE['name'],time()-1);
		echo "<script>alert('退出成功');location.href='./index.php?r=index/login'</script>";
	}
}
?>