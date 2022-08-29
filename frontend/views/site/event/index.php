<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Emergency;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA") . " | " . Yii::t('frontend', 'Latest Events');
?>
<?= Banner::widget(['title' => $this->title]) ?>
<div class="container">
    <section class="team">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Latest Events') ?></h4>
                <div class="h2 text-dark" style="font-weight: 600"><?= Lx::t('frontend', 'The Newest Events Of Our Hospital') ?></div>
            </div>
            <?php foreach ($events as $event) { ?>
                <a class="py-2 row" href="<?= Url::to(['event-info', 'id' => $event->id]) ?>">
                    <div class="col-sm-2">
                        <img style="" src="<?= $event->img ?>"></div>
                    <div class="col-sm-10">
                        <div class="h4 font-weight-lighter"><?= $event->title ?></div>
                        <div class="text-dark"><?= $event->trimDescription ?></div>
                        <div class="font-italic text-success text-right small"><?= $event->publishedDate ?></div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </section>
</div>

<?= Emergency::widget(['social' => $this->params['social']]) ?>
<?= Consult::widget(['social' => $this->params['social']]) ?>
