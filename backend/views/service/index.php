<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use common\models\Service;
use lajax\translatemanager\helpers\Language as Lx;

$lang = Yii::$app->language;

use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Lx::t('backend', 'Services');
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
                <?php Pjax::begin(); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => "<div class=\"mb-3\">{summary}</div>{items}\n{pager}" , 
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            "name_$lang",
                            [
                                'attribute' => 'department_id',
                                'value' => function($model){
                                    $lang = Yii::$app->language;
                                    return $model->department->{"name_$lang"};
                                }
                            ],
                            'parent_id',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, Service $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                            ],
                        ],
                    ]); ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>
