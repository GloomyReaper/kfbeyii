<h1>Тесты разработчика</h1>

<?php if(Yii::app()->user->hasFlash('developertest')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('developertest'); ?>
</div>

<?php else: ?>

<p style="color:red">Не запускайте эти тесты если не понимаете что делаете!
Виновные будут наказаны отлучением от системы. ВЕДЕТСЯ ЛОГ!
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'developer-test-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'testField01'); ?>
		<?php echo $form->textField($model,'testField01', array('size'=>60)); ?>
		<?php echo $form->error($model,'testField01'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'textArea01'); ?>
		<?php echo $form->textArea($model,'textArea01', array('rows'=>10, 'cols'=>80)); ?>
		<?php echo $form->error($model,'textArea01'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'requestType'); ?>
		<?php echo $form->dropDownList($model,'requestType',$model->getRequestTypes()); ?>
		<?php echo $form->error($model,'requestType'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'actionType'); ?>
		<?php echo $form->dropDownList($model,'actionType',$model->getTestActionTypes()); ?>
		<?php echo $form->error($model,'actionType'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>