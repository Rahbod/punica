<?php
/* @var $this Controller */
/* @var $content string */
?>
<!DOCTYPE html>
<html lang="fa_ir">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#030000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= Yii::app()->request->csrfToken ?>" />
    <meta name="keywords" content="<?= $this->keywords ?>">
    <meta name="description" content="<?= $this->description?> ">
    <link rel="shortcut icon" href="<?php echo Yii::app()->getBaseUrl(true).'/themes/frontend/images/favicon.png';?>">
    <title><?= (!empty($this->pageTitle)?$this->pageTitle.' | ':'').$this->siteName ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/fontiran.css">
    <?php
    $baseUrl = Yii::app()->theme->baseUrl;
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');

    $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
    $cs->registerCssFile($baseUrl.'/css/font-awesome.css?3'.time());
    $cs->registerCssFile($baseUrl.'/css/owl.carousel.min.css?3'.time());
    $cs->registerCssFile($baseUrl.'/css/owl.theme.default.min.css?3'.time());
    $cs->registerCssFile($baseUrl.'/css/open-sans.css?3'.time());
    $cs->registerCssFile($baseUrl.'/css/bootstrap-theme.css?3'.time());
    $cs->registerCssFile($baseUrl.'/css/responsive-theme.css?3'.time());

    $cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js', CClientScript::POS_END);
    $cs->registerScriptFile($baseUrl.'/js/jquery.nicescroll.min.js', CClientScript::POS_END);
    $cs->registerScriptFile($baseUrl.'/js/owl.carousel.min.js', CClientScript::POS_END);
    $cs->registerScriptFile($baseUrl.'/js/jquery.script-mouse-wheel.js?3'.time(), CClientScript::POS_END);
    $cs->registerScriptFile($baseUrl.'/js/jquery.script.js?3'.time(), CClientScript::POS_END);
    ?>
</head>
<body>
<div class="content">
    <div class="visible-xs header">
        <div class="nav-trigger">
            <a class="nav-icon" href="#"></a>
        </div>
        <ul class="nav navbar">
            <li><a href="#about">about us<span>01</span></a></li>
            <li><a href="#products">products<span>02</span></a></li>
            <li><a href="#projects">projects<span>03</span></a></li>
            <li><a href="#contact">contact us<span>04</span></a></li>
        </ul>
    </div>
    <?php echo $content;?>
    <?php $this->renderPartial('//partial-views/_footer') ?>
</div>
<?php $this->renderPartial('//partial-views/_popup') ?>
</body>
</html>