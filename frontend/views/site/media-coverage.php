<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Affiliation;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'Media Coverage');
?>
<?= Banner::widget(['title' => $this->title]) ?>

    <div class="container">
        <div class="row py-5">
            <?php foreach ($media as $m) { ?>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                    <div class="article-list bg-sfgrey-2 h-100">
                        <div class="at-thumbnail card-image">
                            <a href="<?= $m->link ?>" target ='_blank'>
                                <img height="250px" src="<?= $m->img ?>" alt="">
                            </a>
                        </div>
                        <div class="article-content">
                            <div class="artl-detail">
                                <p class="text-center h6 p-1">
                                    <a href="<?= $m->link ?>" target ='_blank'>
                                    <?= $m->title ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="article-footer small">
                            <?= $m->description ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?= Consult::widget(['social' => $this->params['social']]) ?>