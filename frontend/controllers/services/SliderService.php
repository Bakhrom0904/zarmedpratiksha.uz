<?php

namespace frontend\controllers\services;

use common\models\Slider;

class SliderService
{
    public static function getAll()
    {
        $model = Slider::find();
        $result = $model->all();
        return $result;
    }
}