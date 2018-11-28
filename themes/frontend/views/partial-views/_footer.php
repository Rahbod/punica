<?php
/** @var $this Controller */

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
                        <form>
                            <div class="left-box">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="first and last name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="e-mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="phone number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="unit">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group full">
                                        <textarea  class="form-control" placeholder="YOUR TEXT"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons-box">
                                <button type="submit">
                                    send
                                    <span><i class="icon icon-chevron-right"></i></span>
                                </button>
                            </div>
                        </form>
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