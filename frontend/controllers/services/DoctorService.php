<?php

namespace frontend\controllers\services;

use common\models\Doctor;

class DoctorService
{
    public static function getAll()
    {
        $model = Doctor::find()->with('services');
        $result = $model->all();
        return $result;
    }

    public static function getByLimit($limit = 1)
    {
        $model = Doctor::find()->with('services');
        $result = $model->limit($limit)->all();
        return $result;
    }

    public static function getOne($id = null)
    {
        if ($id) {
            $model = Doctor::find()->with('services');
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }

    public static function getByDepartmentId($department_id = null)
    {
        if ($department_id) {
            $model = Doctor::find();
            $result = $model->where(['department_id' => $department_id])->all();
            return $result;
        }
        return null;
    }
}