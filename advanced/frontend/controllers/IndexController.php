<?php
namespace frontend\controllers;
use yii;
use app\models\Goods;
use app\models\Category;
use yii\caching\MemCache;

class IndexController extends \yii\web\Controller
{
    //首页
    public function actionIndex()
    {
        $this->layout='@app/views/layouts/layout.php';
        $model=new Goods();
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
  
        
        $result=$model->find()->where(['goods_status'=>'1','cat_id'=>'8'])->orderBy('goods_addtime','desc')->limit(2)->all();
        $result2=$model->find()->where(['goods_status'=>'1','cat_id'=>'9'])->orderBy('goods_addtime','desc')->limit(2)->all();
        $result3=$model->find()->where(['goods_status'=>'1','cat_id'=>'10'])->orderBy('goods_addtime','desc')->limit(3)->all();
        $result4=$model->find()->where(['goods_status'=>'0','cat_id'=>'5'])->orderBy('goods_addtime','desc')->limit(1)->all();
        //echo '<pre>';

		
		$time=date("Y-m-d",time());
		$connection = \Yii::$app->db;
		$command = $connection->createCommand("SELECT * FROM pv WHERE pv_time='".$time."'");
		$post = $command->queryOne();
		if($post){
			$data['pv_count']= ++$post['pv_count'];
			$connection->createCommand()->update('pv', ['pv_count' => $data['pv_count']], 'pid = '.$post['pid'])->execute();

		}else{
			$data['pv_time']=$time;
			$data['pv_count']=1;
			$connection->createCommand()->insert('pv',$data)->execute();
		}

		 
		



        return $this->render('index',['result'=>$result,'result2'=>$result2,'result3'=>$result3,'result4'=>$result4]);
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

		$connection = \Yii::$app->db;
		$command = $connection->createCommand("select * from region where parent_id=0");
		$posts = $command->queryAll();
		return $this->render('shoppingmsg',['data'=>$posts]);
    }
	public function actionRegion()
    {
		//$this->layout='@app/views/layouts/layout.php';

		$connection = \Yii::$app->db;
		$command = $connection->createCommand("select * from region where parent_id=".$_GET['id']);
		$posts = $command->queryAll();
		echo json_encode($posts);

    }
    //购物车
    public function actionShoppingcar()
    {
        //echo 123;die;
        $this->layout='@app/views/layouts/layout.php';
        $category=new Category();//导航栏
        $view = Yii::$app->view;
        $view->params['layoutData']=$category->find()->where(['cat_status'=>1])->all();
        return $this->render('shoppingcar');
    }

}
