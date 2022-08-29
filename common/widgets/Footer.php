<?php

namespace common\widgets;

use yii\base\Widget;

class Footer extends Widget
{
    public $menu;
    public $social;
    public $departments;
    public function init() {
    }

    public function run()
    {
        return $this->render('footer', ['menu' => $this->menu, 'departments' => $this->departments, 'social' => $this->social]);
    }
}
