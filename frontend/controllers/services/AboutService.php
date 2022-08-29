<?php

namespace frontend\controllers\services;

use common\models\About;
use common\models\Certificates;

class AboutService
{
    public static function getAll()
    {
        $model = About::find();
        $result = $model->all();
        return $result;
    }
}