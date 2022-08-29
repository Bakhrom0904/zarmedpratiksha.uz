<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use lajax\translatemanager\helpers\Language as Lx;
use common\models\About;
$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Abouts');
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
                                                    <?=GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
'title_uz:ntext',
'title_ru:ntext',
'title_en:ntext',
//'content_uz:ntext',
//'content_ru:ntext',
//'content_en:ntext',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, About $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
                            </div>
        </div>
    </div>
</div>
