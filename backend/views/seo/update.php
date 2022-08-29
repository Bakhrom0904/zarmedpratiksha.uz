<?php

use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\Seo */
$pages = ['index' => Lx::t('backend', 'Home'), 'media-coverage' => Lx::t('frontend', 'Media Coverage'), 'gallery' => Lx::t('frontend', 'Gallery'), 'tpa-insurance' => Lx::t('frontend', 'Tpa insurance'), 'events' => Lx::t('frontend', 'Events'), 'health-articles' => Lx::t('frontend', 'Healthcare Articles'), 'doctors' => Lx::t('frontend', 'Doctors'), 'departments' => Lx::t('frontend', 'Departments'), 'international-patients' => Lx::t('frontend', 'International Patients'), 'contact' => Lx::t('frontend', 'Contact')];
$this->title = $pages[$model->page];
$this->title = Yii::t('backend', 'Update Seo: {name}', [
    'name' => $pages[$model->page],
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'SEO'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $pages[$model->page], 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6><?= Html::encode($this->title) ?></h6>
        </div>
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
