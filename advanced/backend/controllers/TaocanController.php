<?php

namespace backend\controllers;

use Yii;
use app\models\Classs;

use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Goods;
use app\models\Taocan;
use yii\db\Query;

class TaocanController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	public function actionIndex()
    {
		$tc=new Taocan();
		$data=$tc::find();
		//print_r($data);die;
		$pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => '2']);
		$model = $data->offset($pages->offset)->limit($pages->limit)->orderBy('id desc')->all();//'order by fina_id desc'
		//print_r($model);die;
		/*$goo=new Query();
		foreach($model as $v){
		$goods=$goo->select('goods_name')->from('goods')->where('goods_id ='.$v['goods_id'])->all();
		print_R($goods);
		}*/
		//$arr=['id'=>$data['id'],'goods_id'=>$model['goods_id'],'goods_name'=>$goods_name];
		return $this->renderPartial('taocanlist',['data'=>$model,'pages' => $pages]);

    }
	//添加页面
	public function actionAddtaocan()
    {
		$goo=new Query();
		$gdata=$goo->select('goods_id,goods_name')->from('goods')->all();
		//print_r($gdata);
		return $this->renderPartial('addtaocan',['gdata' => $gdata]);
    }
	//执行添加
	public function actionAddtaocan_pro()
    {
		//print_r($_POST);
		$goods_id=implode(",",$_POST['taocan_id']);
		//echo $goods_id;
		$goo=new Query();
		$price=$goo->select('goods_price')->from('goods')->where('goods_id in '.'('.$goods_id.')')->all();
		$yprice=0;
		for($i=0;$i<count($price);$i++){
			$yprice=$yprice+$price[$i]['goods_price'];
		}
		$xprice=$yprice*$_POST['zhe'];
		//echo $xprice;die;
		//print_r($price);
		$gid=$_POST['goods_id'];
		$zhe=$_POST['zhe'];

		$tc=new Taocan();
		//var_dump($tc);die;
		$tc->goods_id="$gid";
		$tc->taocan_id="$goods_id";
		$tc->yprice="$yprice";
		$tc->xprice="$xprice";
		$tc->zhe="$zhe";
		$add=$tc->save();
		if($add){
			$this->redirect('index.php?r=taocan/index');
		}else{
			echo "<script>alert('添加失败');location.href='./index.php?r=taocan/addtaocan'</script>";
		}
		//var_dump($tc->Attributes);
		//return $this->renderPartial('addtaocan',['gdata' => $gdata]);
    }
	//套餐详情页
	public function actionXxlist(){
		//print_r($_GET);
		$goods_id=$_GET['tid'];
		$goo=new Query();
		$data=$goo->select('goods_id,goods_name,goods_price,goods_img')->from('goods')->where('goods_id in '.'('.$goods_id.')')->all();
		//print_r($data);
		return $this->renderPartial('xxlist',['data' => $data]);
	}
	//编辑页面
	public function actionUp(){
		//print_r($_GET);
		$goo=new Query();
		$gdata=$goo->select('goods_id,goods_name')->from('goods')->all();
		//print_r($gdata);
		//return $this->renderPartial('addtaocan',['gdata' => $gdata]);
		return $this->renderPartial('uptaocan',['gdata' => $gdata,'arr'=>$_GET]);
	}
	//修改
	public function actionUppro(){
		print_r($_POST);

		$goods_id=implode(",",$_POST['taocan_id']);
		//echo $goods_id;
		$goo=new Query();
		$price=$goo->select('goods_price')->from('goods')->where('goods_id in '.'('.$goods_id.')')->all();
		$yprice=0;
		for($i=0;$i<count($price);$i++){
			$yprice=$yprice+$price[$i]['goods_price'];
		}
		$xprice=$yprice*$_POST['zhe'];
		//echo $xprice;die;
		//print_r($price);
		$gid=$_POST['goods_id'];
		$zhe=$_POST['zhe'];

		$model=new Taocan();
		$update=$model->updateall(['goods_id'=>$gid,'taocan_id'=>$goods_id,'yprice'=>$yprice,'xprice'=>$xprice,'zhe'=>$zhe],["goods_id"=>$gid]);
		if($update){
			$this->redirect('index.php?r=taocan/index');
		}else{
			echo "<script>alert('添加失败');</script>";
		}
	}

	
}