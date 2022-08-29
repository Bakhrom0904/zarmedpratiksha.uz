<?php

namespace frontend\controllers\services;

use common\models\Certificates;

class CertificateService
{
    public static function getAll()
    {
        $model = Certificates::find();
        $result = $model->all();
        return $result;
    }
}