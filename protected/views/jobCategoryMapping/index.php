<?php
/* @var $this JobCategoryMappingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Job Category Mappings',
);

$this->menu=array(
	array('label'=>'Create JobCategoryMapping', 'url'=>array('create')),
	array('label'=>'Manage JobCategoryMapping', 'url'=>array('admin')),
);
?>

<h1>Job Category Mappings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
