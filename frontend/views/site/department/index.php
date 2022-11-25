<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Lx::t('frontend', "ZARMED PRATIKSHA") . " | " . Lx::t('frontend', 'Departments');
?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="service">
        <div class="container">
            <div class="sc-title-two text-center">
                <!-- <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'BETTER OUTPATIENT CARE!') ?></h4> -->
                <h2><?= Lx::t('frontend', 'Our Departments') ?></h2>
            </div>
            <?php foreach ($branches as $b) { ?>
                <h3 class="cl-blue mt-4 border-bottom text-uppercase"><?= $b->title ?></h3>
                <div class="row">
                    <?php foreach ($b->departments as $department) { ?>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div>
                                <?= Html::a('', Url::to(['department-services', 'id' => $department->id]), ['style' => 'background-image: url("' . $department->img . '"); background-repeat: no-repeat; background-size: cover; background-position: center; min-height: 150px', 'class' => 'overflow-hidden service-aa p-4 d-flex align-items-center border-start bw-2 bc-green bx-shadow bg-white h-100']) ?>
                                <?= Html::a('<h3 class="text-center cl-green">' . $department->name . '</h3>', Url::to(['department-services', 'id' => $department->id]), ['class' => 'd-block']) ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="w-process bg-sfgrey-2">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Easy Solutions') ?></h4>
                <h2><?= Lx::t('frontend', 'TAKE 4 SIMPLE STEPS AND GET THE BEST SOLUTION FOR YOUR ILLNESS') ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="<?= Url::to(['doctors']) ?>">
                        <div class="pcs-list p-2">
                            <i class="fas fa-user-md"></i>
                            <h3><?= Lx::t('frontend', 'CHECK OUT DOCTOR\'S PROFILE') ?></h3>
                            <p class="cl-grey">
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?= Url::to(['contact']) ?>">
                        <div class="pcs-list p-2">
                            <i class="fas fa-laptop-medical"></i>
                            <h3><?= Lx::t('frontend', 'SIGN UP FOR A CONSULTATION') ?></h3>
                            <p class="cl-grey">
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?= Url::to(['contact']) ?>">
                        <div class="pcs-list p-2">
                            <i class="fas fa-star-of-life"></i>
                            <h3><?= Lx::t('frontend', 'GET A CONSULTATION') ?></h3>
                            <p class="cl-grey">
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="<?= Url::to(['appointment']) ?>">
                        <div class="pcs-list p-2">
                            <i class="fas fa-user-md"></i>
                            <h3><?= Lx::t('frontend', 'GET THE BEST TREATMENT') ?></h3>
                            <p class="cl-grey">
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="short-info cl-blue pt-1 mt-3 text-center">
<!--                <p>--><?//= Lx::t('frontend', 'Healthcare providers, including pediatricians, dentists, and other doctors, require signed medical release forms before administering medical treatment or prescribing medications, with the exception of life threatening medical treatments.') ?><!--</p>-->
            </div>
        </div>
    </section>

<?= Consult::widget(['social' => $this->params['social']]) ?>