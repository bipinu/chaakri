<?php
/* @var $this JobCityController */
/* @var $model JobCity */

$this->breadcrumbs=array(
	'Job Cities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JobCity', 'url'=>array('index')),
	array('label'=>'Manage JobCity', 'url'=>array('admin')),
);
?>

<h1>Create JobCity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>