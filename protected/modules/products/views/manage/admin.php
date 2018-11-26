<?php
/* @var $this ProductsManageController */
/* @var $model Products */

$this->breadcrumbs=array(
    'محصولات'=>array('admin'),
    'مدیریت محصولات',
);
?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">مدیریت محصولات</h3>
        <a href="<?php echo $this->createUrl('create')?>" class="btn btn-default btn-sm">افزودن محصول</a>
    </div>
    <div class="box-body">
        <?php $this->renderPartial("//partial-views/_flashMessage"); ?>
        <div class="table-responsive">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'admins-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'itemsCssClass'=>'table table-striped table-hover',
                'columns'=>array(
                    'title',
                    'code',
                    array(
                        'header' => 'دسته بندی',
                        'value' => '$data->cat->title',
                        'filter' => CHtml::activeDropDownList($model,'cat_id',CHtml::listData(ProductCategories::model()->findAll('type = '.ProductCategories::TYPE_PRODUCT), 'id', 'title'),array('prompt' => 'همه'))
                    ),
                    array(
                        'class'=>'CButtonColumn',
                        'template' => '{update}{delete}'
                    )
                )
            )); ?>
        </div>
    </div>
</div>