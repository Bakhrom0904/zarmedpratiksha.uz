<?php

/** @var yii\web\View $this */

use common\widgets\Banner;
use common\widgets\Consult;
use common\widgets\Affiliation;
use common\widgets\OnlineHelp;
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = Yii::t('frontend', "ZARMED PRATIKSHA")." | ".Yii::t('frontend', 'Departments').' - '. $department->{"name_$lang"};
?>
<?= Banner::widget(['title' => $this->title]) ?>
    <section class="sercvice-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <?= OnlineHelp::widget(['social' => $this->params['social']])?><br>
                    <?php
                        if($department->id==1 || $department->id==7)
                        {
                            
                          echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/8FZSdRx0zew' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

                        }
                        elseif($department->id==2 || $department->id==8 || $department->id==11)
                        {
                            echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/_vrGKpRD6Rs' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==5 || $department->id==49 || $department->id==45)
                        {
                            echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/3-7vw5jpYBg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==4 || $department->id==34 || $department->id==27 || $department->id==44)
                        {
                            echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/MrBUHkb-9vM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==6) 
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/fCifFZh22Jw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==40 || $department->id==10)
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/HTZ-pklXxsk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==14)
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/WuzFmLiax4A' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                        }
                        elseif($department->id==20)
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/YpjrS57UuO8' title='Plastik jarrohlar, katta tajribaga ega mutaxassislar Adamyan Ruben Tatevosovich va Murodov Akmal' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                        }
                        elseif($department->id==13)
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/k5t24Xk54fg' title='&quot;ZARMED PRATIKSHA Bog&#39;ishamol&quot; klinikasi pediatri Axmedova Xakima Jo‘rayevna' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                        }
                        elseif($department->id==3 || $department->id==33)
                        {
                             echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/Et-s1maL64k' title='Доктор Ракшит  —  консультант-хирург-ортопед из Индии, в клинике &quot;ZARMED PRATIKSHA Bog&#39;ishamol&quot;' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                        }
                        else
                        {
                            echo "<iframe width='98%' height='315' src='https://www.youtube.com/embed/ysK1zeIfySY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                        }
                    ?>
                    <br>
                    <iframe width="98%" height="315" src="https://www.youtube.com/embed/3IYMeFYay7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="sv-detail-content about-detail mb-3">
                        <!-- <h2><?= $department->name ?></h2> -->
                        <img class="w-100" src="<?= $department->img ?>">
                        <p class="py-3">
                            <?= $department->description ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php if (count($department->services) > 0) { ?>
    <section class="pt-0 service">
        <div class="container">
            <div class="sc-title-two text-center">
                <h4 class="cl-green"><?= Lx::t('frontend', 'Best Practice Care!') ?></h4>
                <h2><?= Lx::t('frontend', 'Different Types Of Services') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($department->services as $services) { ?>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <?= Html::a('<div class="sv-detail pl-4"><h3>' . $services->name . '</h3><p class="cl-grey">' . $services->trimDescription . '</p></div>', Url::to(['service-info', 'id' => $services->id]), ['class' => 'overflow-hidden service-aa p-4 d-flex align-items-center border-start bw-2 bc-green bx-shadow bg-white h-100']) ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php if (count($department->doctors) > 0) { ?>
    <section class="pt-0 team">
        <div class="container">
            <div class="sc-title-two text-center">
                <h2><?= Lx::t('frontend', 'Doctors of the Department') ?></h2>
            </div>
            <div class="row">
                <?php foreach ($department->doctors as $doctor) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-wrap position-relative mb-10 text-center">
                            <div class="team-img position-relative rounded-2 overflow-hidden before-x doctor-card">
                                <img src="<?= $doctor->img ?>" alt="<?= $doctor->fullname ?>"/>
                            </div>
                            <div class="team-name-ab bx-shadow pt-4 pb-2">
                                <?= Html::a(' <h4 class="text-capitalize">' . $doctor->fullname . '</h4><p class="cl-green">' . $doctor->department->name . '</p>', Url::to(['doctor-profile', 'id' => $doctor->id])) ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?= Consult::widget(['social' => $this->params['social']]) ?>