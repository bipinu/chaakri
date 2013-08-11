<?php
/* @var $this JobCategoryController */
/* @var $model JobCategory */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobCategory', 'url'=>array('index')),
	array('label'=>'Manage JobCategory', 'url'=>array('admin')),
);
?>

<h1>Create JobCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>