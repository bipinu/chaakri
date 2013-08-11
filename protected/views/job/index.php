<?php
/* @var $this JobController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jobs',
);

$this->menu=array(
	array('label'=>'Create Job', 'url'=>array('create')),
	array('label'=>'Manage Job', 'url'=>array('admin')),
);
?>

<h1>Jobs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
