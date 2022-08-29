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
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Departments').' - '. $department->{"name_$lang"};
?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="sercvice-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <?= OnlineHelp::widget(['social' => $this->params['social']])?>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="sv-detail-content about-detail mb-3">
                        <h2><?= $department->name ?></h2>
                        <img class="w-100" src="<?= $department->img ?>">
                        <p class="text-justify py-3">
                            <?= $department->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php if (count($department->services) > 0) { ?>
    <section class="pt-0 service">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green"><?= Lx::t('frontend', 'Best Practice Care!') ?></h4>
                <h2><?= Lx::t('frontend', 'Different Types Of Services') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($department->services as $services) { ?>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <?= Html::a('<div class="sv-detail pl-4"><h3>' . $services->name . '</h3><p class="cl-grey">' . $services->trimDescription . '</p></div>', Url::to(['service-info', 'id' => $services->id]), ['class' => 'overflow-hidden service-aa p-4 d-flex align-items-center border-start bw-2 bc-green bx-shadow bg-white h-100']) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if (count($department->doctors) > 0) { ?>
    <section class="pt-0 team">
        <div class="container">
            <div class="sc-title-two text-center">
                <h2><?= Lx::t('frontend', 'Doctors of the Department') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($department->doctors as $doctor) { ?>
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
<?php } ?>

<?= Consult::widget(['social' => $this->params['social']]) ?>