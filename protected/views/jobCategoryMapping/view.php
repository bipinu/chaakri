<?php
/* @var $this JobCategoryMappingController */
/* @var $model JobCategoryMapping */

$this->breadcrumbs=array(
	'Job Category Mappings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JobCategoryMapping', 'url'=>array('index')),
	array('label'=>'Create JobCategoryMapping', 'url'=>array('create')),
	array('label'=>'Update JobCategoryMapping', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JobCategoryMapping', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JobCategoryMapping', 'url'=>array('admin')),
);
?>

<h1>View JobCategoryMapping #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'job_id',
		'category_id',
	),
)); ?>
