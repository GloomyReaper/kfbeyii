<?php
$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'View Tours', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>

<h1>Update Tours <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>