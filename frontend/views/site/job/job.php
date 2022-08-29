<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use common\widgets\OnlineHelp;
use lajax\translatemanager\helpers\Language as Lx;
$lang =Yii::$app->language;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Job Portal')." - ".$job->{"title_$lang"};
?>
<?= Banner::widget(['title' => $this->title]) ?>
<section class="blog-main blg-listings pt-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="bg__contents mt-n7 mb-xs-4">
                    <div class="blog_head_image p-1 bg-white">
                        <img src="<?= $job->img ?>" alt=""/>
                    </div>
                    <div class="author__datetime mb-3">
                        <ul>
                            <li><i class="far fa-calendar"></i> <?= $job->publishedDate ?></li>
                        </ul>
                    </div>
                    <div class="bg__only_detail default__p mb-3">
                        <h4><?= $job->title ?></h4>
                        <p>
                            <?= $job->description ?>
                        </p>
                    </div>
                    <div>
                        <a href="<?= $job->link ?>" target="_blank" class="btn bg-blue"><?= Lx::t('frontend', 'Apply Now') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <?= OnlineHelp::widget(['social' => $this->params['social']]) ?>
            </div>
        </div>
    </div>
</section>

<?= Consult::widget(['social' => $this->params['social']]) ?>
