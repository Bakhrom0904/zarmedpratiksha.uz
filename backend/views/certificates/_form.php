<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use mihaildev\elfinder\InputFile;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $model common\models\Certificates */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row mt-3">
        <?php if ($model->img != ''):?>
            <div class="col-md-6">
                <img src='<?=Yii::$app->request->hostInfo.$model->img?>' class='img-fluid'>
            </div>
        <?php endif?>
        <div class="col-md-12">
            <?= $form->field($model, 'img')->widget(InputFile::className(), [
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
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
