<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;
use kartik\select2\Select2;
$lang = Yii::$app->language;
$deps = \common\models\Department::find()->select(['id', "name_$lang"])->asArray()->all();
$deps = ArrayHelper::map($deps, 'id', "name_$lang");
/* @var $this yii\web\View */
/* @var $model common\models\DoctorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    'options' => [
        'data-pjax' => 0
    ],
]); ?>
    <div class="row">
        <div class="col-md-5">
            <?=$form->field($model, 'department_id')->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a department...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'experience')->textInput(['type'=>'number']) ?>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-2">
                <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
