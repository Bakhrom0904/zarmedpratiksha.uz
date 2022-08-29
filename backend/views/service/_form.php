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
$deps = \common\models\Department::find()->select(['id', "name_$lang"])->asArray()->all();
$deps = ArrayHelper::map($deps, 'id', "name_$lang");
$ser = \common\models\Service::find()->select(['id', "name_$lang"])->where(['parent_id' => null])->asArray()->all();
$ser = ArrayHelper::map($ser, "name_$lang", "name_$lang");

/* @var $this yii\web\View */
/* @var $model common\models\Service */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>

<?php     $items = [
        [
            'label'=>Lx::t('backend', 'Русский'),
            'content'=> $this->render("_content", ['lang'=>'ru', 'model'=>$model, 'form'=>$form]),
            'active'=>true
        ],
        [
            'label'=>Lx::t('backend', 'Узбекский'),
            'content'=> $this->render("_content", ['lang'=>'uz', 'model'=>$model, 'form'=>$form]),
        ],
        [
            'label'=>Lx::t('backend', 'Англиский'),
            'content'=> $this->render("_content", ['lang'=>'en', 'model'=>$model, 'form'=>$form]),
        ],
    ];
?>
<div class="row">
<div class="col-md-4 mt-3">
        <div class="form-group required">
            <?=$form->field($model, 'department_id')->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a department...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
    </div>
    <div class="col-md-4 mt-3">
        <div class="form-group">
            <?=$form->field($model, 'parent_id')->widget(Select2::classname(), [
                'data' => $ser,
                'options' => ['placeholder' => Lx::t('backend', "Select parrent...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
    </div>
</div>
    <?=TabsX::widget([
        'items'=>$items,
        'position'=>TabsX::POS_LEFT,
        'bordered'=>true,
        'sideways'=>true,
        'encodeLabels'=>false,
        'tabContentOptions' => ['style' => 'width: 100%']
    ]);?>
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
