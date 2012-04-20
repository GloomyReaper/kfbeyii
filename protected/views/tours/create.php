<?php
$this->breadcrumbs=array(
	'Tours'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>

<h1>Create Tours</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>