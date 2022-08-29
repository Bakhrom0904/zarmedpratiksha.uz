<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;
use kartik\select2\Select2;

$lang = Yii::$app->language;

$deps = \common\models\Doctor::find()->select(['id', "CONCAT(first_name_$lang, ' ', last_name_$lang, ' ', middle_name_$lang) as fullname"])->asArray()->all();
$deps = ArrayHelper::map($deps, "id", "fullname");

$ser = \common\models\Service::find()->select(['id', "name_$lang"])->asArray()->all();
$ser = ArrayHelper::map($ser, "id", "name_$lang");

/* @var $this yii\web\View */
/* @var $model common\models\ArticlesSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="articles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-4">
            <?=$form->field($model, 'doctor_id')->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a doctor...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'service_id')->widget(Select2::classname(), [
                'data' => $ser,
                'options' => ['placeholder' => Lx::t('backend', "Select a service...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, "title_$lang");?>
        </div>
    </div>
        


    <div class="form-group mt-2">
        <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
