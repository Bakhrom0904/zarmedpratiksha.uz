<?php
use yii\helpers\Url;
use yii\helpers\Html;
use lajax\translatemanager\helpers\Language as Lx;
$days = \common\models\Days::get();
?>
<div class="ms-card">
    <div class="ms-card-body">
        <div class="media fs-14">
        <div class="mr-2 align-self-center">
            <img src="<?=$model->img??''?>" class="ms-img-round" alt="<?=$model->Firstname()?>">
        </div>
        <div class="media-body">
            <h5><?=$model->Firstname()?> <?=$model->Lastname()?> <?=$model->MiddleName()?></h5>
            <div class="dropdown float-right" style="position: absolute;top: 5px;left: 5px;">
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
            </a>
            <ul class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: top, left; top: 18px; left: -142px; background: #d8ecf7">
                <li class="ms-dropdown-list">
                <?= Html::a("<div class='media-body'><span> <i class='fas fa-eye'></i> ".Lx::t('backend', 'View')."</span></div>", ['view', 'id' => $model->id], [
                    'class' => 'media p-2',
                ]) ?>
                <?= Html::a("<div class='media-body'><span> <i class='fas fa-pencil-alt'></i> ".Lx::t('backend', 'Edit')."</span></div>", ['update', 'id' => $model->id], [
                    'class' => 'media p-2',
                ]) ?>
                <?= Html::a("<div class='media-body'><span> <i class='fas fa-trash-alt'></i> ".Lx::t('backend', 'Delete')."</span></div>", ['delete', 'id' => $model->id], [
                    'class' => 'media p-2',
                    'data' => [
                        'confirm' => Lx::t('backend', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
                </li>
            </ul>
            </div>
            <p class="fs-12 my-1 text-disabled"><?=$model->department->{"name_".Yii::$app->language}?></p>
            <span><b><?=Lx::t('backend', 'Work days')?>:</b></span><br>
            <?php foreach($model->date as $date):?>
                <h6><b><?=$days[$date['day']]?></b> (<?=$date['time_start']?> - <?=$date['time_end']?>)</h6><br>
            <?php endforeach ?>
                    
            <h6 class="mt-2">
            <span class="fs-14">
                <?=Lx::t('backend', 'Experience')?>:
            </span>
                <?=$model->experience?> <?=Lx::t('backend', 'years')?></h6> 
        </div>
        </div>
    </div>
</div>
