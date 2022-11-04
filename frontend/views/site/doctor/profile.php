<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;
$lang = Yii::$app->language;
$this->title = Lx::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Our Doctors');
?>
<?= Banner::widget(['title' => $this->title]) ?>
<?php if (!is_null($doctor)) { ?>
    <section class="doc-profile bg-sfgrey-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="doctor-img bg-white text-center p-4">
                        <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                        <h3 class="text-capitalize"><?= $doctor->fullname ?></h3>
                        <p class="cl-green"><?= $doctor->department->name ?></p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="doctor-details bg-white p-4">
                    <div class="appoint-form bg-white">
                        <h3><?= Lx::t('frontend', 'Get Appointment') ?></h3>
                        <p class="mb-3"><?= Lx::t('frontend', 'Get an online appointment to this doctor.') ?></p>
                        <a href="<?= Url::to('appointment') ?>"
                           class="btn bg-blue w-100"><?= Lx::t('frontend', 'Book Appointment') ?> </a>
                    </div>
                        <div class="doc-detail-mid bg-sfgrey-2 border border-light-c1 p-4 mb-3">
                            <div class="d-flex align-items-center border-bt-dash border-light-c pb-2 mb-2">
                                <div class="w-25">
                                    <i class="fas fa-chevron-right"></i>
                                    <span class="cl-blue fw-bold"><?= Lx::t('frontend', 'Qualification') ?></span>
                                </div>
                                <div class="w-75"><span><?= $doctor->department->name ?></span></div>
                            </div>
                            <div class="d-flex align-items-center border-bt-dash border-light-c pb-2 mb-2">
                                <div class="w-25">
                                    <i class="fas fa-chevron-right"></i>
                                    <span class="cl-blue fw-bold"><?= Lx::t('frontend', 'Experience') ?></span>
                                </div>
                                <div class="w-75">
                                    <span><?= $doctor->experience . ' ' . Lx::t('frontend', 'Years') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="doc-detail-desc pt-0 mt-n5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="doc-desc-wrap bg-white">
                        <div class="desc-1 mb-3">
                            <h3 class="border-bt-dash border-light-c2 pb-1"><?= Lx::t('frontend', 'Doctor Quality') ?></h3>
                            <div class="about-detail">
                                <ul class="d-flex flex-wrap mt-0 mb-3">
                                    <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Professional Doctors') ?>
                                    </li>
                                    <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Online Support 24/7') ?></li>
                                    <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Digital Laboratory') ?></li>
                                    <li class="w-50"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Favorable Packages') ?></li>
                                    <li class="w-50 border-lg-0"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'Online appointment for a consultation') ?>
                                    </li>
                                    <li class="w-50 border-lg-0"><i class="fas fa-circle cl-green" style="font-size: 12px"></i><?= Lx::t('frontend', 'And More...') ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="desc-2 mb-3">
                            <h3 class="border-bt-dash border-light-c2 pb-1"><?= Lx::t('frontend', 'Doctor Skills') ?></h3>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <span class="cl-blue"><?= Lx::t('frontend', 'Patient Satisfaction') ?></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <span class="cl-blue"><?= Lx::t('frontend', 'Achieve A Specific Goal') ?></span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                             aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desc-3">
                            <h3 class="border-bt-dash border-light-c2 pb-1"><?= Lx::t('frontend', 'Biography') ?></h3>
                            <div class="dc-description default__p">
                                <p class="text-justify" style="text-indent: 30px">
                                    <?= $doctor->about ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    
                    <div class="doc-side-img text-center">
                        <img src="/images/shape/Epidemic-line-01-01.png" class="w-75" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?= Consult::widget(['social' => $this->params['social']]) ?>