<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Job Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobType', 'url'=>array('index')),
	array('label'=>'Create JobType', 'url'=>array('create')),
	array('label'=>'View JobType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobType', 'url'=>array('admin')),
);
?>

<h1>Update JobType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>