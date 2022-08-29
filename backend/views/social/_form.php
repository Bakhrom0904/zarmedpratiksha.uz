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

/* @var $this yii\web\View */
/* @var $model common\models\Social */
/* @var $form yii\bootstrap4\ActiveForm */
?>


<div class="ms-panel-body">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-4">
        <?= $form->field($model, 'icon')->textInput(['class'=>'form-control icp icp-auto', "data-placement"=>"bottomRight"]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'key');?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'value');?>
        </div>
    </div>
    
    <?= Html::submitButton(Lx::t('backend', $model->isNewRecord ? 'Create' : 'Save'), ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
<style>
    .fade.in {
    opacity: 1;
}
</style>
<?php
$js = <<<JS
 $('.icp-auto').on('click', function () {
    $('.icp-auto').iconpicker({hideOnSelect: true,});
    }).trigger('click');
    
JS;
$this->registerJS($js, \Yii\web\View::POS_END);
    ?>
<!-- <script>
  $(function () {

    $('.action-create').on('click', function () {
    }).trigger('click');
    $('.icp').on('iconpickerSelected', function (e) {
      $('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
        e.iconpickerInstance.options.iconBaseClass + ' ' +
        e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
    });
  });
</script> -->
