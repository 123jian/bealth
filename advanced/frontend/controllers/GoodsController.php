<?php

namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

use yii\filters\AccessControl;
use app\models\Goods;
use app\models\Classs;
use common\models\LoginForm;
use yii\data\Pagination;
use app\models\Category;
use app\models\Comment;
use yii\db\Query;
use yii\web\Session;
use app\models\Cart;

class GoodsController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		//导航
		$cat=new Category();
		$c=$cat->find()->where(['cat_status'=>1])->all();
		//print_r($c);die;
		//商品信息
		$gid=$_GET['gid'];
		$goo= new Goods();
		$data=$goo->find()->where(['goods_id'=>$gid])->one();
		//浏览记录
		$data1=$goo->find()->limit(2)->all();
		//print_R($data1);die;
		//热卖产品
		$datar=$goo->find()->limit(4)->all();
		//评论
		$com=new Comment();
		$pin=$com->find()->where(['goods_id'=>$gid])->all();
		//print_r($pin);die;
		return $this->renderPartial('mall',['cate'=>$c,'pin'=>$pin,'data1'=>$data1,'datar'=>$datar,'data'=>$data,]);
    }

    //购物车
    public function actionShopcar()
    {
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        
        $session = new Session;
        $uid=$session->get('uid');
        if(!$uid){
            echo 0;//未登录
            die;
        }
        $model=new Cart();      
	$model->uid = $uid;
        $model->goods_id = $_GET['gid'];
        $model->goods_number = $_GET['number'];
        $model->goods_price = $_GET['price'];
        $model->goods_name = $_GET['gname'];
        $model->goods_img = $_GET['img'];
        $model->status = 0;
        $model->addtime = time();
        $result=$model->insert();
        if($result){
            echo 1;//加入购物车成功
        }else{
            echo 2;//加入购物车失败
        }      
    }
    //购物车列表
    public function actionShopcarlist()
    {
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        
        $model=new Cart();
        $session = new Session;
        $uid=$session->get('uid');
        if(!$uid){
            ECHO "<SCRIPT>alert(请登录);</SCRIPT>";
            return false;
        }
        $result=$model->find()->where(['uid'=>$uid])->all();
        return $this->render('shopcarlist',['result'=>$result]);
    }
    

	//评论
	public function actionPinglun()
	{
		//print_r($_GET);die;
		$uname=@$_GET['uname'];
		$goods_id=@$_GET['goods_id'];
		$content=@$_GET['content'];
	
		$model=new Comment();

		$model->content="$content";
    	$model->uname="$uname";
    	$model->goods_id="$goods_id";
		$model->com_time=time();
    	$row=$model->save();
    	if($row)
    	{
    		exit(json_encode(1));
    	}else
    	{
    		exit(json_encode(0));
    	}/**/
	}

}