<?php

namespace common\widgets;

use yii\base\Widget;

class Header extends Widget
{
    public $menu;
    public $social;
    public function init() {
    }

    public function run()
    {
        return $this->render('header', ['menu' => $this->menu, 'social' => $this->social]);
    }
}
