<?php

use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<footer class="footer bg-blue">
    <div class="footer-wrap bg-blue">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 pt-md-3 pt-lg-0">
                    <div class="f-maincontent bg-white border-start bw-3 bc-green">
                        <?= Html::a('<img src="/backend/web/img/logo.svg" style="max-width: 200px" alt="image"/>', Url::to('/')) ?>
                        <p class="mt-3">
                            <?= Lx::t('frontend', 'ZARMED PRATIKSHA Bog\'ishamol is the first clinic in Uzbekistan, which has become a model of the highest healthcare standards due to the combination of highly qualified specialists, the latest equipment and modern infrastructure.') ?>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ps-lg-4 pt-md-3 pt-lg-0">
                    <div class="ft-lists">
                        <h3 class="cl-white text-uppercase"><?= Lx::t('frontend', 'ZARMED PRATIKSHA') ?></h3>
                        <div class="ft-lists">
                            <ul class="d-flex flex-column">
                                <li><a class="cursor-pointer"><?= Lx::t('frontend', 'Isaeva str 20, Samarkand, Uzbekistan') ?></a></li>
                                <li><a href="tel:1063"><i class="fa-sharp fa-solid fa-phone-volume"></i>&nbsp1063</a></li>
                                <li><a href="tel:<?= $social['phone']['value'] ?? '' ?>"><?= $social['phone']['value'] ?? '' ?></a></li>
                                <li>
                                <ul class="social-links-a square-link list-unstyled d-flex flex-row justify-content-center align-items-center">
                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:30px; height:30px;border-radius: 50%;"
                                        target="_blank" href="https://www.facebook.com/zarmedpratiksha/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:30px; height:30px;border-radius: 50%;"
                                        target="_blank" href="https://www.youtube.com/@zarmedpratiksha5033/videos"><i
                                        class="fab fa-youtube"></i></a>
                                </li>
                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:30px; height:30px;border-radius: 50%;"
                                        target="_blank"
                                        href="https://t.me/zarmedportal"><i class="fa-brands fa-telegram"></i></a>
                                </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="mailto:<?= $social['email']['value'] ?? '' ?>"><?= $social['email']['value'] ?? '' ?></a>
                                </li>
                            </ul>
                        </div>
                        <form>
                            <div class="form-group">
                                <a href="<?=Url::to(['jobs'])?>"
                                   class="btn bg-white text-blue w-100 mt-1"><?= Lx::t('frontend', 'Apply For a Job') ?></a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 pt-md-3 pt-lg-0">                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.0486070657944!2d66.94431071570048!3d39.64862060991711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d19fbf4b2d8d9%3A0x7349d93e43099d11!2sZARMED%20PRATIKSHA%20Bog&#39;ishamol!5e0!3m2!1sru!2s!4v1650259779786!5m2!1sru!2s"
                            width="100%" style="border:0; min-height: 330px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>                  
                </div>
            </div>
        </div>
    </div>
</footer>