<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
   'Contact',
);
?>
<?php $this->beginContent('/layouts/block', array('head' => 'Contact Us')); ?>
         
         <?php if(Yii::app()->user->hasFlash('contact')): ?>

         <div class="message success" style="display: block;">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
         </div>
         
         <?php else: ?>
         
         <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
         </p>
         
         <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'errorMessageCssClass'=>'note error',                                                         
            'enableClientValidation'=>true,
            'clientOptions'=>array(
               'validateOnSubmit'=>true,
            ),
         )); ?>
         
         <p class="note">Fields with <span class="required">*</span> are required.</p>
         
         <?php 
            echo $form->errorSummary(
                                       $model, 
                                       "Please check the following error that have occured", 
                                       null,
                                       array(
                                                'class'=>"message errormsg",
                                                'style'=>"display: block;",                                                                                       
                                             )                                       
                                    );
         ?>
         
         
         <p>
            <?php echo $form->labelEx($model,'name'); ?><br />
            <?php echo $form->textField($model,'name', array("class" => "text small")); ?>
            <?php echo $form->error($model,'name'); ?>
         </p>
         <p>
            <?php echo $form->labelEx($model,'email'); ?><br />
            <?php echo $form->textField($model,'email',array("class" => "text small")); ?>
            <?php echo $form->error($model,'email'); ?>
         </p>
         
         <p>
            <?php echo $form->labelEx($model,'subject'); ?><br />
            <?php echo $form->textField($model,'subject',array('class'=>'text medium','size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'subject'); ?>
         </p>
         <p>
            <?php echo $form->labelEx($model,'body'); ?><br />
            <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'body'); ?>
         </p>
         <p>
            <?php if(CCaptcha::checkRequirements()): ?>
               <div class="row">
                  <?php echo $form->labelEx($model,'verifyCode'); ?>
                  <div>
                  <?php $this->widget('CCaptcha'); ?>
                  <?php echo $form->textField($model,'verifyCode', array("class" => "text small")); ?>
                  </div>
                  <div class="note">Please enter the letters as they are shown in the image above.
                  <br/>Letters are not case-sensitive.</div>
                  <?php echo $form->error($model,'verifyCode'); ?>
               </div>
              <?php endif; ?>
         </p>
         <hr />
         <p>
            <?php echo CHtml::submitButton('Submit', array("class"=>"submit long")); ?>
         </p>
         
         <?php $this->endWidget(); ?>
         
         <?php endif; ?>
         
         
<?php $this->endContent(); ?>

<!----------------------->


   
