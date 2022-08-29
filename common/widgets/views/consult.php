<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;
?>

<section class="call-to p-5 bg-orange">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="call-contact d-flex align-items-center">
                    <i class="fas fa-phone-alt display-6 cl-white"></i>
                    <div class="pl-3">
                        <h4 class="cl-white"><?= Lx::t('frontend', 'Doctor\'s consultation') ?></h4>
                        <a class="m-0 cl-white" href="tel:<?= $social['phone']['value'] ?? '' ?>"><?= $social['phone']['value'] ?? '' ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <p class="call-to-mid cl-white"><?= Lx::t('frontend', 'Our highly qualified doctors are ready to provide you with the necessary medical care at any time of the day.') ?></p>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <a href="<?=Url::to(['contact'])?>" class="btn btn-white"><?= Lx::t('frontend', 'Get Consultation') ?></a>
            </div>
        </div>
    </div>
</section>