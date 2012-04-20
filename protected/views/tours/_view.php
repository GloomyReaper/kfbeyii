<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season')); ?>:</b>
	<?php echo CHtml::encode($data->season); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::encode($data->num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trnmt')); ?>:</b>
	<?php echo CHtml::encode($data->trnmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trnmt_ssn')); ?>:</b>
	<?php echo CHtml::encode($data->trnmt_ssn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip')); ?>:</b>
	<?php echo CHtml::encode($data->descrip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>