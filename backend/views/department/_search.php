<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use lajax\translatemanager\helpers\Language as Lx;
use kartik\select2\Select2;
$lang = Yii::$app->language;
$deps = \common\models\Department::find()->select(['id', "name_$lang"])->asArray()->all();
$deps = ArrayHelper::map($deps, "name_$lang", "name_$lang");
$bra = \common\models\Branch::find()->select(['id', "title_$lang"])->asArray()->all();
$bra = ArrayHelper::map($bra, "id", "title_$lang");
/* @var $this yii\web\View */
/* @var $model common\models\DepartmentSearch */
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
         <div class="col-md-4">
            <?=$form->field($model, "branch_id")->widget(Select2::classname(), [
                'data' => $bra,
                'options' => ['placeholder' => Lx::t('backend', "Select a branch...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, "name_$lang")->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a department...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
       
        <div class="col-md-4">
            <div class="form-group mt-2">
                <?= Html::submitButton(Lx::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Lx::t('backend', 'Reset'), 'index', ['class' => 'btn btn-outline-secondary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
