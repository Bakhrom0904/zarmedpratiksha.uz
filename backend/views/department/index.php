<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use lajax\translatemanager\helpers\Language as Lx;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DepartmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$lang = Yii::$app->language;

$this->title = Lx::t('backend', 'Departments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
        <div class="col-xl-12">
          <div class="ms-panel">
            <div class="ms-panel-header  ms-panel-custome">
              <h6><?=Lx::t('backend', 'Department staff')?></h6>
              <?= Html::a(Lx::t('backend', 'Add'), ['create'], ['class' => 'ms-text-primary']) ?>
            </div>
            <div class="ms-panel-body">
            <div class='row'>
              <div class="col-xl-12 col-md-12">
                  <?= $this->render('_search', ['model' => $searchModel]); ?>
              </div>
          </div>
              <div class="table-responsive">
              <?= GridView::widget([
                  'dataProvider' => $dataProvider,
                  'layout' => "<div class=\"mb-3\">{summary}</div>{items}\n{pager}" ,

                  'columns' => [
                      ['class' => 'yii\grid\SerialColumn'],
                      [
                          'attribute' => 'img',
                          'format' => 'raw',
                          'value' => function($model){
                              return "<img class='img-thumbnail' src='".Yii::$app->request->hostInfo.$model->img."'>";
                          }
                      ],
                      [
                        'attribute' =>  'branch_id',
                        'value'     =>  function($model){
                            $lang = Yii::$app->language;
                            return  $model->branch->{"title_$lang"};
                        }
                      ],
                      "name_$lang",
                      [
                          'attribute' => "description_$lang",
                          'value' => function($model){
                              $lang = Yii::$app->language;
                              return substr($model->{"description_$lang"}, 0, 450);
                          }
                      ],
                      [
                          'class' => ActionColumn::className(),
                          'urlCreator' => function ($action, \common\models\Department $model, $key, $index, $column) {
                              return Url::toRoute([$action, 'id' => $model->id]);
                          }
                      ],
                  ],
              ]); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
