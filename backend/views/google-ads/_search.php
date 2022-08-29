<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $model common\models\GoogleAdsSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="google-ads-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'status') ?>

    <div class="form-group mt-2">
        <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
