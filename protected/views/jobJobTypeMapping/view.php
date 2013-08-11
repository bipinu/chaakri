<?php
/* @var $this JobJobTypeMappingController */
/* @var $model JobJobTypeMapping */

$this->breadcrumbs=array(
	'Job Job Type Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobJobTypeMapping', 'url'=>array('index')),
	array('label'=>'Create JobJobTypeMapping', 'url'=>array('create')),
	array('label'=>'Update JobJobTypeMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobJobTypeMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobJobTypeMapping', 'url'=>array('admin')),
);
?>

<h1>View JobJobTypeMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_id',
		'job_type_id',
	),
)); ?>
