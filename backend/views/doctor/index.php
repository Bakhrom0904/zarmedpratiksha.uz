<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DoctorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Lx::t('backend', 'Doctors');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xl-12">
        <div class="ms-panel">
            <div class="ms-panel-header  ms-panel-custome">
                <h6><?=Lx::t('backend', 'List of doctors')?></h6>
                <?= Html::a(Lx::t('backend', 'Add a doctor'), ['create'], ['class' => 'ms-text-primary']) ?>
            </div>
        </div>
    </div>
</div>

<div class='row'>
    <div class="col-xl-12 col-md-12">
        <div class="ms-panel p-3">
            <?= $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
</div>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
        'itemOptions' => ['class' => 'col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch'],
        'layout' => "<div class='row'><div class=\"pl-3 mb-3\">{summary}</div></div><div class='row'>{items}</div><div class='row'>\n{pager}</div>" 
    ]) ?>
<style>
    .ms-img-round {
        width: 120px !important;
    }
</style>