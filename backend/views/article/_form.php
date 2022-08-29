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

$deps = \common\models\Doctor::find()->select(['id', "CONCAT(first_name_$lang, ' ', last_name_$lang, ' ', middle_name_$lang) as fullname"])->asArray()->all();
$deps = ArrayHelper::map($deps, "id", "fullname");

$ser = \common\models\Service::find()->select(['id', "name_$lang"])->asArray()->all();
$ser = ArrayHelper::map($ser, "id", "name_$lang");

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>

<?php     $items = [
        [
            'label'=>Lx::t('backend', 'Русский'),
            'content'=> $this->render("_content", ['lang'=>'ru', 'models'=>$model, 'form'=>$form]),
            'active'=>true
        ],
        [
            'label'=>Lx::t('backend', 'Узбекский'),
            'content'=> $this->render("_content", ['lang'=>'uz', 'models'=>$model, 'form'=>$form]),
        ],
        [
            'label'=>Lx::t('backend', 'Англиский'),
            'content'=> $this->render("_content", ['lang'=>'en', 'models'=>$model, 'form'=>$form]),
        ],
    ];
?>
    <div class="row">
        <div class="col-md-4">
            <?=$form->field($model, 'doctor_id')->widget(Select2::classname(), [
                'data' => $deps,
                'options' => ['placeholder' => Lx::t('backend', "Select a doctor...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'service_id')->widget(Select2::classname(), [
                'data' => $ser,
                'options' => ['placeholder' => Lx::t('backend', "Select a service...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
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
    <div class="col-md-12 mt-3">
        <?= $form->field($model, 'img')->widget(InputFile::className(), [
            'language'      => $lang,
            'controller'    => 'elfinder',
            'filter'        => 'image',
            'template'      => '<div class="row"><div class="col-md-4 mb-3">{input}</div><div class="col-md-2 mb-3">{button}</div></div>',
            'options'       => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-info', 'style'=>'margin-top: 0; padding: 0.375rem 1rem'],
            'multiple'      => false       
        ]); ?>
    </div>
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
