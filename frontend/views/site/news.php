<?php
use lajax\translatemanager\helpers\Language as Lx;


?>
<?php $title='title_'.Yii::$app->language;    ?>
<?php $short='short_'.Yii::$app->language;?>
<?php $description='description_'.Yii::$app->language;    ?>
<section class="breadcrumb-wrap">
    <div class="container">
        <h2 class="cl-white mb-0"><?= Lx::t('frontend', 'News and Promotions') ?></h2>
    </div>
    <div class="overlay"></div>
</section>

<section class="blog-main bg-sfgrey-2">
    <div class="container">
        <div class="sc-title-two text-center">
<!--            <h4 class="cl-green">Our Blogs</h4>-->
            <h2><?= Lx::t('frontend', 'News from our hospital') ?></h2>
        </div>
        <div class="blog-wrap">


            <div class="row">
                <?php foreach($news as $new):?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="article-list bg-white">
                        <div class="at-thumbnail">
                            <a href="/detail?id=<?=$new->id;?>">
                                <img src="/uploads/news/<?=$new->foto;?>" alt="" />
                            </a>
                        </div>
                        <div class="article-content">
                            <div class="artl-detail">
                                <h4><a href="/detail?id=<?=$new->id;?>"><?=$new->$title;?></a></h4>
                                <p><?=$new->$short;?></p>
                            </div>
                        </div>
                        <div class="article-footer">
                            <b>29.09.2022</b>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>


            <?php

            echo \yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
                'maxButtonCount'=>6,
            ])
            ?>
        </div>
    </div>
</section>