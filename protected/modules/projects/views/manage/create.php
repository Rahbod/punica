<?php
/* @var $this ProjectsManageController */
/* @var $model Projects */

$this->breadcrumbs=array(
	'مدیریت پروژ ها'=>array('admin'),
	'افزودن',
);

$this->menu=array(
	array('label'=>'مدیریت پروژه ها', 'url'=>array('admin')),
);
?>

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">افزودن پروژه</h3>
	</div>
	<div class="box-body">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>
