<?php
namespace frontend\controllers;
class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->renderpartial('index');
    }
    
    public function actionLogin()
    {
        return $this->renderpartial('login');
    }
    
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
    
    public function actionRegister()
    {
    return $this->renderpartial('register');
    }
    
    public function actionShopping()
    {
    return $this->renderpartial('shopping');
    }
    
    public function actionShoppingmsg()
    {
    return $this->renderpartial('shoppingmsg');
    }

}
