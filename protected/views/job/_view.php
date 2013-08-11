<?php
/* @var $this JobController */
/* @var $data Job */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::encode($data->company_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_url')); ?>:</b>
	<?php echo CHtml::encode($data->company_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_logo')); ?>:</b>
	<?php echo CHtml::encode($data->company_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimum_qualification')); ?>:</b>
	<?php echo CHtml::encode($data->minimum_qualification); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('desirable_qualifications')); ?>:</b>
	<?php echo CHtml::encode($data->desirable_qualifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_currency')); ?>:</b>
	<?php echo CHtml::encode($data->salary_currency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_range_start')); ?>:</b>
	<?php echo CHtml::encode($data->salary_range_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_range_end')); ?>:</b>
	<?php echo CHtml::encode($data->salary_range_end); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perks_offered')); ?>:</b>
	<?php echo CHtml::encode($data->perks_offered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_updated')); ?>:</b>
	<?php echo CHtml::encode($data->date_updated); ?>
	<br />

	*/ ?>

</div>