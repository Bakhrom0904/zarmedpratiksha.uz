<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use common\widgets\Emergency;
use lajax\translatemanager\helpers\Language as Lx;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Gallery');
?>
<?= Banner::widget(['title' => $this->title]) ?>

    <div class="gallery pt-14 pb-14">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Gallery Images') ?></h4>
                <h2 class="text-lowercase"><?= Lx::t('frontend', 'View Our News Within Images') ?></h2>
            </div>
            <?php foreach ($gallery as $item) { ?>
                <h3 class="my-4 cl-green text-uppercase"><?= $item->title ?></h3>
                <div class="position-relative row m-0">
                    <?php $images = explode(',', $item->path);
                    foreach ($images as $img) { ?>
                        <div class="col-md-4 demo p-0" data-macy-complete="1">
                            <a href="<?= $img ?>"
                               data-lightbox="gallery">
                                <div class="card-image">
                                    <img src="<?= $img ?>" alt="image" class="demo-image wow fadeInUp"/>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>

<?= Emergency::widget(['social' => $this->params['social']]) ?>
<?= Consult::widget(['social' => $this->params['social']]) ?>