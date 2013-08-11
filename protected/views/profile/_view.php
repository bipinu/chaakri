<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('highest_qualification')); ?>:</b>
	<?php echo CHtml::encode($data->highest_qualification); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('current_employer')); ?>:</b>
	<?php echo CHtml::encode($data->current_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal_site')); ?>:</b>
	<?php echo CHtml::encode($data->personal_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linkedin_profile_url')); ?>:</b>
	<?php echo CHtml::encode($data->linkedin_profile_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaded_cv_name')); ?>:</b>
	<?php echo CHtml::encode($data->uploaded_cv_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_update')); ?>:</b>
	<?php echo CHtml::encode($data->date_update); ?>
	<br />

	*/ ?>

</div>