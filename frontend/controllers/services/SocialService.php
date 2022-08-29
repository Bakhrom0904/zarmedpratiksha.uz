<?php

namespace frontend\controllers\services;

use common\models\Social;

class SocialService
{
    public static function getAll()
    {
        $model = Social::find();
        $result = $model->all();
        return $result;
    }

    public static function getByKey($key = null)
    {
        if ($key) {
            $model = Social::find();
            $result = $model->where(['key' => $key])->one();
            return $result;
        }
        return null;
    }
}