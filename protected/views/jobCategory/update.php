<?php
/* @var $this JobCategoryController */
/* @var $model JobCategory */

$this->breadcrumbs=array(
	'Job Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobCategory', 'url'=>array('index')),
	array('label'=>'Create JobCategory', 'url'=>array('create')),
	array('label'=>'View JobCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobCategory', 'url'=>array('admin')),
);
?>

<h1>Update JobCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>