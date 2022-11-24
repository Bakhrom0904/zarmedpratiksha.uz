<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use lajax\translatemanager\helpers\Language as Lx;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ". Yii::t('frontend', 'About Us');

?>
<?= Banner::widget(['title' => Lx::t('frontend', 'About Us')]) ?>

<section class="blog-main blg-listings">
    <div class="container">
        <div class="sc-title-two text-center">
            <h4 class="cl-green text-uppercase"><?= Lx::t('frontend', 'About Us') ?></h4>
        </div>
        <ul class="nav nav-tabs">
            <?php foreach ($tabs as $index => $tab): ?>
                <li class="nav-item">
                    <a class="nav-link <?=$index==0?'active':''?>" data-slug="<?= $tab->slug ?>"><b style="color:#283779;"><?= $tab->title ?></b></a>
                </li>
            <?php endforeach;  ?>
        </ul>
        <div class="py-2">
            <?php foreach ($tabs as $index => $tab): ?>
                    <div tab-data="<?= $tab->slug ?>" <?=$index==0?'':'class="d-none"'?>><?= $tab->content ?></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= Affiliation::widget(['certificates' => $this->params['certificates']]) ?>
<?= Consult::widget(['social' => $this->params['social']]) ?>

<?php
$js = <<<JS
    $('.nav-link').click(function() {
        let slug = $(this).attr('data-slug');
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        $('[tab-data]').addClass('d-none');
        $('[tab-data="' + slug + '"]').removeClass('d-none');
    })
JS;

$this->registerJs($js, \yii\web\View::POS_READY);

?>
