<?php

/** @var yii\web\View $this */

use common\widgets\Aboutus;
use common\widgets\Affiliation;
use common\widgets\CaseTable;
use common\widgets\Consult;
use common\widgets\Emergency;
use common\widgets\MainBanner;
use common\widgets\Process;
use common\widgets\Process2;
use common\widgets\Service;
use common\widgets\Service2;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA");

?>

<div>
    <?= MainBanner::widget(['items' => $banners]) ?>
    <?= Aboutus::widget() ?>
    <?= CaseTable::widget(['social' => $this->params['social']]) ?>
    <?= Service::widget() ?>
    <!-- <?= Process::widget() ?> -->
    <?= Process2::widget() ?>
    <?= Emergency::widget(['social' => $this->params['social']]) ?>
    <?= Affiliation::widget(['certificates' => $this->params['certificates']]) ?>
    <?= Service2::widget() ?>

    <section class="team">
        <div class="container">
            <div class="sc-title-two text-center">
                <h2 class="text-uppercase"><?= Lx::t('frontend', 'Our Leading Specialists') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($doctors as $doctor) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-wrap position-relative mb-10 text-center">
                            <div class="team-img position-relative rounded-2 overflow-hidden before-x doctor-card">
                                <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                            </div>
                            <div class="team-name-ab bx-shadow pt-4 pb-2">
                                <?= Html::a(' <h4 class="text-capitalize">' . $doctor->fullname . '</h4><p class="cl-green">' . $doctor->department->name . '</p>', ['doctor-profile', 'id' => $doctor->id]) ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="btn-wrap text-center">
                <a href="<?= Url::to('doctors') ?>" class="btn bg-blue"><?= Lx::t('frontend', 'View All Here') ?></a>
            </div>
        </div>
    </section>

    <?= Consult::widget(['social' => $this->params['social']]) ?>
</div>
