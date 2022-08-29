<?php

namespace common\widgets;

use yii\base\Widget;

class Process extends Widget
{

    public function init() {}

    public function run()
    {
        return $this->render('process');
    }
}
