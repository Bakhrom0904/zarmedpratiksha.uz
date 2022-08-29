<?php

namespace common\widgets;

use yii\base\Widget;

class Consult extends Widget
{
    public $social;
    public function init() {}

    public function run()
    {
        return $this->render('consult', ['social' => $this->social]);
    }
}
