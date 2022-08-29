<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use lajax\translatemanager\helpers\Language as Lx;

use common\models\Articles;
$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Lx::t('backend', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-xl-12">
    <div class="ms-panel">
        <div class="ms-panel-header  ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
            <?= Html::a(Lx::t('backend', 'Add'), ['create'], ['class' => 'ms-text-primary']) ?>
        </div>
        <div class="ms-panel-body">
            <div class='row'>
                <div class="col-xl-12 col-md-12">
                    <?=$this->render('_search', ['model' => $searchModel]); ?>
                </div>
            </div>
            <div class="table-responsive">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                                [
                                    'attribute' => 'img',
                                    'format'    => 'raw',
                                    'value'     => function($model){
                                        return "<img src='$model->img' class='img-fluid' width='200px'>";
                                    }
                                ],
                                [
                                    'attribute' => 'doctor_id',
                                    'value'     => function($model){
                                        $lang = Yii::$app->language;
                                        return $model->doctor->{"first_name_$lang"}." ".$model->doctor->{"last_name_$lang"}." ".$model->doctor->{"middle_name_$lang"};
                                    }
                                ],
                                [
                                    'attribute' => 'service_id',
                                    'value'     => function($model){
                                        $lang = Yii::$app->language;
                                        return $model->service->{"name_$lang"};
                                    }
                                ],
                                "title_$lang",
                                'published_at',
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, Articles $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                        ],
                    ]); ?>
                                            </div>
        </div>
    </div>
</div>
