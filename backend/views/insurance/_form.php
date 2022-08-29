<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use mihaildev\elfinder\InputFile;
use unclead\multipleinput\MultipleInput;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $model common\models\Insurance */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php if ($model->img != null):?>
        <div class="row">
            <?php foreach (explode(",", $model->img) as $img):?>
                <div class="col-md-3 d-flex align-items-stretch">
                    <img src="<?=$img?>">
                </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'link')?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'img')->widget(InputFile::className(), [
                    'language'      => $lang,
                    'controller'    => 'elfinder',
                    'filter'        => 'image',
                    'template'      => '<div class="row"><div class="col-md-8 mb-3">{input}</div><div class="col-md-2 mb-3">{button}</div></div>',
                    'options'       => ['class' => 'form-control'],
                    'buttonOptions' => ['class' => 'btn btn-info', 'style'=>'margin-top: 0; padding: 0.375rem 1rem'],
                    'multiple'      => false       
                ]); ?>
            </div>
        </div>
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
