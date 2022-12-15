<?php
use lajax\translatemanager\helpers\Language as Lx;
use yii\helpers\Url;


?>
<?php $title='title_'.Yii::$app->language;    ?>
<?php $description='description_'.Yii::$app->language;    ?>

<section class="aboutus aboutus-3" style="margin-top: 100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="about-img position-relative">
                    <img src="/uploads/news/<?=$new->foto;?>" class="" alt="" />
                </div>
                <ul style="margin-top:30px" class="social-links-a square-link list-unstyled d-flex flex-row">
                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:60px; height:50px;border-radius: 50%;"
                                        target="_blank" href="https://www.facebook.com/zarmedpratiksha"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                            
                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:60px; height:50px;border-radius: 50%;"
                                        target="_blank"
                                        href="https://www.youtube.com/channel/UCGvS2Np6R03scueouVVpF8A"><i
                                            class="fab fa-youtube"></i></a>
                                </li>

                                <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:60px; height:50px;border-radius: 50%;"
                                        target="_blank" href="https://t.me/zarmedportal"><i
                                            class="fa-brands fa-telegram"></i></a>
                                </li>

                                <!-- <li class="m-2">
                                    <a class="btn btn-primary d-flex justify-content-center align-items-center"
                                        style="color:blue;background:white;width:60px; height:50px;border-radius: 50%;"
                                        target="_blank" href="https://www.facebook.com/zarmedpratiksha"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li> -->
                            </ul>
            </div>
            <div class="col-lg-7 col-md-12 p-lg-4">
                <div class="sc-title-one mb-3">
<!--                    <h4 class="cl-green">Welcome To Best Medical & Health</h4>-->
                    <h3 class="cl-green" style="text-transform: uppercase;"><?=$new->$title;?></h3>
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

