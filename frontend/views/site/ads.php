<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
?>

<!-- <div class="container text-right mt-5 position-fixed" style="bottom: 10px; right: 10px;">
    <button id="btn" class="btn btn-sm bg-blue p-3 rounded-circle"><i class="fa fa-phone-volume fa-2x"></i></button>
</div> -->

<?= $content ?>

<?php

\dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]);

Modal::begin([
    'centerVertical' => true,
    'toggleButton' => ['label' => '', 'id' => 'modal-btn', 'class' => 'd-none'],
    'class' => 'bg-danger'
]);
$form = ActiveForm::begin();
echo '<div class="text-center text-muted mb-3"><i class="fa fa-phone fa-3x"></i>
<h3 class="mt-2 mb-0 text-muted">' . Lx::t('frontend', 'REQUEST A CALL BACK') . '</h3>
<span class="small">' . Lx::t('frontend', 'Have Queries Before The Appointment?') . '</span>
</div>';

echo '<div class="row"><div class="col-sm-6">';
echo $form->field($model, 'name', [
    'template' => '<div class="form-outline">{label}{input}</div>'
])->textInput(['class' => 'form-control form-control-sm sm bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Full Name'));
echo '</div>';
echo '<div class="col-sm-6">';
echo $form->field($model, 'phone', [
    'template' => '<div class="form-outline ">{label}{input}</div>'
])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Phone Number'));
echo '</div></div>';
echo $form->field($model, 'email', [
    'template' => '<div class="form-outline">{label}{input}</div>'
])->textInput(['class' => 'form-control bg-sfgrey-2 border border-light-c'])->label(Lx::t('frontend', 'Email Address'));

echo '<div class="text-right">' . Html::submitButton(Lx::t('frontend', 'Send Request'), ['class' => 'btn btn-lightblue w-100']) . '</div>';
ActiveForm::end();
Modal::end();

$js = <<<JS
    jQuery('#btn').click(function() {
        jQuery('#modal-btn').click();
    });
JS;

$this->registerJs($js, \yii\web\View::POS_READY);
?>
