<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $model common\models\Department */
switch(Yii::$app->language){
    case "uz": $dep = $model->name_uz; break;
    case "ru": $dep = $model->name_ru; break;
    case "en": $dep = $model->name_en; break;
}
$this->title = Lx::t('backend', 'Update department: {name}', [
    'name' => $dep,
]);
$this->params['breadcrumbs'][] = ['label' => Lx::t('backend', 'Departments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $dep, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Lx::t('backend', 'Update');
?>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6><?=$this->title?></h6>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
