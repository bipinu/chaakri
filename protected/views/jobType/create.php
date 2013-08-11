<?php
/* @var $this JobTypeController */
/* @var $model JobType */

$this->breadcrumbs=array(
	'Job Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobType', 'url'=>array('index')),
	array('label'=>'Manage JobType', 'url'=>array('admin')),
);
?>

<h1>Create JobType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>