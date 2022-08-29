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

use common\models\Days;

$lang = Yii::$app->language;
$deps = \common\models\Department::find()->select(['id', "name_$lang"])->asArray()->all();
$deps = ArrayHelper::map($deps, 'id', "name_$lang");
/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
 <?php
    $items = [
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
    <?=TabsX::widget([
        'items'=>$items,
        'position'=>TabsX::POS_LEFT,
        'bordered'=>true,
        'sideways'=>true,
        'encodeLabels'=>false,
        'tabContentOptions' => ['style' => 'width: 100%']
    ]);?>
        
        <div class="row mt-3">
            <div class="col-md-2">
                <?=$form->field($model, 'experience')->textInput(['type'=>'number']);?>
            </div>
            <div class="col-md-3">
                <?=$form->field($model, 'phone')->textInput();?>
            </div>
            <div class="col-md-3">
                <?=$form->field($model, 'department_id')->widget(Select2::classname(), [
                    'data' => $deps,
                    'options' => ['placeholder' => Lx::t('backend', "Select a department...")],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'img')->widget(InputFile::className(), [
                    'language'      => $lang,
                    'controller'    => 'elfinder',
                    'filter'        => 'image',
                    'buttonName'    => Lx::t('backend', 'Choose'),
                    'template'      => '<div class="row">{input}{button}</div>',
                    'options'       => ['class' => 'form-control'],
                    'buttonOptions' => ['class' => 'btn btn-info', 'style'=>'margin-top: 0; padding: 0.375rem 1rem; position: absolute; right: 0;'],
                    'multiple'      => false       
                ]); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <?= $form->field($model, 'date')->widget(MultipleInput::className(), [
                'min' => 1,
                'max' => 7,
                'iconSource' => 'fa',
                'addButtonPosition' => MultipleInput::POS_HEADER,
                'addButtonOptions' => ['class' => 'btn btn-primary', "style"=>"margin-top: 0; min-width: 40px;"],
                'removeButtonOptions' => ['class' => 'btn btn-danger', 'style' => 'margin-top: 0 !important;'],
                'columns' => [
                    [
                        'name'  => 'day',
                        'title' => Lx::t('backend', 'Day of the week'),
                        'type' => Select2::className(),
                        'options' => [
                            'data' => Days::get(),
                            'class' => 'form-control'
                        ],
                    ],
                    [
                        'name'  => 'time_start',
                        'title' => Lx::t('backend', 'from'),
                        'type' => TimePicker::classname(),
                        'options' => [
                            'class' => 'form-control',
                            'pluginOptions' => [
                                'showMeridian' => false,
                                'minuteStep' => 15,
                                'secondStep' => 15,
                            ],
                            'addonOptions' => [
                                'asButton' => true,
                                'buttonOptions' => ['class' => 'd-none']
                            ],
                            'containerOptions' => ['style' => 'width:70px']
                        ],
                    ],
                    [
                        'name'  => 'time_end',
                        'title' => Lx::t('backend', 'untill'),
                        'type' => TimePicker::classname(),
                        'options' => [
                            'class' => 'form-control',
                            'pluginOptions' => [
                                'showMeridian' => false,
                                'minuteStep' => 15,
                                'secondStep' => 15,
                            ],
                            'addonOptions' => [
                                'asButton' => true,
                                'buttonOptions' => ['class' => 'd-none']
                            ],
                            'containerOptions' => ['style' => 'width:70px']
                        ],
                    ],
                ]
            ])?>
            </div>
        </div>
        <?= Html::submitButton(Yii::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
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