<?php
namespace console\controllers;

use yii\console\Controller;
use common\models\Region;
use common\models\District;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $regions = file_get_contents("regions.json");
        echo "Inserting regions ...";
        foreach(json_decode($regions) as $region){
            $reg = District::find()->where(['name_uz'=>$region->name_uz])->One();
            if (!$reg) $reg = new Region();
            $reg->name_uz = $region->uz;
            $reg->name_ru = $region->ru;
            $reg->name_en = $region->en;
            $reg->save();
            echo "inserted: ".$reg->name_ru."\n";
        }
        echo "Finished inserting regions.";
        $districts = file_get_contents("districts.json");
        echo "Inserting districts ...";
        foreach(json_decode($districts) as $dist){
            $reg = District::find()->where(['name_uz'=>$dist->name_uz])->One();
            if ($reg){
                $reg->region_id = $dist->region_id;
                $reg->save();
            }
            else {
                $reg = new District();
                $reg->region_id = $dist->region_id;
                $reg->name_uz = $dist->uz;
                $reg->name_ru = $dist->ru;
                $reg->name_en = $dist->en;
                $reg->save();
            }
            echo "inserted: ".$reg->name_ru."\n";
        }
        echo "Finished inserting districts.";
    }
}