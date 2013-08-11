<?php
/* @var $this JobCityController */
/* @var $model JobCity */

$this->breadcrumbs=array(
	'Job Cities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobCity', 'url'=>array('index')),
	array('label'=>'Create JobCity', 'url'=>array('create')),
	array('label'=>'Update JobCity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobCity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCity', 'url'=>array('admin')),
);
?>

<h1>View JobCity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'city',
		'active',
	),
)); ?>
