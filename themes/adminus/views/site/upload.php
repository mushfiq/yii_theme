<?php
$this->pageTitle=Yii::app()->name . ' - Upload';
$this->breadcrumbs=array(
   'Upload',
);
?>
   
<?php $this->beginContent('/layouts/block', array('head' => 'Upload a picture')); ?>
   
    <?php 
    $form=$this->beginWidget('CActiveForm', array(
                                                   'id'=>'upload-form-upload-form',
                                                   'enableAjaxValidation'=>false,
                                                   'focus'=>array($model,'title'),
                                                   'htmlOptions'=>array('enctype'=>'multipart/form-data'),
                                                )); 
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <p>
        <?php echo $form->labelEx($model,'title'); ?><br />
        <?php echo $form->textField($model,'title', array('class'=>'text medium')); ?>
        <?php echo $form->error($model,'title'); ?>

   </p>
       
   <p>
           <?php echo $form->labelEx($model,'description'); ?><br />
            <?php echo $form->textArea($model,'description',array('class'=>'wysiwyg')); ?>
            <?php echo $form->error($model,'description'); ?>
    </p>
   
   <p class='fileupload'>
       <?php echo $form->labelEx($model, 'picture'); ?> <br />
        <?php echo $form->fileField($model, 'picture',array('id'=> 'fileupload','class'=>'file')); ?> 
      <span id="uploadmsg">Max size 3Mb</span>
   </p>

    <p>   
         <?php $sizes = array('small'=>'320x240', 'medium'=>'640x480', 'large'=>'1280x960'); ?>
         <?php echo $form->radioButtonList($model,'size', $sizes, array('separator'=>' ','class'=>'radio')); ?>
    </p>
    
   <p>
        <?php echo $form->checkBox($model,'access', array("class"=>"checkbox")); ?>
        <?php echo $form->label($model,'access'); ?>
        <?php echo $form->error($model,'access', array("class"=>"message errormsg")); ?>
    </p>

    <p>
        <?php echo CHtml::submitButton('Submit', array('class'=>'submit long')); ?>
    </p>

    <?php $this->endWidget(); ?>


<?php $this->endContent(); ?>
