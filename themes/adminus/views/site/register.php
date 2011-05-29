<?php
$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
   'Register',
);
?>

<?php $this->beginContent('/layouts/blockWithTabs', array('head' => 'Terms and Conditions', 'menu'=>array("tab1" => "Page 1", "tab2" => "Page 2", "tab3" => "Page 3"))); ?>

<div id="tab1" class="block_content tab_content" style="display: block;">

   <h3>Terms</h3>
   <p>Lorem ipsum ..........terms..........</p>
   
</div>

<div id="tab2" class="block_content tab_content" style="display: none;">

   <h3>Conditions</h3>
   <p>Lorem ipsum ...........conditions.........</p>

</div>

<div id="tab3" class="block_content tab_content" style="display: none;">

   <h3>Penalties</h3>
   <p>Lorem ipsum ..........penalties..........</p>

</div>

<?php $this->endContent() ?>


<?php $this->beginContent('/layouts/block', array('head' => 'Register', 'size'=>'small', 'align'=>'left')); ?>

      <?php $form=$this->beginWidget('CActiveForm', array(
      	'id'=>'registration-form-register-form',
         'errorMessageCssClass'=>'note error',                                                         
         'enableClientValidation'=>true,
         'clientOptions'=>array(
            'validateOnSubmit'=>true,
         ),
      )); ?>

   	<p class="note">Fields with <span class="required">*</span> are required.</p>
      
      <p>
   		<?php echo $form->labelEx($model,'name'); ?><br />
   		<?php echo $form->textField($model,'name', array("class" => "text")); ?>
   		<?php echo $form->error($model,'name'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'dob'); ?><br />
   		<?php echo $form->textField($model,'dob', array("class" => "text date_picker")); ?>
         
   		<?php echo $form->error($model,'dob'); ?>
   	</p>
      
   	<p>
   		<?php echo $form->labelEx($model,'gender'); ?><br />
   		<?php echo $form->dropDownList($model,'gender', array("male"=>"Male", "female"=>"Female"), array("class"=>"styled")); ?>
   		<?php echo $form->error($model,'gender'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'username'); ?><br />
   		<?php echo $form->textField($model,'username', array("class" => "text small")); ?>
   		<?php echo $form->error($model,'username'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'password'); ?><br />
   		<?php echo $form->textField($model,'password', array("class" => "text small")); ?>
   		<?php echo $form->error($model,'password'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'passwordConfirm'); ?><br />
   		<?php echo $form->textField($model,'passwordConfirm', array("class" => "text small")); ?>
   		<?php echo $form->error($model,'passwordConfirm'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'email'); ?><br />
   		<?php echo $form->textField($model,'email', array("class" => "text")); ?>
   		<?php echo $form->error($model,'email'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'country'); ?><br />
   		<?php echo $form->dropDownList($model,'country', array("usa"=>"United States of America", "bangladesh"=>"Bangladesh", "india"=>"India"), array("class"=>"styled")); ?>
   		<?php echo $form->error($model,'country'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'zip'); ?><br />
   		<?php echo $form->textField($model,'zip', array("class" => "text")); ?>
   		<?php echo $form->error($model,'zip'); ?>
   	</p>

   	<p>
   		<?php echo $form->labelEx($model,'phone'); ?><br />
   		<?php echo $form->textField($model,'phone', array("class" => "text")); ?>
   		<?php echo $form->error($model,'phone'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'mobile'); ?><br />
   		<?php echo $form->textField($model,'mobile', array("class" => "text")); ?>
   		<?php echo $form->error($model,'mobile'); ?>
   	</p>
   
   	<p>
   		<?php echo $form->labelEx($model,'address'); ?><br />
   		<?php echo $form->textArea($model,'address'); ?>
   		<?php echo $form->error($model,'address'); ?>
   	</p>
   
      <hr />
   	<p style="text-align: right;">
   		<?php echo CHtml::submitButton('Submit', array("class"=>"submit mid")); ?>
   	</p>
   
   <?php $this->endWidget(); ?>
   
   
   
   
<?php $this->endContent(); ?>



<?php $this->beginContent('/layouts/block', array('head' => 'Assistance', 'size'=>'small', 'align'=>'right', 'id'=>'assistanceBlock')); ?>

   <h2>Click on the fields of the form to view guide tips about the field. Errors are viewed on form submission.</h2><br />
   <div class="message info" id="formAssistance">
      
   </div>
	<p><?php echo $form->errorSummary($model, "The following errors have occured:", null, array("class"=>"message errormsg", "style"=>"display: block;")); ?></p>
   
   
<?php $this->endContent(); ?>