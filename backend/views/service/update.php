<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\Service */

$this->title = Lx::t('backend', 'Update service: {name}', [
    'name' => $model->{"name_$lang"},
]);
$this->params['breadcrumbs'][] = ['label' => Lx::t('backend', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{"name_$lang"}, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Lx::t('backend', 'Update');
?>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
