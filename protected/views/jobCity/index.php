<?php
/* @var $this JobCityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Cities',
);

$this->menu=array(
	array('label'=>'Create JobCity', 'url'=>array('create')),
	array('label'=>'Manage JobCity', 'url'=>array('admin')),
);
?>

<h1>Job Cities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
