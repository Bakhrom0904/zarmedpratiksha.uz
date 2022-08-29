<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;
use kartik\select2\Select2;

$pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact'), 'page' => Lx::t('frontend', 'Pages'), 'jobs' => Lx::t('frontend', 'Jobs'), 'about' => Lx::t('frontend', 'About Us'), 'appointment' => Lx::t('frontend', 'Appointment') ];
/* @var $this yii\web\View */
/* @var $model common\models\SeoSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
    <div class="col-md-4">
        <?=$form->field($model, 'page')->widget(Select2::classname(), [
            'data' => $pages,
            'options' => ['placeholder' => Lx::t('backend', "Select a page...")],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);?>
    </div>
    <div class="col-md-4">
        <div class="form-group mt-2">
            <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
        </div>
    </div>
    </div>

    <?php ActiveForm::end(); ?>
