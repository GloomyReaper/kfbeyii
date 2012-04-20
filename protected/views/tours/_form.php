<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tours-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->textField($model,'season'); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num'); ?>
		<?php echo $form->textField($model,'num'); ?>
		<?php echo $form->error($model,'num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trnmt'); ?>
		<?php echo $form->textField($model,'trnmt'); ?>
		<?php echo $form->error($model,'trnmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trnmt_ssn'); ?>
		<?php echo $form->textField($model,'trnmt_ssn'); ?>
		<?php echo $form->error($model,'trnmt_ssn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip'); ?>
		<?php echo $form->textField($model,'descrip',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descrip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->