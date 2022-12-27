<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;
?>

<section class="case-table p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 pr-lg-0">
                <div class="case-t-wrap bg-dblue">
                    <i class="<?= $social['phone']['icon'] ?> cl-white"></i>
                    <h3 class="cl-white mt-2"><?= Lx::t('frontend', 'Emergency Cases') ?></h3>
                    <p class="cl-white mb-3"></p>
                    <a href="tel:+998557021063" class="btn btn-white btn-na case-c1"><i class="<?= $social['phone']['icon'] ?>"></i> <?= $social['phone']['value'] ?></a>
                </div>
            </div>
            <div class="col-lg-4 p-lg-0">
                <div class="case-t-wrap bg-ftblue0">
                    <i class="far fa-calendar-alt fs-1 cl-white"></i>
                    <h3 class="cl-white mt-2"><?= Lx::t('frontend', 'Doctor Timetable') ?></h3>
                    <p class="cl-white mb-3"></p>
                    <a href="<?=Url::to(['doctors'])?>" class="btn btn-white btn-na case-c2"><i class="fas fa-user"></i>
                        <span style="text-transform: uppercase;"><?= Lx::t('frontend', 'Doctors') ?></span></a>
                </div>
            </div>
            <div class="col-lg-4 pl-lg-0">
                <div class="case-t-wrap bg-dblue">
                    <i class="far fa-file-alt fs-1 cl-white"></i>
                    <h3 class="cl-white mt-2"><?= Lx::t('frontend', 'Request Appoinment') ?></h3>
                    <p class="cl-white mb-3"></p>
                    <a href="<?=Url::to(['appointment'])?>" class="btn btn-white btn-na case-c1"><i class="fas fa-file-alt"></i>
                    <span style="text-transform: uppercase;"><?= Lx::t('frontend', 'Make Appointment') ?></span></a>
                </div>
            </div>
        </div>
    </div>
</section>