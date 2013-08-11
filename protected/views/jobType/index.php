<?php
/* @var $this JobTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Types',
);

$this->menu=array(
	array('label'=>'Create JobType', 'url'=>array('create')),
	array('label'=>'Manage JobType', 'url'=>array('admin')),
);
?>

<h1>Job Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
