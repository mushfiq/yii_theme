<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'costs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost_name'); ?>
		<?php echo $form->textField($model,'cost_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cost_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost_amount'); ?>
		<?php echo $form->textField($model,'cost_amount',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cost_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->