<?php

/** @var yii\web\View $this */

use common\widgets\Consult;
use common\widgets\OnlineHelp;
use common\widgets\Affiliation;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;
$lang = Yii::$app->language;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'USEFUL ARTICLES').' - '. $article->{"title_$lang"};
?>
    <div style="padding-top: 10px;">
        <section class="breadcrumb-wrap pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="sc-title-two sc-title-two-white sc-border-left w-100 mb-10 pr-lg-5">
                            <h4 class="cl-white"><?= $article->service->name ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlay-op1"></div>
        </section>
    </div>
    <section class="blog-main blg-listings pt-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="bg__contents mt-n7 mb-xs-4">
                        <div class="blog_head_image p-1 bg-white">
                            <img src="<?= $article->img ?>" alt=""/>
                        </div>
                        <div class="author__datetime mb-3">
                            <ul>
                                <li><i class="far fa-calendar"></i> <?= $article->publishedDate ?></li>
                            </ul>
                        </div>
                        <div class="bg__only_detail default__p mb-3">
                            <h4><?= $article->title ?></h4>
                            <p>
                                <?= $article->description ?>
                            </p>
                        </div>
                        <div class="blog_user_info d-flex border-start bw-3 bc-green bg-sfgrey-2 p-4 mb-3">
                            <div class="blg-user w-25 pr-3">
                                <img src="<?= $article->doctor->img ?>" class="rounded-circle" alt=""/>
                            </div>
                            <div class="blg_user_detail">
                                <h3>
                                    <?= Html::a($article->doctor->fullname, Url::to(['doctor-profile', 'id' => $article->doctor->id])) ?>
                                </h3>
                                <p>
                                    <?= Html::a($article->service->name, Url::to(['service-info', 'id' => $article->service->id])) ?>
                                </p>
                                <div>
                                    <?= $article->doctor->trimAbout ?>
                                </div>
                            </div>
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