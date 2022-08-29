<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>
<section class="service-ss bg-sfgrey-3">
    <div class="container">
        <div class="sc-title-two text-center">
            <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Our Services') ?></h4>
            <h2></h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['doctors']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white mb-3">
                        <i class="fas fa-user-md cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Professional Doctor') ?></h4>
                            <p class="cl-grey"></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white mb-3">
                        <i class="fas fa-capsules cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Pharmacy') ?></h4>
                            <p class="cl-grey"></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white mb-3">
                        <i class="fas fa-hospital-alt cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Operation Theater') ?></h4>
                            <p class="cl-grey"></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white">
                        <i class="fas fa-vials cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Blood Test') ?></h4>
                            <p class="cl-grey"></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white">
                        <i class="fas fa-star-of-life cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Cancer Service') ?></h4>
                            <p class="cl-grey"></p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a href="<?= Url::to(['about']) ?>">
                    <div class="service-aa p-4 d-flex align-items-center bg-white mb-0">
                        <i class="fas fa-medkit cl-green"></i>
                        <div class="sv-detail pl-4">
                            <h4><?= Lx::t('frontend', 'Outdoor Checkup') ?></h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="short-info cl-blue pt-1 mt-3 border-none text-center">
        </div>
    </div>
</section>