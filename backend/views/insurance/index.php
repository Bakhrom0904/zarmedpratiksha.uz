<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use common\models\Insurance;
use lajax\translatemanager\helpers\Language as Lx;

$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InsuranceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Insurances');
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
                                                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [ 
                            'attribute' => 'img',
                            'format' => 'raw',
                            'value' => function($model){
                                return "<img src='/frontend/uploads/department/<?=$model->img;?>' width='200px' class='img-fluid'>";
                            } 
                        ],
                        [
                            'class' => ActionColumn::className(),
                            'template' => "{update} {delete}",
                            'urlCreator' => function ($action, Insurance $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                        ],
                    ]); ?>
                                            </div>
        </div>
    </div>
</div>
