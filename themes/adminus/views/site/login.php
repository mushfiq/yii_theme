<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
   'Login',
);
?>


<div class="block small center login" style="margin-top: 0;">

   <div class="block_head">
      <div class="bheadl"></div>
      <div class="bheadr"></div>
      
      <h2>Login</h2>
   </div>      <!-- .block_head ends -->

   <div class="block_content">
      <div class="message info"><p>Please fill out the following form with your login credentials</p></div>
      <?php $form=$this->beginWidget('CActiveForm', array(
         'id'=>'login-form',
         'enableClientValidation'=>true,
         'clientOptions'=>array(
            'validateOnSubmit'=>true,
         ),
      )); ?>
      
         <p class="note">Fields with <span class="required">*</span> are required.</p>
      
         <p>
            <?php echo $form->labelEx($model,'username'); ?><br />
            <?php echo $form->textField($model,'username',  array("class"=>"text")); ?>
            <?php echo $form->error($model,'username', array("class"=>"message errormsg")); ?>
         </p>
      
         <p>
            <?php echo $form->labelEx($model,'password'); ?><br />
            <?php echo $form->passwordField($model,'password',  array("class"=>"text")); ?>
            <?php echo $form->error($model,'password', array("class"=>"message errormsg")); ?>
            <p class="hint">
               Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.
            </p>
         </p>
      
         <p>
            <?php echo $form->checkBox($model,'rememberMe', array("class"=>"checkbox")); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe', array("class"=>"message errormsg")); ?>
         <p>
      
         <p>
            <?php echo CHtml::submitButton('Login', array("class"=>"submit")); ?>
         </p>
      
      <?php $this->endWidget(); ?>

   </div>      <!-- .block_content ends -->
                  
   <div class="bendl"></div>
   <div class="bendr"></div>
               
</div>      <!-- .login ends -->