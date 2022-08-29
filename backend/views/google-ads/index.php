<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use lajax\translatemanager\helpers\Language as Lx;
use common\models\GoogleAds;
$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GoogleAdsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Google Ads');
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
                            'attribute' => 'url',
                            'format'    => 'raw',
                            'value'     =>  function($model){
                                return "<a href='".Yii::$app->request->hostInfo."/page?u=".$model->url."'>".Yii::$app->request->hostInfo."/page?u=".$model->url."</a>";
                            }
                        ],
                        [
                            'attribute' =>  'content',
                            'format'    =>  'raw',
                            'value'     =>  function($model){
                                return  $model->content;
                            }

                        ],
                        [
                            'attribute' => 'status',
                            'value'     => function($model){
                                return $model->status == 0 ? Lx::t('backend', 'Inactive') : Lx::t('backend', 'Active');
                            }
                        ],
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, GoogleAds $model, $key, $index, $column) {
                                return Url::toRoute([$action, 'id' => $model->id]);
                            }
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
<style>
    table img {
        max-width: 200px;
        max-height: 200px;
    }
</style>