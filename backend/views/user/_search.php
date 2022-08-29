<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $model backend\models\UserSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'username') ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'email') ?>
        </div>
    </div>


    <div class="form-group mt-2">
        <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
