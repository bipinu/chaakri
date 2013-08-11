<?php
/* @var $this JobCategoryController */
/* @var $model JobCategory */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobCategory', 'url'=>array('index')),
	array('label'=>'Create JobCategory', 'url'=>array('create')),
	array('label'=>'Update JobCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCategory', 'url'=>array('admin')),
);
?>

<h1>View JobCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category',
		'active',
	),
)); ?>
