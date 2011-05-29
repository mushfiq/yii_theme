<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
   'Error',
);
?>


<div class="block">
      <div class="block_head">
         <div class="bheadl"></div>
         <div class="bheadr"></div>
         
         <h2>Error <?php echo $code; ?></h2>
      </div>
      
      <div class="block_content">
         <div class="message errormsg" id="allShowError" style="display: block;">
            <?php echo CHtml::encode($message); ?>
         </div>
      </div>
      
      <div class="bendl"></div>
      <div class="bendr"></div>
</div>