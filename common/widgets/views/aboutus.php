<?php

use lajax\translatemanager\helpers\Language as Lx;

?>
<section class="aboutus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 pe-lg-5">
                <div class="about-img-2">
                    <img src="/images/inner/IMG_1656.jpg" />
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="sc-title-one mb-3">
                    <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'WELCOME TO PERFECT MEDICAL SERVICE') ?></h4>
                    <h2 class="mb-3"><?= Lx::t('frontend', 'Individual approach to each patient') ?></h2>
                </div>
                <div class="about-detail">
                    <ul class="d-flex flex-wrap">
                        <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Professional Doctors') ?>
                        </li>
                        <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Online Support 24/7') ?></li>
                        <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Digital Laboratory') ?></li>
                        <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Favorable Packages') ?></li>
                        <li class="w-50 border-lg-0"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Online appointment for a consultation') ?>
                        </li>
                        <li class="w-50 border-lg-0"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Quality services') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>