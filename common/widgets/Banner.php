<?php

namespace common\widgets;

use yii\base\Widget;

class Banner extends Widget
{
    public $title;
    public function init() {

    }

    public function run()
    {
        return $this->render('banner', ['title' => $this->title]);
    }
}
