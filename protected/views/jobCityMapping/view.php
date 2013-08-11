<?php
/* @var $this JobCityMappingController */
/* @var $model JobCityMapping */

$this->breadcrumbs=array(
	'Job City Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobCityMapping', 'url'=>array('index')),
	array('label'=>'Create JobCityMapping', 'url'=>array('create')),
	array('label'=>'Update JobCityMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobCityMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCityMapping', 'url'=>array('admin')),
);
?>

<h1>View JobCityMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_id',
		'city_id',
	),
)); ?>
