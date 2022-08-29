<?php

use common\widgets\Consult;
use common\widgets\Affiliation;
use lajax\translatemanager\helpers\Language as Lx;

$this->title = Lx::t('frontend', 'Error');

?>
    <section class="error-mg">
        <div class="container">
            <div class="error-404 text-center">
                <img src="/images/shape/Creative-Agency-4-01.png" class="w-50" alt=""/>
            </div>
            <div class="search-again text-center p-5 pb-0">
                <div class="sc-title-two text-center mb-6">
                    <h4 class="cl-grey"><?= Lx::t('frontend', 'Something Went Wrong') ?></h4>
                    <h2><?= Lx::t('frontend', 'This Page Can’t Be Found') ?></h2>
                </div>
                <a href="/" class="btn"><?= Lx::t('frontend', 'Back Home') ?></a>
            </div>
        </div>
    </section>

<?= Consult::widget(['social' => $this->params['social']]) ?>