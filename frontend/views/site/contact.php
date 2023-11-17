<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\captcha\Captcha;

$social = $this->params['social'];
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA") . " | " . Yii::t('frontend', 'Contacts');
?>
<?= Banner::widget(['title' => $this->title]) ?>
<?= \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]) ?>

<section class="contact-us">
    <div class="container">
        <div class="sc-title-two text-center">
            <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Let Us Help You') ?></h4>
            <h2><?= Lx::t('frontend', 'CONTACT US') ?></h2>
        </div>
        <div class="row mb-7">
            <div class="col-lg-4 col-md-6">
                <div class="ct-detail-list d-flex align-items-center border border-light-c1 bg-sfgrey-2 p-4 mb-3 h-100">
                    <i class="<?= $social['phone']["icon"] ?>"></i>
                    <div class="pl-4">
                        <h3><a class="text-dark" href="tel:<?= $social['phone']["value"] ?? '' ?>"><?= $social['phone']["value"] ?? '' ?></a></h3>
                        <p class="mb-0"><?= Lx::t('frontend', 'Call Today') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ct-detail-list d-flex align-items-center border border-light-c1 bg-sfgrey-2 p-4 mb-3 h-100">
                    <i class="<?= $social['email']["icon"] ?>"></i>
                    <div class="pl-4">
                        <h3><a href="mailto:<?= $social['email']["value"] ?>" class="text-dark __cf_email__"
                               data-cfemail="bdd4d3dbd2fddcc4c8cfcbd8d9d4de93ded2d0"><?= $social['email']["value"] ?></a>
                        </h3>
                        <p class="mb-0"><?= Lx::t('frontend', 'Feel Free To Mail Us') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ct-detail-list d-flex align-items-center border border-light-c1 bg-sfgrey-2 p-4 mb-3 h-100">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="pl-4">
                        <div class="h5 text-dark" style="font-weight: 600;"><?= Lx::t('frontend', 'Isaeva str 20, Samarkand, Uzbekistan') ?></div>
                        <p class="mb-0"><?= Lx::t('frontend', 'Find Our Location') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-3">
            <iframe style="width: 100%; margin:2px auto;" height="420" src="https://www.youtube.com/embed/ysK1zeIfySY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'name', [
                    'template' => '<div class="form-outline mb-3">{input}</div>'
                ])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c', 'placeholder' => Lx::t('frontend', 'Full Name')])->label('') ?>
                <?= $form->field($model, 'phone', [
                    'template' => '<div class="form-outline mb-3">{input}</div>'
                ])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c', 'placeholder' => Lx::t('frontend', 'Phone Number')])->label('') ?>
                <?= $form->field($model, 'email', [
                    'template' => '<div class="form-outline mb-3">{input}</div>'
                ])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c', 'placeholder' => Lx::t('frontend', 'Email Address')])->label('') ?>
                <?= $form->field($model, 'message', [
                    'template' => '<div class="form-outline mb-3">{input}</div>'
                ])->textarea(['class' => 'form-control bg-sfgrey-2 border border-light-c', 'placeholder' => Lx::t('frontend', 'Message'), 'rows' => 4])->label('') ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <?= Html::submitButton(Lx::t('frontend', 'Send Message'), ['class' => 'btn bg-blue']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>


<section class="team">
    <div class="container">
        <div class="sc-title-two text-center">
            <h2 class="text-uppercase"><?= Lx::t('frontend', 'Our Leading Specialists') ?></h2>
        </div>
        <div class="row">
            <?php foreach ($doctors as $doctor) { ?>
                <div class="col-lg-3 col-md-6">
                    <div class="team-wrap position-relative mb-10 text-center">
                        <div class="team-img position-relative rounded-2 overflow-hidden before-x doctor-card">
                            <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                        </div>
                        <div class="team-name-ab bx-shadow pt-4 pb-2">
                            <?= Html::a(' <h4 class="text-capitalize">' . $doctor->fullname . '</h4>', ['doctor-profile', 'id' => $doctor->id]) ?>
                            <?php if($doctor->id==2 && Yii::$app->language=='ru')
                                    {?>
                                        <p class="cl-green" style="flex: 1">Главный врач</p>
                                    <?php
                                    }
                                    elseif($doctor->id==2 && Yii::$app->language=='uz')
                                    {?>
                                        <p class="cl-green" style="flex: 1">Bosh shifokor</p>
                                   <?php
                                   }
                                   elseif($doctor->id==2 && Yii::$app->language=='en')
                                    {?>
                                        <p class="cl-green" style="flex: 1">Chief Medical Officer</p>
                                   <?php
                                   }
                                    else
                                    {?>
                                        <p class="cl-green" style="flex: 1"><?= $doctor->department->name ?></p>
                                   <?php
                                   }?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="btn-wrap text-center">
            <a href="<?= Url::to('doctors') ?>" class="btn bg-blue"><?= Lx::t('frontend', 'View All Here') ?></a>
        </div>
    </div>
</section>

<?= Consult::widget(['social' => $this->params['social']]) ?>
