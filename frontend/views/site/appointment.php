<?php

/** @var yii\web\View $this */

use common\widgets\Appointment;
use common\widgets\Banner;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\Pjax;
use yii\helpers\Url;

$social = $this->params['social'];
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA") . " | " . Yii::t('frontend', 'Appointment');
?>
<?= \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]) ?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="appointment bg-sfgrey-3">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Book Appointment') ?></h4>
                <h2><?= Lx::t('frontend', 'Now Book your appointments online') ?></h2>
            </div>
            <div class="row align-items-stretch flex-mxl-column-reverse">
                <div class="col-lg-6 col-md-12">
                    <div class="appoint-form mb-xs-0">
                        <?php Pjax::begin() ?>
                            <?php $form = ActiveForm::begin(['options' => ['class' => 'row g-3']]) ?>
                            <div class="col-md-12 px-2">
                                <?= $form->field($model, 'department_id')->dropdownList(ArrayHelper::map($departments, 'id', function ($item) {
                                    // return $item->branch->title . ' - ' . $item->name;
                                    return $item->name;
                                }), ['id' => 'department', 'class' => 'niceSelect', 'prompt' => Lx::t('frontend', 'Select Department')])->label(false) ?>
                            </div>
                            <div class="col-md-12 px-2">
                                <?= $form->field($model, 'doctor_id')->dropdownList([], ['id' => 'doctor', 'class' => 'niceSelect', 'prompt' => Lx::t('frontend', 'Select Doctor')])->label(false) ?>
                            </div>
                            <div class="col-md-12 px-2">
                                <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                                    'language' => \Yii::$app->language,
                                    'dateFormat' => 'yyyy-MM-dd',
                                ])->input('text', ['placeholder' => Lx::t('frontend', 'Select Date')])->label(false) ?>
                            </div>
                            <div class="col-12 px-2">
                                <?= $form->field($model, 'time_id', ['options' => ['class' => 'd-none']])->hiddenInput()->label(false) ?>
                                <div id="time" class="d-none text-justify container bg-white mb-2 p-3 border rounded"></div>
                            </div>
                            <div class="col-md-6 px-2">
                                <?= $form->field($model, 'fullname')->textInput(['placeholder' => Lx::t('frontend', 'Full Name')])->label(false) ?>
                            </div>
                            <div class="col-md-6 px-2">
                                <?= $form->field($model, 'phone')->textInput(['placeholder' => Lx::t('frontend', 'Phone Number')])->label(false) ?>
                            </div>
                            <div class="col-12 text-center px-2">
                                <?= Html::submitButton(Lx::t('frontend', 'Book An Appointment'), ['class' => 'btn bg-blue']) ?>
                            </div>
                            <?php ActiveForm::end() ?>
                        <?php Pjax::end() ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ps-lg-5">
                    <div class="sc-title-two sc-border-left sc-border-none appoint-info w-100 mb-xs-0">
                        <i class="fas fa-calendar-check bg-dblue"></i>
                        <h2 class="mt-3 mb-3"><?= Lx::t('frontend', 'Book an Appointment with the Doctor') ?></h2>
                        <h3 class="mt-3 mb-3"><?= Lx::t('frontend', 'Call') . ': ' . $this->params['social']['phone']['value'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="sc-title-two text-center">
                <h2><?= Lx::t('frontend', 'Doctors of the Department') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($doctors as $doctor) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-wrap position-relative mb-10 text-center">
                            <div class="team-img position-relative rounded-2 overflow-hidden before-x doctor-card">
                                <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                            </div>
                            <div class="team-name-ab bx-shadow pt-4 pb-2">
                                <?= Html::a(' <h4 class="text-capitalize">' . $doctor->fullname . '</h4><p class="cl-green">' . $doctor->department->name . '</p>', ['doctor-profile', 'id' => $doctor->id]) ?>
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

    <section class="how-it-works bgc-sfgrey-3 pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="sc-title-two sc-border-left appoint-info mb-8 w-100">
                        <i class="fas fa-phone-volume bg-lgreen"></i>
                        <h3 class="mt-2"><?= Lx::t('frontend', 'Need An Emergecny Help') ?></h3>
                        <h2 class="fs-1 mb-3"><?= Lx::t('frontend', 'Call') . ': ' . $social['phone']["value"] ?> </h2>
                    </div>
                    <div class="appoint-detail">
                        <p><?= Lx::t('frontend', 'If any serious side effects occur, the healthcare provider or an emergency service provider should be called immediately.') ?></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="hotline-img pl-4 pr-4">
                        <img src="/images/inner/n-e1633078810928.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= Consult::widget(['social' => $this->params['social']]) ?>