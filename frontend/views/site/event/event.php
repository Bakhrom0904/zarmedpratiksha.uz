<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use common\widgets\OnlineHelp;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontent', 'Latest Events').' - '. $event->{"title_$lang"};
?>
<?= Banner::widget(['title' => $this->title]) ?>
<section class="blog-main blg-listings pt-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="bg__contents mt-n7 mb-xs-4">
                    <div class="blog_head_image p-1 bg-white">
                        <img src="<?= $event->img ?>" alt=""/>
                    </div>
                    <div class="author__datetime mb-3">
                        <ul>
                            <li><i class="far fa-calendar"></i> <?= $event->publishedDate ?></li>
                        </ul>
                    </div>
                    <div class="bg__only_detail default__p mb-3">
                        <h4><?= $event->title ?></h4>
                        <p>
                            <?= $event->description ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?= OnlineHelp::widget(['social' => $this->params['social']]) ?>
                <div class="doc-side-img text-center pt-3">
                    <img src="/images/shape/Epidemic-line-01-01.png" class="w-75" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>

<?= Consult::widget(['social' => $this->params['social']]) ?>
