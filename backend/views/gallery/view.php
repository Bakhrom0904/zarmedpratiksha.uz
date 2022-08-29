<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use lajax\translatemanager\helpers\Language as Lx;
$lang = Yii::$app->language;

/* @var $this yii\web\View */
/* @var $model common\models\Gallery */

$this->title = $model->{"title_$lang"};
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Galleries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ms-panel">
    <div class="ms-panel-header  ms-panel-custome">
        <h6><?= Html::encode($this->title) ?></h6>
        <div>
            <?= Html::a("<i class='fas fa-pencil-alt'></i> ".Lx::t('backend', 'Edit'), ['update', 'id' => $model->id], ['class' => 'ms-text-primary pr-3']) ?>
            <?= Html::a("<i class='fas fa-trash-alt'></i> ".Lx::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'ms-text-danger',
                'data' => [
                    'confirm' => Lx::t('backend', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>
    <div class="ms-panel-body">
        <div id="arrowSlider" class="ms-arrow-slider carousel slide" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <?php foreach (explode(',', $model->path) as $i => $img):?>
                    <div class="carousel-item <?=$i==0?'active':''?>">
                        <img class="d-block w-100" src="<?=$img?>" alt="<?=$this->title?>">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?=$this->title?></h5>
                            <p><?=$model->{"description_$lang"}?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#arrowSlider" role="button" data-slide="prev">
            <span class="material-icons" aria-hidden="true">keyboard_arrow_left</span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#arrowSlider" role="button" data-slide="next">
            <span class="material-icons" aria-hidden="true">keyboard_arrow_right</span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
