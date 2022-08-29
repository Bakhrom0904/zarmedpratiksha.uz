<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use lajax\translatemanager\helpers\Language as Lx;
    $lang = Yii::$app->language;
?>
<div class="ms-card">
    <div class="ms-panel-header">
        <h5><?=$model->{"title_$lang"}?></h5>
        <div class="dropdown float-left" style="position: absolute;top: 20px;right: 10px;">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: top, left; top: 18px; left: -142px; background: #d8ecf7">
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
    </div>
    <div class="ms-card-body">
        <div class="media fs-14">
            <div class="media-body">  
                    <?php 
                        $carousel_items = ''; 
                        $carousel_indicator = '';
                        foreach(explode(',', $model->path) as $i => $img){
                            $carousel_items .= "<div class='carousel-item ".($i==0 ? 'active':'')."'><img class='d-block w-100' src='$img' alt='".$model->{"title_$lang"}."'></div>";
                            $carousel_indicator .= "<li data-target='#imagesSlider' data-slide-to='$i' class='".($i==0?'active':'')."'> <img class='d-block w-100' src='$img' alt='".$model->{"title_$lang"}."'></li>";
                        } ?>
                        <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?=$carousel_items?>
                            </div>
                            <ol class="carousel-indicators">
                                <?=$carousel_indicator?>    
                            </ol>
                        </div>
                <h6 class="mt-2">
                <span class="fs-14">
                    <?=Lx::t('backend', 'Created at')?>:
                </span>
                    <?=Yii::$app->formatter->asDateTime($model->created_at)?></h6> 
            </div>
        </div>
    </div>
</div>
