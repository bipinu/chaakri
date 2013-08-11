<?php
/* @var $this JobJobTypeMappingController */
/* @var $data JobJobTypeMapping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->job_type_id); ?>
	<br />


</div>