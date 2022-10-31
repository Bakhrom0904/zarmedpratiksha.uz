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
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        
                    <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-HFNXC2089W"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-HFNXC2089W');
            </script>
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
