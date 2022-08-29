<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'USEFUL ARTICLES');
?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="blog-main blg-listings">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'USEFUL ARTICLES') ?></h4>
                <h2><?= Lx::t('frontend', 'SAVE YOUR HEALTH WITH US') ?></h2>
            </div>
            <div class="blog-wrap mb-xs-3">
                <div class="row align-items-stretch">
                    <?php foreach ($articles as $article) { ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                            <div class="article-list bg-sfgrey-2 h-100">
                                <div class="at-thumbnail card-image">
                                    <?= Html::a('<img height="250px" src="' . $article->img . '" alt=" ' . $article->title . ' "/>', Url::to(['article-info', 'id' => $article->id])) ?>
<!--                                    <span class="blog-tag"> --><?//= $article->service->name ?><!-- </span>-->
                                </div>
                                <div class="article-content">
                                    <img src="<?= $article->doctor->img ?>" alt="" class="article-avatar"/>
                                    <div class="artl-detail">
                                        <h4>
                                            <?= Html::a($article->title, Url::to(['article-info', 'id' => $article->id])) ?>
                                        </h4>
                                        <p><?= $article->trimDescription ?></p>
                                    </div>
                                </div>
                                <div class="article-footer">
                                    <ul>
                                        <li class="cl-lgrey2 pr-2"><?= $article->publishedDate ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

<?= Consult::widget(['social' => $this->params['social']]) ?>