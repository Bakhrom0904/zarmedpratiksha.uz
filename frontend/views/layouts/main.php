<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Footer;
use common\widgets\Header;
use common\widgets\Preloader;
use frontend\assets\AppAsset;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="DOdW7j4Y_sF9aVElPdBLueOe7W79kfsankyFrJnX0e4" />
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                m[i].l=1*new Date();
                for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(100020076, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                ecommerce:"dataLayer"
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/100020076" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body class="home-2">
    <?php $this->beginBody() ?> 

        <?= Preloader::widget() ?>
        <?= Header::widget(['menu' => $this->params['menu'], 'social' => $this->params['social']]) ?>
        <?= $content ?>
        <?= Footer::widget(['menu' => $this->params['menu'], 'departments' => $this->params['departments'], 'social' => $this->params['social']]) ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
