<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use lajax\translatemanager\helpers\Language as Lx;
use common\models\Slider;
$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Sliders');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-xl-12">
    <div class="ms-panel">
        <div class="ms-panel-header  ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
            <?= Html::a(Lx::t('backend', 'Add'), ['create'], ['class' => 'ms-text-primary']) ?>
        </div>
        <div class="ms-panel-body">
            <div class="table-responsive">
                                                    <?=GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'img',
                    'format'    => 'raw',

                    'value' => function($model){
                        return "<img src='$model->img' class='img-fluid' width='200px'>";
                    }
                ],
                [
                    'attribute' => 'status',
                    'value' => function($model){
                        return $model->status == "active" ? Lx::t('backend', 'Active') : Lx::t('backend', 'Inactive');
                    }
                ],
                "title_$lang",
                [
                    'attribute' => "description_$lang",
                    'format'    => 'raw',
                    'value' =>  function($model) {
                        $lang = Yii::$app->language;
                        return $model->{"description_$lang"};
                    }
                ],
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Slider $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
                            </div>
        </div>
    </div>
</div>
