<?php
namespace backend\controllers;
use app\models\Goods;
use app\models\Category;

class GoodsController extends \yii\web\Controller
{
    //表单传值
    public $enableCsrfValidation = false;
    
    //商品列表
    public function actionGoodslist()
    {	
        $model=new Goods();
        $result=$model->find()->all();    //返回所有数据
        return $this->renderpartial('goodslist',['result'=>$result]);
    }
    //商品列表--删除
    public function actionDel()
    {	
        $id=$_GET['id'];
        $model=new Goods();
        $result=$model->findOne($id)->delete();//删除主键为 $id变量值的数据库；
        if($result){
            echo "<script>history.go(0);</script>";
        }else{
            echo "<script>alert('删除失败');history.go(0);</script>";
        }
    }
    //商品列表--编辑
    public function actionEdit()
    {	
        $id=$_GET['id'];
        $model=new Goods();
        $result=$model->findOne($id);//删除主键为 $id变量值的数据库；
        $Category=new Category();
        $arr=$Category->find()->all();    //返回所有数据
        return $this->renderpartial('goodsedit',['result'=>$result,'category'=>$arr]);       
    }
    //添加商品页面
    public function actionAddgoods()
    {	
        //echo $_SERVER['HTTP_HOST'];
        $model=new Category();
        $result=$model->find()->all();    //返回所有数据
        return $this->renderpartial('addgoods',['result'=>$result]);
    }
    //处理--添加商品
    public function actionAdds()
    {	
        //echo "<pre>";
        //var_dump($_POST);
        //var_dump($_FILES);//die;
        
        $model=new Goods();
  /**/  //$url=$_SERVER['HTTP_HOST'];
        define('FILE_UPLOAD_DIR',"uploads/");//文件上选路径,当前目录的uploads下 
        $url=FILE_UPLOAD_DIR.time().'.jpg';
        $img=move_uploaded_file($_FILES['goods_img']['tmp_name'],$url);
        
        //var_dump($url);die;
        if($img){
            //var_dump($_POST);die;
            $model->cat_id = $_POST['category'];
            $model->goods_name = $_POST['goods_name'];
            $model->goods_number = $_POST['goods_number'];
            $model->goods_price = $_POST['goods_price'];
            $model->goods_desc = $_POST['content1'];
            $model->goods_img = $url;
            $model->goods_status = $_POST['goods_status'];
            $model->goods_addtime = time();
            $result=$model->insert();
            //$sql=$result->getLastSql();
            //var_dump($result);die;
            if($result){
                //添加成功到列表页面 
                echo "<script>location.href='index.php?r=goods/goodslist';</script>";     
            }else{
              echo "<script>alert('添加失败');history.go(-1);</script>";
            }
        }else{
            echo "<script>alert('图片上传失败');history.go(-1);</script>";
        }      
        
    }
    
    public function actionArticlelist()
    {
		
        return $this->renderpartial('articlelist');
    }
	public function actionAddarticle()
    {
		
        return $this->renderpartial('addarticle');
    }

}
