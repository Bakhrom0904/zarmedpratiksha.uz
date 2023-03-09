<?php

use lajax\translatemanager\helpers\Language as Lx;
$til=Yii::$app->language;

?>
<section class="aboutus">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 pe-lg-5">
                <div class="about-img-2">
                    <a href="https://zarmedpratiksha.uz/detail?id=18"><img src="https://scontent.ftas5-1.fna.fbcdn.net/v/t39.30808-6/329157452_859741815095438_6362920035979866961_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a26aad&_nc_ohc=tgP2Q8x-1DsAX_GawLz&_nc_ht=scontent.ftas5-1.fna&oh=00_AfDRvk0AcOyackaA4BftogTVVbIIG8aaDytAkd-3oiKy5A&oe=640E3F10" alt="Foto"></a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6" style="background-image: url('https://www.zarmedpratiksha.uz/uploads/banner/Order-logo.jpg?_t=1672745688');background-size: 400px 350px;background-repeat: no-repeat;background-position: right;background-blend-mode: lighten;">
                <div class="sc-title-one mb-3">
                    <h2 style="color:#F19035;text-transform: uppercase;"><?= Lx::t('frontend', 'Attention Preferential Order Holders!') ?></h2>
                    <h2 class="cl-green text-uppercase"><?= Lx::t('frontend', 'Now you have the opportunity to choose the "ZARMED PRATIKSHA BOGISHAMOL" clinic!') ?></h2>
                </div>
                <div class="px-3">
                                <a href="https://zarmedpratiksha.uz/discounts?id=3" class="btn bg-blue text-white p-3"><?= Lx::t('frontend', 'Details') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>