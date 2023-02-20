<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>

<section class="service">
    <div class="container">
        <div class="sc-title-two text-center">
            <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Best Practice Care!') ?></h4>
            <h2><?= Lx::t('frontend', 'We Offer Different Services To Improve Your Health') ?></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= Url::to(['department-services?id=1']) ?>">
                    <div class="service-list bg-white bx-shadow">
                        <div class="sv-icon mb-3">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="sv-title">
                            <h3><?= Lx::t('frontend', 'Neurosurgery') ?></h3>
                        </div>
                        <p class="cl-grey">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?= Url::to(['department-services?id=36']) ?>">
                    <div class="service-list bg-white bx-shadow mb-3">
                        <div class="sv-icon mb-3">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="sv-title">
                            <h3><?= Lx::t('frontend', 'Cardiosurgery') ?></h3>
                        </div>
                        <p class="cl-grey">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?= Url::to(['department-services?id=38']) ?>">
                    <div class="service-list bg-white bx-shadow">
                        <div class="sv-icon mb-3">
                            <i class="fas fa-star-of-life"></i>
                        </div>
                        <div class="sv-title">
                            <h3><?= Lx::t('frontend', 'General Surgery') ?></h3>
                        </div>
                        <p class="cl-grey">
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?= Url::to(['department-services?id=3']) ?>">
                    <div class="service-list bg-white bx-shadow mb-0">
                        <div class="sv-icon mb-3">
                        <i class="fa-solid fa-house-medical"></i>
                        </div>
                        <div class="sv-title">
                            <h3><?= Lx::t('frontend', 'Maternity ward') ?></h3>
                        </div>
                        <p class="cl-grey">
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="short-info cl-blue pt-1 mt-3 text-center">
        </div>
    </div>
</section>
