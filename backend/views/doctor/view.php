<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;
/* @var $this yii\web\View */
/* @var $model common\models\Doctor */

$this->title = $model->{"last_name_$lang"}." ".$model->{"first_name_$lang"}." ".$model->{"middle_name_$lang"};
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Doctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="col-xl-12">
    <div class="ms-panel">
        <div class="ms-panel-header  ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
            <div>
                <?= Html::a("<i class='fas fa-pencil-alt'></i> ".Lx::t('backend', 'Edit'), ['update', 'id' => $model->id], ['class' => 'ms-text-primary pr-3']) ?>
                <?= Html::a("<i class='fas fa-trash-alt'></i> ".Lx::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
                    'class' => 'ms-text-danger',
                    'data' => [
                        'confirm' => Lx::t('backend', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'img',
                'format' => 'raw',
                'value' => function($model){
                    return "<img src='".$model->img."' style='width: 200px !important; max-width: 200px;'>";
                }
            ],
            [
                'attribute' => 'department_id',
                'value'     => function($model){
                    $lang = Yii::$app->language;
                    return $model->department->{"name_$lang"};
                }

            ],
            'first_name_uz',
            'last_name_uz',
            'middle_name_uz',
            'first_name_ru',
            'last_name_ru',
            'middle_name_ru',
            'first_name_en',
            'last_name_en',
            'middle_name_en',
            'phone',
            [ 
                'attribute'    =>  'date',
                'format'    => 'raw',
                'value'     =>  function($model){
                    $days = \common\models\Days::get();
                    $txt = '';
                    foreach($model->date as $date){
                        $txt.=$days[$date['day']].", (".$date['time_start']."-".$date['time_end'].")<br>";
                    }
                    return $txt;
                }
            ],
            
            'experience:ntext',
            'about_uz:ntext',
            'about_ru:ntext',
            'about_en:ntext',
        ],
    ]) ?>

</div>
