<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="ms-body ms-primary-theme ms-logged-out">
<?php $this->beginBody() ?>
<div id="preloader-wrap">
  <div class="spinner spinner-8">
    <div class="ms-circle1 ms-child"></div>
    <div class="ms-circle2 ms-child"></div>
    <div class="ms-circle3 ms-child"></div>
    <div class="ms-circle4 ms-child"></div>
    <div class="ms-circle5 ms-child"></div>
    <div class="ms-circle6 ms-child"></div>
    <div class="ms-circle7 ms-child"></div>
    <div class="ms-circle8 ms-child"></div>
    <div class="ms-circle9 ms-child"></div>
    <div class="ms-circle10 ms-child"></div>
    <div class="ms-circle11 ms-child"></div>
    <div class="ms-circle12 ms-child"></div>
  </div>
</div>

<main class="body-content">
  <div class="ms-content-wrapper ms-auth">
    <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <?= Alert::widget() ?>
            <?= $content ?>
          </div>
        </div>
    </div>
  </div>

</main>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
