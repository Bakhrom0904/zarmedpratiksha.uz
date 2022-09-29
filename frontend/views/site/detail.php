<?php
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;


?>
<section class="breadcrumb-wrap">
    <div class="container">
        <h2 class="cl-white mb-0"><?= Lx::t('frontend', 'News from our hospital') ?></h2>
    </div>
    <div class="overlay"></div>
</section>
<?php $title='title_'.Yii::$app->language;    ?>
<?php $description='description_'.Yii::$app->language;    ?>

<section class="aboutus aboutus-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="about-img position-relative">
                    <img src="/uploads/news/<?=$new->foto;?>" class="" alt="" />
                </div>
            </div>
            <div class="col-lg-7 col-md-12 p-lg-4">
                <div class="sc-title-one mb-3">
<!--                    <h4 class="cl-green">Welcome To Best Medical & Health</h4>-->
                    <h3 class="cl-green"><?=$new->$title;?></h3>
                    <span><?=$new->$description;?></span>
                </div>
<!--                <div class="about-detail">-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim-->
<!--                        veniam, quis nostrud exercitation ullamco laboris.-->
<!--                    </p>-->
<!--                    <ul class="d-flex flex-wrap">-->
<!--                        <li class="w-50"><i class="fas fa-angle-double-right cl-green"></i> Professional Doctors</li>-->
<!--                        <li class="w-50"><i class="fas fa-angle-double-right cl-green"></i>24/7 Online Support</li>-->
<!--                        <li class="w-50"><i class="fas fa-angle-double-right cl-green"></i>Digital Laboratory</li>-->
<!--                        <li class="w-50"><i class="fas fa-angle-double-right cl-green"></i>High Packages</li>-->
<!--                        <li class="w-50 border-lg-0"><i class="fas fa-angle-double-right cl-green"></i>Online Schedule</li>-->
<!--                        <li class="w-50 border-lg-0"><i class="fas fa-angle-double-right cl-green"></i>And More...</li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
        </div>

    </div>
</section>

