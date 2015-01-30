<?php
namespace backend\controllers;
use app\models\AdminUser;
use yii\web\Controller;
use yii\web\Session;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$session = new Session;
		if($session->get('name')){
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
		$name=@$_POST['username'];
            $pwd=@$_POST['password'];
            $a=AdminUser::find()->where(['username' => $name,'password' => $pwd])->one();
            //print_R($a);die;
            if($a){
				   $session = new Session;
				   
				   $session->set('name', $_POST['username']);
				   echo "<script>alert('登陆成功');location.href='./index.php?r=index/index'</script>";
                    
            }else{
                return $this->renderpartial('login');
            }
	}


	public function actionLogout(){
		$session = new Session;
        $session->remove('name');
		echo "<script>alert('退出成功');location.href='./index.php?r=index/login'</script>";
	}
}
?>