<?php
namespace frontend\controllers;
class IndexController extends \yii\web\Controller
{
    //首页
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/header.php';
        return $this->renderpartial('index');
    }
    //商品详情
    public function actionMall()
    {
        return $this->renderpartial('mall');
    }
    
    public function actionPayment()
    {
    return $this->renderpartial('payment');
    }
    
    public function actionPaymentok()
    {
    return $this->renderpartial('paymentok');
    }
    
    public function actionProtype()
    {
    return $this->renderpartial('protype');
    }
    
    
    
    public function actionShopping()
    {
    return $this->renderpartial('shopping');
    }
    
    public function actionShoppingmsg()
    {
    return $this->renderpartial('shoppingmsg');
    }
    //购物车
    public function actionShoppingcar()
    {
    return $this->renderpartial('shoppingcar');
    }

}
