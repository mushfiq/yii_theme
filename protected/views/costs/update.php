<?php
$this->breadcrumbs=array(
	'Costs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Costs', 'url'=>array('index')),
	array('label'=>'Create Costs', 'url'=>array('create')),
	array('label'=>'View Costs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Update Costs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>