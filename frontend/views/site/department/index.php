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
                                <?= Html::a('<h3 class="text-center cl-green text-uppercase">' . $department->name . '</h3>', Url::to(['department-services', 'id' => $department->id]), ['class' => 'd-block']) ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
   
<?= Consult::widget(['social' => $this->params['social']]) ?>