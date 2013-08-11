<?php
/* @var $this JobCityController */
/* @var $model JobCity */

$this->breadcrumbs=array(
	'Job Cities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JobCity', 'url'=>array('index')),
	array('label'=>'Create JobCity', 'url'=>array('create')),
	array('label'=>'View JobCity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JobCity', 'url'=>array('admin')),
);
?>

<h1>Update JobCity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>