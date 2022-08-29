<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;

?>

<div class="side-add bg-dblue text-center p-4 mb-3">
    <a href="#">
        <i class="fas fa-headset cl-white fsc-1"></i>
        <h3 class="cl-white mt-3 mt-3"><?= Lx::t('frontend', 'Online Help!') ?></h3>
        <h3 class="cl-white"><?= $social['phone']['value'] ?? '' ?></h3>
    </a>
</div>
<div class="appoint-form bg-white">
    <h3><?= Lx::t('frontend', 'Get Appointment') ?></h3>
    <p class="mb-3"><?= Lx::t('frontend', 'Get an online appointment to this doctor.') ?></p>
    <a href="<?=Url::to(['appointment'])?>"
       class="btn bg-blue w-100"><?= Lx::t('frontend', 'Book Appointment') ?> </a>
</div>