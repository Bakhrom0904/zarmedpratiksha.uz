<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use mihaildev\elfinder\InputFile;
use unclead\multipleinput\MultipleInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

use kartik\tabs\TabsX;
use kartik\select2\Select2;
use kartik\time\TimePicker;

use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;


/* @var $this yii\web\View */
/* @var $model common\models\GoogleAds */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
        <?=$form->field($model, "url")?>
        <?=$form->field($model, "content")->widget(CKEditor::className(),[
            'editorOptions' => ElFinder::ckeditorOptions('elfinder', [
                'options' => ['rows' => 20],
                'preset' => 'standart', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],)
        ]);?>
         <?=$form->field($model, 'status')->widget(Select2::classname(), [
            'data' => [0=>Lx::t('backend', 'Inactive'), 1=>Lx::t('backend', 'Active')],
            'options' => ['placeholder' => Lx::t('backend', "Select status...")],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);?>
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>

