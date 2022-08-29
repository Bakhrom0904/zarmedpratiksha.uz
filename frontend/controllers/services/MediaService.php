<?php

namespace frontend\controllers\services;

use common\models\MediaCoverage;

class MediaService
{
    public static function getAll()
    {
        $model = MediaCoverage::find();
        $result = $model->all();
        return $result;
    }
}