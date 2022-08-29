<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;

$lang = Yii::$app->language;
/* @var $this yii\web\View */
/* @var $model common\models\JobSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="job-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, "title_$lang") ?>

    <div class="form-group mt-2">
        <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
