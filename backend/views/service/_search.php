<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;
use kartik\select2\Select2;
$lang = Yii::$app->language;
$deps = \common\models\Department::find()->select(['id', "name_$lang"])->asArray()->all();
$deps = ArrayHelper::map($deps, 'id', "name_$lang");
$ser = \common\models\Service::find()->select(['id', "name_$lang"])->where(['parent_id' => null])->asArray()->all();
$ser = ArrayHelper::map($ser, "name_$lang", "name_$lang");
/* @var $this yii\web\View */
/* @var $model common\models\ServiceSearch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    'options' => [
        'data-pjax' => 1
    ],
]); ?>
    <div class="row mb-4">   
        <div class="col-md-3">
            <?=$form->field($model, 'department_id')->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a department...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'parent_id')->widget(Select2::classname(), [
                'data' => $ser,
                'options' => ['placeholder' => Lx::t('backend', "Select parent...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, "name_$lang") ?>
        </div>
        <div class="col-md-3">
            <div class="form-group mt-2">
                <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>

