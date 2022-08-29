<?php

namespace common\widgets;

use yii\base\Widget;

class SocialMedia extends Widget
{
    public $social;
    public function init() {}

    public function run()
    {
        return $this->render('social-media', ['social' => $this->social]);
    }
}
