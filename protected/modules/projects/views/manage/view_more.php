<?php
/** @var $this ProjectsManageController */
/** @var $categories Projects[] */
?>
<section class="height-auto active">
    <div class="navigation inner">
        <a class="navigation-back" href="<?= Yii::app()->getBaseUrl(true).'#projects' ?>">
            <span><i class="arrow-icon"></i></span>
            <span>back</span>
        </a>
        <a class="navigation-link navigation-top">
            projects
            <span>view more</span>
        </a>
        <div class="menu visible-xs">
            <a class="menu-trigger" href="#"></a>
        </div>
        <ul class="nav navbar nav-left">
            <?php foreach($categories as $key => $category):?>
                <li<?= $key === 0?' class="active"':'' ?>><a href="#" data-toggle="tab" data-target="#project-<?= $category->id ?>-tab"><span><?= $category->title?></span></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="box-inner tab-content">
        <?php foreach ($categories as $k => $category):?>
            <div class="tab-pane fade<?= $k === 0?' active in':''?>" id="project-<?= $category->id ?>-tab">
                <div class="item-carousel item-list" id="project-<?= $category->id ?>-gallery">
                    <div class="owl-stage">
                        <?php
                        $cr = Projects::validQuery()->compare('cat_id', $category->id);
                        $projects = Projects::model()->findAll($cr);
                        foreach ($projects as $key => $project):
                            $this->renderPartial('projects.views.manage._item_view', array('key' => $key+1,'data' => $project));
                        endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<!--    <div class="navigation inner">-->
<!--        <a class="view-more" href="#">-->
<!--            <i class="grid-icon"></i>-->
<!--            load more-->
<!--        </a>-->
<!--    </div>-->
</section>
