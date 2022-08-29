<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = Yii::t('backend', 'Change password');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id'=>$model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-panel">
    <div class="ms-panel-header ms-panel-custome">
        <h6><?= Html::encode($this->title) ?></h6>
    </div>
    <div class="ms-panel-body">
        <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'cur_password')->textInput(['type'=>'password']); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'password')->textInput(['type'=>'password']); ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'confirm')->textInput(['type'=>'password']); ?>
                </div>
            </div>
        
            <?= Html::submitButton(Lx::t('backend', 'Save'), ['class' => 'btn btn-success']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>