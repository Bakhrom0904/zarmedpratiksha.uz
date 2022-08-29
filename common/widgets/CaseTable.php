<?php

namespace common\widgets;

use yii\base\Widget;

class CaseTable extends Widget
{
    public $social;
    public function init() {}

    public function run()
    {
        return $this->render('case-table', ['social' => $this->social]);
    }
}
