<?php

namespace frontend\controllers\services;

use common\models\Branch;
use common\models\Department;
use common\models\Service;

class DepartmentService
{
    public static function getAll()
    {
        $model = Department::find();
        $result = $model->all();
        return $result;
    }

    public static function getBranch()
    {
        $model = Branch::find()->with(['departments']);
        $result = $model->all();
        return $result;
    }

    public static function getByBranch($id = null)
    {
        $model = Branch::find()->where(['id' => $id])->with('departments');
        $result = $model->one();
        return $result;
    }

    public static function getOne($id = null)
    {
        if ($id) {
            $model = Department::find()->with('services');
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }

    public static function getOneService($id = null)
    {
        if ($id) {
            $model = Service::find()->with('doctors');
            $result = $model->where(['id' => $id])->one();
            return $result;
        }
        return null;
    }
}