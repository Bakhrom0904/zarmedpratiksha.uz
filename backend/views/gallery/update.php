<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */
$lang = Yii::$app->language;

$this->title = Lx::t('backend', 'Update gallery: {name}', [
    'name' => $model->{"title_$lang"},
]);
$this->params['breadcrumbs'][] = ['label' => Lx::t('backend', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{"title_$lang"}, 'url' => ['view', 'id' => $model->id]];
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
