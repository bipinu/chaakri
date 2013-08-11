<?php
/* @var $this JobCityMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job City Mappings',
);

$this->menu=array(
	array('label'=>'Create JobCityMapping', 'url'=>array('create')),
	array('label'=>'Manage JobCityMapping', 'url'=>array('admin')),
);
?>

<h1>Job City Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
