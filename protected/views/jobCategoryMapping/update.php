<?php
/* @var $this JobCategoryMappingController */
/* @var $model JobCategoryMapping */

$this->breadcrumbs=array(
	'Job Category Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobCategoryMapping', 'url'=>array('index')),
	array('label'=>'Create JobCategoryMapping', 'url'=>array('create')),
	array('label'=>'View JobCategoryMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobCategoryMapping', 'url'=>array('admin')),
);
?>

<h1>Update JobCategoryMapping <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>