<?php
/**
 * @var $this SiteController
 * @var $pages Pages[]
 * @var $productCategories ProductCategories[]
 * @var $projectCategories ProductCategories[]
 */
?>
<section id="top" class="section-right-border flex active">
    <div class="flex-inner">
        <div class="flex-col flex-stretch">
            <div class="flex-column top-box order1">
                <div class="logo"></div>
            </div>
            <div class="flex-column top-box order2">
                <div class="flex">
                    <div class="flex-inner">
                        <ul class="nav navbar">
                            <li><a href="#products">products<span>02</span></a></li>
                            <li><a href="#projects">projects<span>03</span></a></li>
                            <li><a href="#about">about us<span>01</span></a></li>
                            <li><a href="#contact">contact us<span>04</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mouse-icon"></div>
</section>
<section id="about" class="section-right-border flex flex-left">
    <div class="navigation">
        <a class="navigation-link navigation-top">
            about us
            <span>01</span>
        </a>
    </div>
    <div class="flex-inner">
        <div class="flex-col">
            <div class="about-box order1">
                <div class="about-image"></div>
            </div>
            <div class="about-box order2">
                <div class="flex flex-left">
                    <div class="flex-inner">
                        <h4 class="logo-title">
                            Punica
                            <small>Stone</small>
                        </h4>
                        <div class="text">
                            <?= nl2br(strip_tags($pages[0]->summary));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <a class="navigation-link navigation-bottom ease-link" href="#products">
            products
            <span>next / 02</span>
        </a>
    </div>
</section>
<section id="products" class="section-right-border flex flex-left">
    <div class="navigation">
        <a class="navigation-link navigation-top">
            products
            <span>02</span>
        </a>
        <div class="menu visible-xs">
            <a class="menu-trigger" href="#"></a>
        </div>
        <ul class="nav navbar nav-left">
            <?php foreach($productCategories as $category):?>
                <li><a href="#" data-toggle="tab" data-target="#marble-tab"><span><?= $category->title?></span><small>100 models</small></a></li>
            <?php endforeach;?>
<!--            <li class="active"><a href="#" data-toggle="tab" data-target="#travertine-tab"><span>travertine</span><small>100 models</small></a></li>-->
<!--            <li><a href="#" data-toggle="tab" data-target="#marble-tab"><span>marble</span><small>100 models</small></a></li>-->
<!--            <li><a href="#" data-toggle="tab" data-target="#granite-tab"><span>granite</span><small>100 models</small></a></li>-->
<!--            <li><a href="#" data-toggle="tab" data-target="#crystal-tab"><span>crystal</span><small>100 models</small></a></li>-->
<!--            <li><a href="#" data-toggle="tab" data-target="#onyx-tab"><span>onyx</span><small>100 models</small></a></li>-->
        </ul>
    </div>
    <div class="flex-inner">
        <div class="flex-col tab-content">
            <div class="tab-pane fade active in" id="travertine-tab">
                <div class="item-carousel owl-carousel owl-theme" id="travertine-gallery">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">01</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">02</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s3.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">03</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s4.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">04</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">05</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">06</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s3.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">07</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active in" id="marble-tab">
                <div class="item-carousel owl-carousel owl-theme">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <img src="images/s1.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s2.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active in" id="granite-tab">
                <div class="item-carousel owl-carousel owl-theme">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <img src="images/s1.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s2.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active in" id="crystal-tab">
                <div class="item-carousel owl-carousel owl-theme">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <img src="images/s1.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s2.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active in" id="onyx-tab">
                <div class="item-carousel owl-carousel owl-theme">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <img src="images/s1.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s2.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <a class="navigation-link navigation-bottom ease-link" href="#projects">
            projects
            <span>next / 03</span>
        </a>
        <a class="view-more" href="more.html">
            <i class="grid-icon"></i>
            view more
        </a>
    </div>
</section>
<section id="projects" class="section-right-border flex flex-left">
    <div class="navigation">
        <a class="navigation-link navigation-top">
            projects
            <span>03</span>
        </a>
        <div class="menu visible-xs">
            <a class="menu-trigger" href="#"></a>
        </div>
        <ul class="nav navbar nav-left">
            <li class="active"><a href="#" data-toggle="tab" data-target="#structural-tab"><span>structural</span></a></li>
            <li><a href="#" data-toggle="tab" data-target="#industrial-tab"><span>industrial</span></a></li>
            <li><a href="#" data-toggle="tab" data-target="#general-tab"><span>general</span></a></li>
            <li><a href="#" data-toggle="tab" data-target="#luxury-tab"><span>luxury</span></a></li>
        </ul>
    </div>
    <div class="flex-inner">
        <div class="flex-col tab-content">
            <div class="tab-pane fade in active" id="structural-tab">
                <div class="item-carousel owl-carousel owl-theme" id="structural-gallery">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">01</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">02</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active" id="industrial-tab">
                <div class="item-carousel owl-carousel owl-theme" id="industrial-gallery">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">01</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">02</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active" id="general-tab">
                <div class="item-carousel owl-carousel owl-theme" id="general-gallery">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">01</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">02</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active" id="luxury-tab">
                <div class="item-carousel owl-carousel owl-theme" id="luxury-gallery">
                    <div class="owl-stage-outer">
                        <a href="#" class="next"></a>
                        <a href="#" class="prev disable"></a>
                        <div class="owl-stage">
                            <div class="stone-item active">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s1.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">01</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <a href="#" data-target="#show-stone-modal">
                                    <img src="images/s2.png">
                                    <div class="detail">
                                        <button type="button" data-dismiss="modal" class="close-icon"></button>
                                        <div class="blue-box">
                                            <p class="item-category">travitine</p>
                                            <p class="item-number">02</p>
                                        </div>
                                        <div>
                                            <h5 class="item-title">morvarid-travitine</h5>
                                            <p>code: tr 10*</p>
                                            <p>max size: 260x160cm</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="stone-item">
                                <img src="images/s3.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                            <div class="stone-item">
                                <img src="images/s4.png">
                                <div class="detail">
                                    <h5 class="item-title">travitine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation">
        <a class="navigation-link navigation-bottom ease-link" href="#contact">
            contact us
            <span>next / 04</span>
        </a>
        <a class="view-more" href="more.html">
            <i class="grid-icon"></i>
            view more
        </a>
    </div>
</section>
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
                <img src="images/map.png">
                <div class="inner-container contact-form">
                    <div class="inner-box">
                        <header>
                            <h3>contact us</h3>
                            <div class="text">
                                If you are interested in contacting us, you can choose from the form below and ask your question.
                                You can also contact the contact numbers included.
                            </div>
                            <img src="images/qr.png" class="qr-code">
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
                <span class="address-title">address</span><br><a href="#" class="address">no.1, 2 amirlkabir blvd, omid ind city. qom-iran</a>
            </div>
            <div class="detail-box">
                <ul>
                    <li><span>phone</span><a href="tel:">[+98 25] 33443353</a></li>
                    <li><span>mobile<small>[ir]</small></span><a href="tel:">+98 912 651 5033</a></li>
                    <li><span>postal code</span><span>3747184313</span></li>
                    <li><span>e-mail</span><a href="mailto:">info@punicastone.com</a></li>
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
<!--<div class="shape hidden-xs"></div>-->
<!--<div class="container">-->
<!--    <div class="intro-box">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--                <i class="icon law"></i>-->
<!--                <div class="text">-->
<!--                    <h4>--><?//= CHtml::encode($pages[0]->title) ?><!--</h4>-->
<!--                    <div>--><?php
//                        echo nl2br(strip_tags($pages[0]->summary));
//                        ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--                <i class="icon graph"></i>-->
<!--                <div class="text">-->
<!--                    <h4>--><?//= CHtml::encode($pages[1]->title) ?><!--</h4>-->
<!--                    <div>--><?php
//                        echo nl2br(strip_tags($pages[1]->summary));
//                        ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">-->
<!--                <i class="icon refresh"></i>-->
<!--                <div class="text">-->
<!--                    <h4>--><?//= CHtml::encode($pages[2]->title) ?><!--</h4>-->
<!--                    <div>--><?php
//                        echo nl2br(strip_tags($pages[2]->summary));
//                        ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->