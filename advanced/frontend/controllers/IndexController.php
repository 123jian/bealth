<?php
namespace frontend\controllers;
use app\models\Goods;
use app\models\Category;

class IndexController extends \yii\web\Controller
{
    //首页
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/layout.php';
        $model=new Goods();
        //$result=$model->find()->where(['goods_status'=>'1','cat_id'=>'8','order by'=>'goods_id','limit'=>3]);//返回所有数据
        $result=$model->find()->where(['goods_status'=>'1','cat_id'=>'8'])->all();
        $result2=$model->find()->where(['goods_status'=>'1','cat_id'=>'9'])->all();
        //echo '<pre>';
        //var_dump($result);
        return $this->render('index',['result'=>$result,'result2'=>$result2]);
    }
    //商品详情
    public function actionMall()
    {
        return $this->renderpartial('mall');
    }
    //支付页面
    public function actionPayment()
    {
		$this->layout='@app/views/layouts/layout.php';
    return $this->render('payment');
    }
    //支付完成
    public function actionPaymentok()
    {
    return $this->renderpartial('paymentok');
    }
    //商品列表
    public function actionProtype()
    {
		$this->layout='@app/views/layouts/layout.php';
    return $this->render('protype');
    }
    
    
    
    //订单地址
    public function actionShoppingmsg()
    {
		$this->layout='@app/views/layouts/layout.php';
    return $this->render('shoppingmsg');
    }
    //购物车
    public function actionShoppingcar()
    {
		$this->layout='@app/views/layouts/layout.php';
    return $this->render('shoppingcar');
    }

}
