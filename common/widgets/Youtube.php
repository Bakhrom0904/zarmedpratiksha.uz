<?php

namespace common\widgets;

use yii\base\Widget;

class Youtube extends Widget
{

    public function init() {}

    public function run()
    {
        return $this->render('youtube');
    }
}
