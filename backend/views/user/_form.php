<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use mihaildev\elfinder\InputFile;
use unclead\multipleinput\MultipleInput;

use kartik\tabs\TabsX;
use kartik\select2\Select2;
use kartik\time\TimePicker;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group required">
                    <?= $form->field($model, 'username') ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <?php echo $form->field($model, 'email') ?>
                </div>
            </div>
        </div>
        <?php if (Yii::$app->controller->action->id!='update'):?>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group required">
                        <?= $form->field($model, 'password')->textInput(['type'=>'password']) ?>
                    </div>
                </div>
            </div>
        <?php endif ?>

    <?= Html::submitButton(Lx::t('backend', 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
