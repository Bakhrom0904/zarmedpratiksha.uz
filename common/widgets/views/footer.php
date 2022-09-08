<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<footer class="footer bg-blue">
    <div class="footer-wrap bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 pt-md-3 pt-lg-0">
                    <div class="f-maincontent bg-white border-start bw-3 bc-green">
                        <?= Html::a('<img src="/backend/web/img/logo.svg" style="max-width: 200px" alt="image"/>', Url::to('/')) ?>
                        <p class="mt-3">
                            <?= Lx::t('frontend', 'ZARMED PRATIKSHA Bog\'ishamol is the first clinic in Uzbekistan, which has become a model of the highest healthcare standards due to the combination of highly qualified specialists, the latest equipment and modern infrastructure.') ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ps-lg-4 pt-md-3 pt-lg-0">
                    <div class="ft-lists">
                        <h3 class="cl-white text-uppercase"><?= Lx::t('frontend', 'ZARMED PRATIKSHA') ?></h3>
                        <div class="ft-lists">
                            <ul class="d-flex flex-column">
                                <li><a class="cursor-pointer"><?= Lx::t('frontend', 'Isaeva str 20, Samarkand, Uzbekistan') ?></a></li>
                                <li><a href="tel:<?= $social['phone']['value'] ?? '' ?>"><?= $social['phone']['value'] ?? '' ?></a></li>
                                <li><a class="cursor-pointer"><?= Lx::t('frontend', 'Tajikistan') ?></a></li>
                                <li><a href="mailto:<?= $social['email']['value'] ?? '' ?>"><?= $social['email']['value'] ?? '' ?></a></li>
                            </ul>
                        </div>
                        <form>
                            <div class="form-group">
                                <a href="<?=Url::to(['jobs'])?>"
                                   class="btn bg-white text-blue w-100 mt-1"><?= Lx::t('frontend', 'Apply For a Job') ?></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 ps-lg-4 pt-md-3 pt-lg-0">
                    <div class="ft-lists">
                        <h3 class="cl-white"><?= Lx::t('frontend', 'Useful Links') ?></h3>
                        <ul class="d-flex flex-column">
                            <?php foreach ($menu as $item) {
                                if ($item['submenu']) {
                                    foreach ($item['submenu'] as $child) {
                                        ?>
                                        <li><a href="<?= Url::to([$child['route']]) ?>"><?= $child['name'] ?></a></li>
                                    <?php }
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ps-lg-4 pt-md-3 pt-lg-0">
                    <div class="ft-lists">
                        <h3 class="cl-white"><?= Lx::t('frontend', 'Our Departments') ?></h3>
                        <ul class="d-flex flex-column">
                            <?php foreach ($departments as $department) {
                                if (mb_strlen($department->name, 'UTF-8') < 40) { ?>
                                <li>
                                    <?= Html::a($department->name, Url::to(['department-services', 'id' => $department->id]), ['class' => 'text-capitalize']) ?>
                                </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-orange p-4 row justify-content-end m-0">
        <div class="col-md-3 text-white small">
            <span>
                <?= Lx::t('frontend', 'Powered by') ?>:
            </span>
            <a href="https://nimbus.uz">
                <i class="fa fa-cloud-bolt"></i> Nimbus</a>
        </div>
    </div>
</footer>