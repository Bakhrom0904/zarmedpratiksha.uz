<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use common\widgets\OnlineHelp;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('backend', 'Services').' - '. $service->{"name_$lang"};
?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="sercvice-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                   <?= OnlineHelp::widget(['social' => $this->params['social']]) ?>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="sv-detail-content about-detail mb-3">
                        <h2><?= $service->name ?></h2>
                        <p class="text-justify">
                            <?= $service->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php if (count($service->services) > 0) { ?>
    <div class="container">
        <section class="pt-0 team">
            <div class="container">
                <div class="sc-title-two text-center">
                    <h2><?= Lx::t('frontend', 'Doctors providing the service') ?></h2>
                </div>
                <div class="row">
                    <?php foreach ($service->doctors as $doctor) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-wrap position-relative mb-10 text-center">
                                <div class="team-img position-relative rounded-2 overflow-hidden before-x doctor-card">
                                    <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                                </div>
                                <div class="team-name-ab bx-shadow pt-4 pb-2">
                                    <?= Html::a(' <h4 class="text-capitalize">' . $doctor->fullname . '</h4><p class="cl-green">' . $doctor->department->name . '</p>', Url::to(['doctor-profile', 'id' => $doctor->id])) ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
<?php } ?>

<?= Consult::widget(['social' => $this->params['social']]) ?>