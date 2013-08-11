<?php
/* @var $this JobJobTypeMappingController */
/* @var $model JobJobTypeMapping */

$this->breadcrumbs=array(
	'Job Job Type Mappings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobJobTypeMapping', 'url'=>array('index')),
	array('label'=>'Create JobJobTypeMapping', 'url'=>array('create')),
	array('label'=>'View JobJobTypeMapping', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobJobTypeMapping', 'url'=>array('admin')),
);
?>

<h1>Update JobJobTypeMapping <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>