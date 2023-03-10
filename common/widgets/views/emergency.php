<?php

use lajax\translatemanager\helpers\Language as Lx;

?>

<section class="emergency-call pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sc-title-two sc-title-two-white sc-border-left appoint-info w-100 mb-7">
                    <i class="fas fa-phone-volume bg-lgreen"></i>
                    <h2 class="cl-white mt-2"><?= Lx::t('frontend', 'Call An Emergency') ?></h2>
                    <h2 class="cl-white fsc-5 mb-3"><?= Lx::t('frontend', 'Call') . ': '?><a href="tel:1063" style="color:#F19035;">1063</a></h2>
                </div>
                <div class="appoint-detail">
                    <p class="cl-white"><?= Lx::t('frontend', 'In case you choose a heavy amount for personal consumption or in the Emergency Medical Service') ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hotline-img pl-4 pr-4">
                    <img src="/images/inner/n-e1633078810928.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</section>