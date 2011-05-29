<?php
$this->breadcrumbs=array(
	'Costs',
);

$this->menu=array(
	array('label'=>'Create Costs', 'url'=>array('create')),
	array('label'=>'Manage Costs', 'url'=>array('admin')),
);
?>

<h1>Costs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
