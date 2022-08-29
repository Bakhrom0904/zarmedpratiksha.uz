<?php

namespace frontend\controllers\services;

use common\models\Gallery;

class GalleryService
{
    public static function getAll()
    {
        $model = Gallery::find();
        $result = $model->all();
        return $result;
    }
}