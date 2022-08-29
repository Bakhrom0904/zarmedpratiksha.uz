<?php
namespace common\controllers;

use lajax\translatemanager\helpers\Language;

class Controller extends \yii\web\Controller {

    public function init() {
        Language::registerAssets();
        parent::init();
    }
}