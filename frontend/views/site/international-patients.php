<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use lajax\translatemanager\helpers\Language as Lx;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Modal;
use yii\helpers\Html;

$this->title = Yii::t('frontend', "ZARMED PRATIKSHA") . " | " . Yii::t('frontend', 'International Patients');
?>
<?= \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]) ?>
<?= Banner::widget(['title' => $this->title]) ?>

<section class="blog-main blg-listings">
    <div class="container">
        <div class="sc-title-two text-center">
            <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'International Patients') ?></h4>
            <h2><?= Lx::t('frontend', 'Useful Information For Our International Patients') ?></h2>
        </div>
        <div class="blog-wrap mb-xs-3">
            <div class="mb-2">
                <div class="text-right" id="google_translate_element"></div>
            </div>
            <?= $page->content ?></div>
    </div>
</section>

<?= Consult::widget(['social' => $this->params['social']]) ?>

<?php
Modal::begin([
    'centerVertical' => true,
    'toggleButton' => ['label' => '', 'id' => 'modal-btn', 'class' => 'd-none'],
    'class' => 'bg-danger'
]);
$form = ActiveForm::begin();
echo '<div class="text-center text-muted mb-3"><i class="fa fa-phone fa-3x"></i>
<h3 class="mt-2 mb-0 text-muted">' . Lx::t('frontend', 'WANT WE TO CALL YOU BACK?') . '</h3>
<span class="small">' . Lx::t('frontend', 'REQUEST A CALL BACK') . '</span>
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
     setTimeout(function() {
         jQuery('#modal-btn').click()
     }, 10000);
 JS;

$this->registerJs($js, \yii\web\View::POS_READY);
?>
