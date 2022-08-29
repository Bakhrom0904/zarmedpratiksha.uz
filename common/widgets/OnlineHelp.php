<?php

namespace common\widgets;

use yii\base\Widget;

class OnlineHelp extends Widget
{
    public $social;
    public function init() {}

    public function run()
    {
        return $this->render('online-help', ['social' => $this->social]);
    }
}
