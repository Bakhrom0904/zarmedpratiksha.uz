<?php

namespace common\widgets;

use yii\base\Widget;

class MainBanner extends Widget
{
    public $items;
    public function init() {

    }

    public function run()
    {
        return $this->render('main-banner', ['items' => $this->items]);
    }
}
