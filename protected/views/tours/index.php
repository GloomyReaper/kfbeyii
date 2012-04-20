<?php
$this->breadcrumbs=array(
	'Tours',
);

$this->menu=array(
	array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>

<h1>Tours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
