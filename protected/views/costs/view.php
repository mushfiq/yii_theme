<?php
$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Create Costs', 'url'=>array('create')),
	array('label'=>'Update Costs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Costs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>View Costs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'cost_name',
		'cost_amount',
	),
)); ?>
