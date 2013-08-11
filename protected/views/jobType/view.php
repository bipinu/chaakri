<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Job Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobType', 'url'=>array('index')),
	array('label'=>'Create JobType', 'url'=>array('create')),
	array('label'=>'Update JobType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobType', 'url'=>array('admin')),
);
?>

<h1>View JobType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'active',
	),
)); ?>
