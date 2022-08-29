<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $model common\models\Doctor */
$lang = Yii::$app->language;

$this->title = Lx::t('backend', 'Update doctor: {name}', [
    'name' => $model->{"last_name_$lang"}." ".$model->{"first_name_$lang"}." ".$model->{"middle_name_$lang"},
]);
$this->params['breadcrumbs'][] = ['label' => Lx::t('backend', 'Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{"last_name_$lang"}." ".$model->{"first_name_$lang"}." ".$model->{"middle_name_$lang"}, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Lx::t('backend', 'Edit');
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
