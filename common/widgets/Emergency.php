<?php

namespace common\widgets;

use yii\base\Widget;

class Emergency extends Widget
{
    public $social;
    public function init() {}

    public function run()
    {
        return $this->render('emergency', ['social' => $this->social]);
    }
}
