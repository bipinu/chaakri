<?php
/* @var $this JobCategoryMappingController */
/* @var $model JobCategoryMapping */

$this->breadcrumbs=array(
	'Job Category Mappings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobCategoryMapping', 'url'=>array('index')),
	array('label'=>'Manage JobCategoryMapping', 'url'=>array('admin')),
);
?>

<h1>Create JobCategoryMapping</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>