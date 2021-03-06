<?php
/* @var $this SettingManageController */
/* @var $model SiteSetting */
$social_links = false;
if($model->value)
    $social_links = CJSON::decode($model->value);
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">تنظیمات عمومی</h3>
    </div>
    <div class="box-body">
        <?php $this->renderPartial('//partial-views/_flashMessage')?>
        <?
        $form = $this->beginWidget('CActiveForm',array(
            'id'=> 'general-setting',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
        ));
        ?>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <?php echo CHtml::label('لینک واتس اپ',''); ?>
                    <?php echo CHtml::textField("SiteSetting[social_links][whatsapp]",($social_links && isset($social_links['whatsapp'])?$social_links['whatsapp']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <?php echo CHtml::label('شماره تلفن واتس اپ',''); ?>
                    <?php echo CHtml::textField("SiteSetting[social_links][whatsapp_number]",($social_links && isset($social_links['whatsapp_number'])?$social_links['whatsapp_number']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo CHtml::label('لینک فیسبوک',''); ?>
            <?php echo CHtml::textField("SiteSetting[social_links][facebook]",($social_links && isset($social_links['facebook'])?$social_links['facebook']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
        </div>
        <div class="form-group">
            <?php echo CHtml::label('لینک تلگرام',''); ?>
            <?php echo CHtml::textField("SiteSetting[social_links][telegram]",($social_links && isset($social_links['telegram'])?$social_links['telegram']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
        </div>
        <div class="form-group">
            <?php echo CHtml::label('لینک اینستاگرام',''); ?>
            <?php echo CHtml::textField("SiteSetting[social_links][instagram]",($social_links && isset($social_links['instagram'])?$social_links['instagram']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
        </div>
        <div class="form-group">
            <?php echo CHtml::label('لینک توییتر',''); ?>
            <?php echo CHtml::textField("SiteSetting[social_links][twitter]",($social_links && isset($social_links['twitter'])?$social_links['twitter']:''),array('size'=>60,'class'=>'form-control text-left ltr')); ?>
        </div>

        <div class="form-group buttons">
            <?php echo CHtml::submitButton('ذخیره',array('class' => 'btn btn-success')); ?>
        </div>
        <?
        $this->endWidget();
        ?>
    </div>
</div>