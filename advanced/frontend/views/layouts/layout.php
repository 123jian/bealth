
<?php 
use yii\widgets\AreaDecorator;
AreaDecorator::begin(['viewFile'=>'@app/views/layouts/layout2.php'])?>

  <?php 
 header("content-type:text/html;charset=utf-8");
 
  use yii\widgets\Block;

  Block::begin(['id' =>'content']);?>
    <div class="main_column">
      <?= $content ?>
    </div>
  <?php Block::end();?>

  <?php Block::begin(['id' =>'footer']);?>
                <!-- 底部区域 -->
            <div class="footerWrapper">
                <div class="footer">
                	<p><a class="returnHome" href="index.php?r=index">
                    	<span class="btn_l"></span>
                    	<span class="btn_c">回首页 HOME</span>
                    	<span class="btn_r"></span>
                    </a>
                    </p>
                    <p class="call">400-625-2655</p>
                    <p>锡盟鑫泰生物制品有限责任公司 版权所有</p>
                    <p>锡盟鑫泰生物是亚洲最大最专业骨髓肽生产商，颐宁多肽是国内首例多肽保健品！</p>
                    <p>www.xmxtsw.com</p>
                </div>
            </div>
            <!-- 底部区域END -->
  <?php Block::end();?>

  <?php Block::begin(['id' =>'right']);?>
            <!--跟随窗口浮动区域-->
            <div class="fixedWrap" id="fixedWrap">
                <a href="#" onclick="history.go(0);">
                	<div class="imgWrap">
                    	<img src="images/fix_icon_1.png" width="21" height="27" />
                    </div>
                	<p>返回顶部</p>
                </a>
                <a href="index.php?r=index/shoppingcar">
                	<div class="imgWrap">
                    	<img class="mt5" src="images/fix_icon_2.png" width="27" height="22" />
                    </div>
                	<p>购物车</p>
                </a>
                <a href="index.php?r=index/shoppingcar">
                	<div class="imgWrap">
                    	<img class="mt5" src="images/fix_icon_3.png" width="24" height="19" />
                    </div>
                	<p>收藏夹</p>
                </a>
                <a href="javascript:void(0);">
                	<div class="imgWrap">
                    	<img src="images/fix_icon_4.png" width="28" height="26" />
                    </div>
                	<p>联系客服</p>
                </a>
            </div>
            <!--跟随窗口浮动区域-->
        </div>
    </div>
    <!-- 内容区域END -->
</div>
<script type="text/javascript" src="scripts/common.js"></script>
<script type="text/javascript">
	$(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop"});
</script>
</body>
</html>
  <?php Block::end();?>


<?php AreaDecorator::end();?>