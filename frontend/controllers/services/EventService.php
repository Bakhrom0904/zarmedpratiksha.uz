<?php

namespace frontend\controllers\services;

use common\models\Event;

class EventService
{
    public static function getAll()
    {
        $model = Event::find();
        $result = $model->all();
        return $result;
    }

    public static function getOne($id = null)
    {
        if ($id) {
            $model = Event::find();
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }
}