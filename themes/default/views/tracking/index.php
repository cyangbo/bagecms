<?php $this->renderPartial('/_include/header')?>

<div class="mainWrap">
<div class="topDesc">
  <div class="desc">
    <p style=" margin-top:40px;">致力于提升客户品牌形象、实现客户商业目标!</p>
    <p>Commitment to enhance customer brand image,customer business goals!</p>
  </div>
</div>
<div class="global clear">
  <?php $this->renderPartial('/_include/sidebar_left')?>
  <div class="mainBox question">
    <div class="loc clear">
      <div class="position"> <span>您的位置：</span> <a href="<?php echo Yii::app()->homeUrl?>">首页</a> <em></em> <span>物流跟踪</span> </div>
    </div>
    <div class=" clear">
      <div>
        <li><a href="<?php echo Yii::app()->homeUrl?>">继续查询</a></li>
      </div>
      <br>
      <div>
        <text>您现在查询的单号为:<?php echo $transNo ?></text>
      </div>
      
      <div>
              <?php 
              /* for($i=0;i<$count;$i++){
                  echo "<p>";
                  echo $result[$i];
              } */
               foreach($result as $reslut){
                    
                    print($reslut);
                    echo "<br>";
                   
                } 
        ?>
      </div>

        
    </div>
    <div class="pagebar ">
      <?php $this->widget('CLinkPager',array('pages'=>$pages));?>
    </div>
  </div>
</div>


<?php $this->renderPartial('/_include/footer')?>