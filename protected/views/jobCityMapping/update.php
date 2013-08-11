<?php
/* @var $this JobCityMappingController */
/* @var $model JobCityMapping */

$this->breadcrumbs=array(
	'Job City Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobCityMapping', 'url'=>array('index')),
	array('label'=>'Create JobCityMapping', 'url'=>array('create')),
	array('label'=>'View JobCityMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobCityMapping', 'url'=>array('admin')),
);
?>

<h1>Update JobCityMapping <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>