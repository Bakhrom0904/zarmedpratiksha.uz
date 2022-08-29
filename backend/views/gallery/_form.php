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
/* @var $model common\models\Gallery */
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
    <?php if ($model->path != ''):?>
        <div class="row mt-3 align-items-center">
            <div class="col-md-6">
                <div class="ms-panel" style="min-height: 400px">
                    <div class="ms-panel-header">
                        <h6><?=Lx::t('backend', "Photo")?></h6>
                    </div>
                    <?php 
                        $carousel_items = ''; 
                        $carousel_indicator = '';
                        foreach(explode(',', $model->path) as $i => $img){
                            $carousel_items .= "<div class='carousel-item ".($i==0 ? 'active':'')."'><img class='d-block w-100' src='$img' alt='".$model->{"title_$lang"}."'></div>";
                            $carousel_indicator .= "<li data-target='#imagesSlider' data-slide-to='$i' class='".($i==0?'active':'')."'> <img class='d-block w-100' src='$img' alt='".$model->{"title_$lang"}."'></li>";
                        } ?>
                    <div class="ms-panel-body">
                        <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?=$carousel_items?>
                        </div>
                        <ol class="carousel-indicators">
                            <?=$carousel_indicator?>    
                        </ol>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <?php endif; ?>    
    <div class="row mt-3">
        <div class="col-md-12">
            <?= $form->field($model, 'path')->widget(InputFile::className(), [
                'language'      => $lang,
                'controller'    => 'elfinder',
                'filter'        => 'image',
                'buttonName'    => Lx::t('backend', 'Choose'),
                'template'      => '{input}{button}',
                'options'       => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-info', 'style'=>'margin-top: 0; padding: 0.375rem 1rem; position: absolute; right: 15px; top: 29px;'],
                'multiple'      => true       
            ]); ?>
        </div>
    </div>
        <?= Html::submitButton(Yii::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>


