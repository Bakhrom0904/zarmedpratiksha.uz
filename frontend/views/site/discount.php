<?php
use lajax\translatemanager\helpers\Language as Lx;


?>
<?php $title='title_'.Yii::$app->language;    ?>
<?php $short='short_'.Yii::$app->language;?>
<?php $description='description_'.Yii::$app->language;    ?>


<section class="blog-main bg-sfgrey-2" style="margin-top:100px">
    <div class="container">
        <div class="sc-title-two text-center" style="margin-top:80px">
<!--            <h4 class="cl-green">Our Blogs</h4>-->
            <h2><?= Lx::t('frontend', 'PROMOTIONS AND DISCOUNTS') ?></h2>
        </div>
        <div class="blog-wrap">


            <div class="row">
                <?php foreach($discount as $d):?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="article-list bg-white">
                        <div class="at-thumbnail">
                            <a href="/discounts?id=<?=$d->id;?>">
                                <img src="/uploads/discount/<?=$d->foto;?>" alt="" />
                            </a>
                        </div>
                        <div class="article-content">
                            <div class="artl-detail">
                                <h4 style="text-transform:uppercase;"><a href="/discounts?id=<?=$d->id;?>"><?=$d->$title;?></a></h4>
                                <p><?=$d->$short;?></p>
                            </div>
                        </div>
                        <div class="article-footer">
                            <!-- <?php $newDate = date("d-m-Y H:i", strtotime($d->created_at)); ?>
                            <b><?=$newDate;?></b> -->
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>


            <?php

            echo \yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
                'maxButtonCount'=>6,
                'activePageCssClass'=>'act',
                
            ])
            ?>
        </div>
    </div>
</section>