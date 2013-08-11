<?php
/* @var $this JobController */
/* @var $model Job */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_url'); ?>
		<?php echo $form->textField($model,'company_url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_logo'); ?>
		<?php echo $form->textField($model,'company_logo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'company_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimum_qualification'); ?>
		<?php echo $form->textArea($model,'minimum_qualification',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'minimum_qualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desirable_qualifications'); ?>
		<?php echo $form->textArea($model,'desirable_qualifications',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desirable_qualifications'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_currency'); ?>
		<?php echo $form->textField($model,'salary_currency',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'salary_currency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_range_start'); ?>
		<?php echo $form->textField($model,'salary_range_start'); ?>
		<?php echo $form->error($model,'salary_range_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_range_end'); ?>
		<?php echo $form->textField($model,'salary_range_end'); ?>
		<?php echo $form->error($model,'salary_range_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perks_offered'); ?>
		<?php echo $form->textArea($model,'perks_offered',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perks_offered'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_updated'); ?>
		<?php echo $form->textField($model,'date_updated'); ?>
		<?php echo $form->error($model,'date_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->