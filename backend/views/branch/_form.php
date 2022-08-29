<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $model common\models\Branch */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, "title_uz") ?>
<?= $form->field($model, "title_ru") ?>
<?= $form->field($model, "title_en") ?>
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>

<style>
    .js-input-plus, .js-input-remove {
        margin-top: 0;
        min-width: 40px;
        padding: 8px 0;
        height: 35px;
    }
    .fa-plus, .fa-times  {
        margin: 0 !important;
    }
    .multiple-input-list__item td {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
