<?php

namespace common\widgets;

use yii\base\Widget;

class Affiliation extends Widget
{
    public $certificates;
    public function init() {}

    public function run()
    {
        return $this->render('affiliation', ['certificates' => $this->certificates]);
    }
}
