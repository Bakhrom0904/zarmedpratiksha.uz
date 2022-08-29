<?php

namespace common\widgets;

use yii\base\Widget;

class Preloader extends Widget
{

    public function init() {

    }

    public function run()
    {
        return $this->render('preloader');
    }
}
