<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\MediaCoverage */

$this->title = Yii::t('backend', 'Create Media Coverage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Media Coverages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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