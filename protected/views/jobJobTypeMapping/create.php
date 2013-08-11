<?php
/* @var $this JobJobTypeMappingController */
/* @var $model JobJobTypeMapping */

$this->breadcrumbs=array(
	'Job Job Type Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobJobTypeMapping', 'url'=>array('index')),
	array('label'=>'Manage JobJobTypeMapping', 'url'=>array('admin')),
);
?>

<h1>Create JobJobTypeMapping</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>