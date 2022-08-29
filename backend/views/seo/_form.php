<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

$pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact'), 'page' => Lx::t('frontend', 'Pages'), 'jobs' => Lx::t('frontend', 'Jobs'), 'about' => Lx::t('frontend', 'About Us'), 'appointment' => Lx::t('frontend', 'Appointment') ];
/* @var $this yii\web\View */
/* @var $model common\models\Seo */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'page')->widget(Select2::classname(), [
        'data' => $pages,
        'options' => ['placeholder' => Lx::t('backend', "Select a page...")],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>
    <?=$form->field($model, 'desc')->textArea(['rows'=>3]);?>    
    <?=$form->field($model, 'keyw')->textArea(['rows'=>3]);?>    
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>