<?php
/** @var $this Controller */
/** @var $form CActiveForm */
$path = Yii::getPathOfAlias('webroot').'/uploads/map/';
$url = Yii::app()->getBaseUrl(true).'/uploads/map/';
$urlQr = Yii::app()->getBaseUrl(true).'/uploads/qr/';

$phone = SiteSetting::getOption('phone');
$clearPhone=str_replace(array(' ', '[', ']'), '', $phone);
$mobile = SiteSetting::getOption('mobile');
$clearMobile=str_replace(array(' ', '[', ']'), '', $mobile);
?>
<section id="contact" class="flex flex-left">
    <div class="navigation">
        <a class="navigation-link navigation-top">
            contact us
            <span>04</span>
        </a>
        <ul class="social-nav nav-left">
            <li><a href="#"><span>@punica.stone</span></a></li>
            <li><a href="#"><i class="facebook-icon"></i></a></li>
            <li><a href="#"><i class="instagram-icon"></i></a></li>
            <li><a href="#"><i class="whatsapp-icon"></i><span>+98 902 253 9393</span></a></li>
            <li><a href="#"><i class="telegram-icon"></i></a></li>
            <li class="top-link">
                <div class="navigation-link navigation-top right">
                    <a class="ease-link" href="#top">Home</a>
                    <ul>
                        <li><a class="ease-link" href="#about">about us</a></li>
                        <li><a class="ease-link" href="#products">products</a></li>
                        <li><a class="ease-link" href="#projects">projects</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="flex-inner">
        <div class="flex-col">
            <div class="map-box">
                <a target="_blank" href="<?= SiteSetting::getOption('map_link') ?>"><img src="<?= $url.SiteSetting::getOption('map_pic') ?>"></a>
                <div class="inner-container contact-form">
                    <div class="inner-box">
                        <header>
                            <h3>contact us</h3>
                            <div class="text">
                                If you are interested in contacting us, you can choose from the form below and ask your question.
                                You can also contact the contact numbers included.
                            </div>
                            <img src="<?= $urlQr.SiteSetting::getOption('qr_pic') ?>" class="qr-code">
                        </header>
                        <p id="content-form-error" class="label"></p>
                        <?php
                        Yii::app()->getModule('contact');
                        $model = new ContactForm();
                        $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'contact-form',
                            'action' => array('/contact'),
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                                'afterValidate' => 'js: function(form, data, hasError){
                                    if(hasError)
                                        $(".captcha-container a").click();
                                    else
                                        return true;
                                }'
                            ),
                        )); ?>
                            <input type="hidden" name="return" value="<?= Yii::app()->request->requestUri.'#contact' ?>">
                            <div class="left-box">
                                <div class="row">
                                    <div class="form-group">
                                        <?php echo $form->textField($model,'name', array('class'=>'form-control','placeholder'=>'first and last name')) ?>
                                        <?php echo $form->error($model,'name') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->emailField($model,'email', array('class'=>'form-control','placeholder'=>'e-mail')) ?>
                                        <?php echo $form->error($model,'email') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->telField($model,'tel', array('class'=>'form-control','placeholder'=>'phone number')) ?>
                                        <?php echo $form->error($model,'tel') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $form->dropDownList($model,'department_id', CHtml::listData(ContactDepartment::model()->findAll(array('order'=>'id')),'id','title'),array('class'=>'form-control select-picker','placeholder'=>'unit')) ?>
                                        <?php echo $form->error($model,'department_id') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group full">
                                        <?php echo $form->textArea($model,'body', array('class'=>'form-control','placeholder'=>'your text')) ?>
                                        <?php echo $form->error($model,'body') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons-box">
                                <button type="submit">
                                    send
                                    <span><i class="icon icon-chevron-right"></i></span>
                                </button>
                            </div>
                        <?php $this->endWidget() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <div class="navigation-bottom info">
            <div class="address-box">
                <span class="address-title">address</span><br><a target="_blank" href="http://maps.google.com/?q=<?= urlencode(SiteSetting::getOption('address')) ?>" class="address"><?= SiteSetting::getOption('address') ?></a>
            </div>
            <div class="detail-box">
                <ul>
                    <li><span>phone</span><a href="tel:<?= $clearPhone ?>"><?= $phone ?></a></li>
                    <li><span>mobile<small>[ir]</small></span><a href="tel:<?= $clearMobile ?>"><?= $mobile ?></a></li>
                    <li><span>postal code</span><span><?= SiteSetting::getOption('postal_code') ?></span></li>
                    <li><span>e-mail</span><a href="mailto:<?= SiteSetting::getOption('master_email') ?>"><?= SiteSetting::getOption('master_email') ?></a></li>
                </ul>
            </div>
        </div>
        <span class="navigation-bottom copy-right">
                <a href="https://tarsiminc.com" target="_blank">
                    <span class="text-right sitename">
                        <span>&copy; 2018 - punica stone</span><br><span class="tarsim">by tarsim.inc</span>
                    </span>
                    <span class="blue-copy-right">by<br>thanks</span>
                </a>
            </span>
    </div>
</section>