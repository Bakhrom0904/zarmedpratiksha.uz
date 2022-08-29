<?php

namespace frontend\controllers\services;

use common\models\Articles;

class ArticleService
{
    public static function getAll()
    {
        $model = Articles::find()->with(['service', 'doctor']);
        $result = $model->all();
        return $result;
    }

    public static function getOne($id = null)
    {
        if ($id) {
            $model = Articles::find()->with(['service', 'doctor']);
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }
}