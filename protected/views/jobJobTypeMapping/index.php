<?php
/* @var $this JobJobTypeMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Job Type Mappings',
);

$this->menu=array(
	array('label'=>'Create JobJobTypeMapping', 'url'=>array('create')),
	array('label'=>'Manage JobJobTypeMapping', 'url'=>array('admin')),
);
?>

<h1>Job Job Type Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
