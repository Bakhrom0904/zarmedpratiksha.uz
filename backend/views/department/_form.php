<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;
use mihaildev\elfinder\InputFile;
use kartik\tabs\TabsX;
use lajax\translatemanager\helpers\Language as Lx;

$lang = Yii::$app->language;
$bra = \common\models\Branch::find()->select(['id', "title_$lang"])->asArray()->all();
$bra = ArrayHelper::map($bra, "id", "title_$lang");
/* @var $this yii\web\View */
/* @var $model common\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
<?php
$items = [
    [
        'label'=>Lx::t('backend', 'Русский'),
        'content'=> '<div class="row">
        <div class="col-md-12 mt-3">
            <div class="form-group">'.
                $form->field($model, 'name_ru')->textInput().
            '</div>
        </div>
        <div class="col-md-12">
            <div class="form-group">'.
                $form->field($model, 'description_ru')->textarea(['rows' => 10]).
            '</div>
        </div>
    </div>',
        'active'=>true
    ],
    [
        'label'=>Lx::t('backend', 'Узбекский'),
        'content'=> '<div class="row">
            <div class="col-md-12 mt-3">
                <div class="form-group">'.
                    $form->field($model, 'name_uz')->textInput().
                '</div>
            </div>
            <div class="col-md-12">
                <div class="form-group">'.
                    $form->field($model, 'description_uz')->textarea(['rows' => 10]).
                '</div>
            </div>
        </div>'
    ],
    [
        'label'=>Lx::t('backend', 'Англиский'),
        'content'=> '<div class="row">
            <div class="col-md-12 mt-3">
                <div class="form-group">'.
                    $form->field($model, 'name_en')->textInput().
                '</div>
            </div>
            <div class="col-md-12">
                <div class="form-group">'.
                    $form->field($model, 'description_en')->textarea(['rows' => 10]).
                '</div>
            </div>
        </div>'
    ],
];
?>
<?=$form->field($model, "branch_id")->widget(Select2::classname(), [
                'data' => $bra,
                'options' => ['placeholder' => Lx::t('backend', "Select a branch...")],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);?>
        <?=TabsX::widget([
            'items'=>$items,
            'position'=>TabsX::POS_LEFT,
            'bordered'=>true,
            'sideways'=>true,
            'encodeLabels'=>false,
            'tabContentOptions' => ['style' => 'width: 100%']
        ]);?>
        
        
        <div class="row">
            <div class="col-md-12">
                <?= $form->field($model, 'img')->widget(InputFile::className(), [
                    'language'      => 'ru',
                    'controller'    => 'elfinder',
                    'filter'        => 'image',
                    'template'      => '<div class="row"><div class="col-md-4 mb-3">{input}</div><div class="col-md-2 mb-3">{button}</div></div>',
                    'options'       => ['class' => 'form-control'],
                    'buttonOptions' => ['class' => 'btn btn-info', 'style'=>'margin-top: 0; padding: 0.375rem 1rem'],
                    'multiple'      => false       
                ]); ?>
            </div>
        </div>
        <?= Html::submitButton(Yii::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
