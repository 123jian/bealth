<?php

namespace frontend\controllers;

use Yii;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

use yii\caching\MemCache;


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
use app\models\Address;

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
        $model->cart_number = $_GET['number'];
        $model->goods_price = $_GET['price'];
        $model->goods_name = $_GET['gname'];
        $model->status = 0;
        $model->addtime = time();
        
        $result=$model->insert();
        //echo 1;die;
        if($result){
            echo 1;//加入购物车成功
        }else{
            echo 2;//加入购物车失败
        }      
    }
    //购物车列表
    public function actionShopcarlist()
    {
        
        $session = new Session;
        $uid=$session->get('uid');
        //echo $uid;die;
        if(empty($uid)){
            echo "<script>location.href='index.php?r=login';</script>";die;
        }
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        //两表联查购物车
        $Query=new Query();
        $result=$Query->from(['goods','cart'])->where("goods.goods_id=cart.goods_id and cart.uid='$uid'")->all();
        $sum=0;
        foreach($result as $val){
            $sum+=$val['goods_price']*$val['cart_number'];
        }
        $arr['count']=count($result);
        $arr['sum']=$sum;
        //两表联查其他用户购买的商品
        $data=$Query->from(['goods','cart'])->where(!['cart.uid'=>$uid])->orderBy('cart.addtime','desc')->limit(2)->all();
        // var_dump($data);die;
        //查询商品表最新商品
        $Goods=new Goods();
        $array=$Goods->find()->orderBy('goods_addtime','desc')->limit(5)->all();
        //var_dump($array);die;       
        
       return $this->render('shopcarlist',['result'=>$result,'arr'=>$arr,'data'=>$data,'array'=>$array]);
    }
    //删除购物车
    public function actionDelcar()
    {
        $gid=$_GET['gid'];
        $model=new Cart();
        $session = new Session;
        $uid=$session->get('uid');
        $result=$model->deleteAll(['goods_id'=>$gid,'uid'=>$uid]);
        if($result){
            echo 1;//删除成功
        }else{
            echo 0;//删除失败
        }
    }
    //提交订单
    public function actionDizhi()
    {
        $ids=$_GET['ids'];
        $gid=explode(',',$ids);
        $model=new Cart();
        $session = new Session;
        $uid=$session->get('uid');
        $arr=['status'=>1];
        $result=$model->updateall($arr,['goods_id'=>$gid,'uid'=>$uid]);
        if($result){
            echo 1;//提交订单成功
        }else{
            echo 0;//提交订单失败
        }
    }
    //订单地址
    public function actionShoppingmsg()
    {
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("select * from region where parent_id=0");
        $posts = $command->queryAll();
        //两表联查购物车表和商品表
        $Query=new Query();
        $session = new Session;
        $uid=$session->get('uid');
        
        $result=$Query->from(['goods','cart'])->where("goods.goods_id=cart.goods_id and cart.status=1 and cart.uid='$uid'")->orderBy('cart.addtime','desc')->all();
        //var_dump($result);die;
        //查询地址表
        $model=new Address();
        $array=$model->find()->where(['uid'=>$uid])->orderBy('aid','desc')->all();
       
        return $this->render('shoppingmsg',['data'=>$posts,'result'=>$result,'array'=>$array]);
    }
    public function actionRegion()
    {
        $connection = \Yii::$app->db;
        $command = $connection->createCommand("select * from region where parent_id=".$_GET['id']);
        $posts = $command->queryAll();
        echo json_encode($posts);

	$this->layout='@app/views/layouts/layout.php';
        return $this->render('shoppingmsg');
    }
    //保存收货地址
    public function actionAddress()
    {
        $session = new Session;
        $uid=$session->get('uid');
        
        $model=new Address();      
	$model->uid = $uid;
        $model->name = $_GET['shouhuoren'];
        $model->country = $_GET['country'];
        $model->province = $_GET['province'];
        $model->city = $_GET['city'];
        $model->county = $_GET['county'];
        $model->address = $_GET['address'];
        $model->mobiles = $_GET['mobile'];
        $model->phones = $_GET['phone'];
        $model->email = $_GET['email'];
        
        $result=$model->insert();
        if($result){
            echo 1;//保存收货地址成功
        }else{
            echo 0;//保存收货地址失败
        }      
    }
    //支付页面
    public function actionPayment()
    {
        //error_reporting(0);
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        
        //两表联查其他用户购买的商品
        $model=new Cart();
        $session = new Session;
        $uid=$session->get('uid');
        $Query=new Query();
        $data=$Query->from(['goods','cart'])->where(!['cart.uid'=>$uid])->orderBy('cart.addtime','desc')->limit(2)->all();
        // var_dump($data);die;
        //查询商品表最新商品
        $Goods=new Goods();
        $array=$Goods->find()->orderBy('goods_addtime','desc')->limit(5)->all();
        //查询地址表
        $Address=new Address();
        $arr=$Address->find()->where(['uid'=>$uid])->orderBy('aid','desc')->all();
        
        
        
        
        return $this->render('payment',['data'=>$data,'array'=>$array,'arr'=>$arr]);
    }
    
    //支付完成
    public function actionPaymentok()
    {
        return $this->renderpartial('paymentok');
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