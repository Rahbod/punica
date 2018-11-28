<?php
/** @var $data Products */
/** @var $key int */

$path = Yii::getPathOfAlias('webroot').'/uploads/products/';
$url = Yii::app()->getBaseUrl(true).'/uploads/products/';
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
                <p>code: <?= $data->code ?></p>
                <p>max size: <?= $data->max_size ?></p>
            </div>
        </div>
    </a>
</div>
