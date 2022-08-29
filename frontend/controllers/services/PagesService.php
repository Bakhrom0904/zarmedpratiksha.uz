<?php

namespace frontend\controllers\services;

use common\models\Pages;

class PagesService
{
    public static function getBySlug($slug = '')
    {
        $model = Pages::find()->where(['slug' => "/$slug"]);
        $result = $model->one();
        return $result;
    }
}