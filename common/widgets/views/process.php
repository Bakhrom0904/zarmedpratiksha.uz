<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>
<section class="w-process bg-map bgc-dblue">
    <div class="container">
        <div class="sc-title-two sc-title-two-white text-center">
            <h4 class="cl-white text-uppercase"><?= Lx::t('frontend', 'Why Choose Us') ?></h4>
            <h2 class="cl-white"><?= Lx::t('frontend', 'Complete Health Care Solutions For All') ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="<?= Url::to(['doctors']) ?>">
                    <div class="pcs-list p-4 bg-white">
                        <i class="far fa-file-alt"></i>
                        <h4><?= Lx::t('frontend', 'Experience Doctors') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= Url::to(['doctors']) ?>">
                    <div class="pcs-list p-4 bg-white">
                        <i class="fas fa-laptop-medical"></i>
                        <h4><?= Lx::t('frontend', '+45 Yrs Experience') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="pcs-list p-4 bg-white">
                        <i class="fas fa-star-of-life"></i>
                        <h4><?= Lx::t('frontend', 'Standards Treatments') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="<?= Url::to(['departments']) ?>">
                    <div class="pcs-list p-4 bg-white mb-0">
                        <i class="fas fa-user-md"></i>
                        <h4><?= Lx::t('frontend', 'Best Departments') ?></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>