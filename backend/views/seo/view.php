<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\Seo */
$pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact'), 'page' => Lx::t('frontend', 'Pages'), 'jobs' => Lx::t('frontend', 'Jobs'), 'about' => Lx::t('frontend', 'About Us'), 'appointment' => Lx::t('frontend', 'Appointment') ];
$this->title = $pages[$model->page];
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'SEO'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="col-xl-12">
    <div class="ms-panel">
        <div class="ms-panel-header  ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
            <div>
                <?=  Html::a("<i class='fas fa-pencil-alt'></i> ".Lx::t('backend', 'Edit'), ['update', 'id' => $model->id], ['class' => 'ms-text-primary pr-3']) ?>
                <?=  Html::a("<i class='fas fa-trash-alt'></i> ".Lx::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
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
                            'attribute' =>  'page',
                            'value'     =>  function($model){
                                $pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact')];
                                return $pages[$model->page];
                            }
                        ],
            'desc',
            'keyw',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>
