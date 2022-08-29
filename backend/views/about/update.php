<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = Yii::t('backend', 'Update About: {name}', [
    'name' => $model->{"title_$lang"},
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Abouts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->{"title_$lang"}, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
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
