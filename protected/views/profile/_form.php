<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'highest_qualification'); ?>
		<?php echo $form->textField($model,'highest_qualification',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'highest_qualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_employer'); ?>
		<?php echo $form->textField($model,'current_employer',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'current_employer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal_site'); ?>
		<?php echo $form->textField($model,'personal_site',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'personal_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linkedin_profile_url'); ?>
		<?php echo $form->textField($model,'linkedin_profile_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'linkedin_profile_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploaded_cv_name'); ?>
		<?php echo $form->textField($model,'uploaded_cv_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'uploaded_cv_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_update'); ?>
		<?php echo $form->textField($model,'date_update'); ?>
		<?php echo $form->error($model,'date_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->