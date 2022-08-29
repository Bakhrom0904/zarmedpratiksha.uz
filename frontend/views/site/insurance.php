<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use yii\helpers\Html;
use yii\helpers\Url;
use lajax\translatemanager\helpers\Language as Lx;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'TPA & Insurance');
?>
<?= Banner::widget(['title' => $this->title]) ?>

    <div class="gallery pt-14 pb-14">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Insurance Information') ?></h4>
                <div class="h2 text-dark" style="font-weight: 600"><?= Lx::t('frontend', 'TPA & Insurance Information') ?></div>
            </div>
            <div class="position-relative row align-items-center">
                <?php foreach ($insurance as $item) { ?>
                    <div class="col-xs-4 col-sm-3 p-1">
                        <?= Html::a('<img src="' . $item->img . '" class="demo-image wow fadeInUp" alt="image"/>', $item->link) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?= Consult::widget(['social' => $this->params['social']]) ?>