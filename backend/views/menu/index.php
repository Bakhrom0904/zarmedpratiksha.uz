<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use common\models\Menu;
use lajax\translatemanager\helpers\Language as Lx;

$lang = Yii::$app->language;

use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Menus');
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
                        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
            'order',
            'route',
            'name_uz',  
            'name_ru',
            'name_en',
                        [
                            'class' => ActionColumn::className(),
                            'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
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
