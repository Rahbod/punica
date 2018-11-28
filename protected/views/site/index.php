<?php
/**
 * @var $this SiteController
 * @var $pages Pages[]
 * @var $productCategories ProductCategories[]
 * @var $projectCategories ProductCategories[]
 * @var $products Products[]
 * @var $projects Projects[]
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
            <?php foreach($productCategories as $key => $category):?>
                <li<?= $key === 0?' class="active"':'' ?>><a href="#" data-toggle="tab" data-target="#product-<?= $category->id ?>-tab"><span><?= $category->title?></span><small><?= $category->getItemCount() ?> models</small></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="flex-inner">
        <div class="flex-col tab-content">
            <?php foreach ($productCategories as $k => $category):?>
                <div class="tab-pane fade<?= $k === 0?' active in':''?>" id="product-<?= $category->id ?>-tab">
                    <div class="item-carousel owl-carousel owl-theme" id="product-<?= $category->id ?>-gallery">
                        <div class="owl-stage-outer">
                            <a href="#" class="next"></a>
                            <a href="#" class="prev disable"></a>
                            <div class="owl-stage">
                                <?php
                                $cr = Products::validQuery(10)->compare('cat_id', $category->id);
                                $products = Products::model()->findAll($cr);
                                foreach ($products as $key => $product):
                                    $this->renderPartial('products.views.manage._item_view', array('key' => $key+1,'data' => $product));
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="navigation">
        <a class="navigation-link navigation-bottom ease-link" href="#projects">
            projects
            <span>next / 03</span>
        </a>
        <a class="view-more" href="<?= $this->createUrl('/products/more') ?>">
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
            <?php foreach($projectCategories as $key => $category):?>
                <li<?= $key === 0?' class="active"':'' ?>><a href="#" data-toggle="tab" data-target="#project-<?= $category->id ?>-tab"><span><?= $category->title?></span></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="flex-inner">
        <div class="flex-col tab-content">
            <?php foreach ($projectCategories as $k => $category):?>
                <div class="tab-pane fade<?= $k === 0?' active in':''?>" id="project-<?= $category->id ?>-tab">
                    <div class="item-carousel owl-carousel owl-theme" id="project-<?= $category->id ?>-gallery">
                        <div class="owl-stage-outer">
                            <a href="#" class="next"></a>
                            <a href="#" class="prev disable"></a>
                            <div class="owl-stage">
                                <?php
                                $cr = Projects::validQuery(10)->compare('cat_id', $category->id);
                                $projects = Projects::model()->findAll($cr);
                                foreach ($projects as $key => $project):
                                    $this->renderPartial('projects.views.manage._item_view', array('key' => $key+1,'data' => $project));
                                endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="navigation">
        <a class="navigation-link navigation-bottom ease-link" href="#contact">
            contact us
            <span>next / 04</span>
        </a>
        <a class="view-more" href="<?= $this->createUrl('/projects/more') ?>">
            <i class="grid-icon"></i>
            view more
        </a>
    </div>
</section>