<?php

namespace frontend\controllers\services;

use common\models\Gallery;
use common\models\Insurance;

class InsuranceService
{
    public static function getAll()
    {
        $model = Insurance::find();
        $result = $model->all();
        return $result;
    }
}