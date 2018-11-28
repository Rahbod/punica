<?php
/** @var $data Projects */
/** @var $key int */

$path = Yii::getPathOfAlias('webroot').'/uploads/projects/';
$url = Yii::app()->getBaseUrl(true).'/uploads/projects/';
$thumbPath = $path.'thumbs/300x300/';
$thumbUrl = $url.'thumbs/300x300/';

$key = $key > 9?:"0$key";

$image = $thumbUrl.$data->image;
if($data->image && is_file($path.$data->image))
    $image = $url.$data->image;
?>
<div class="stone-item active">
    <a href="#" data-target="#show-stone-modal">
        <?php if($data->image && is_file($thumbPath.$data->image)): ?>
            <img src="<?= $thumbUrl.$data->image ?>" data-src="<?= $image ?>" alt="<?= $data->title ?>">
        <?php endif; ?>
        <div class="detail">
            <button type="button" data-dismiss="modal" class="close-icon"></button>
            <div class="blue-box">
                <p class="item-category"><?= $data->cat->title ?></p>
                <p class="item-number"><?= $key ?></p>
            </div>
            <div>
                <h5 class="item-title"><?= $data->title ?></h5>
            </div>
        </div>
    </a>
</div>
