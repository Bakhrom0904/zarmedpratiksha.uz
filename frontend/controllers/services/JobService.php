<?php

namespace frontend\controllers\services;

use common\models\Articles;
use common\models\Job;

class JobService
{
    public static function getAll()
    {
        $model = Job::find();
        $result = $model->all();
        return $result;
    }

    public static function getOne($id = null)
    {
        if ($id) {
            $model = Job::find();
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }
}