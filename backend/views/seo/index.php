<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use lajax\translatemanager\helpers\Language as Lx;
use common\models\Seo;
$lang = Yii::$app->language;

use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SeoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'SEO');
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
                [
                    'attribute' =>  'page',
                    'value'     =>  function($model){
                        $pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact'), 'page' => Lx::t('frontend', 'Pages'), 'jobs' => Lx::t('frontend', 'Jobs'), 'about' => Lx::t('frontend', 'About Us'), 'appointment' => Lx::t('frontend', 'Appointment') ];
                        return $pages[$model->page];
                    }
                ],
                'desc',
                'keyw',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Seo $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>
                            </div>
        </div>
    </div>
</div>
