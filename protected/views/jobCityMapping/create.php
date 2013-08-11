<?php
/* @var $this JobCityMappingController */
/* @var $model JobCityMapping */

$this->breadcrumbs=array(
	'Job City Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobCityMapping', 'url'=>array('index')),
	array('label'=>'Manage JobCityMapping', 'url'=>array('admin')),
);
?>

<h1>Create JobCityMapping</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>