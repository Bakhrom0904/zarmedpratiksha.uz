<?php
namespace common\models;

class Days
{
    static public function get(){
        $lang = \Yii::$app->language;
        if ($lang == 'uz')
            return [
                'Dushanba', 'Seshanba', 'Chorshanba',
                'Payshanba', 'Juma', 'Shanba', 'Yakshanba'
            ];
        else if ($lang == 'ru')
            return [
                'Понедельник', 'Вторник', 'Среда',
                'Четверг', 'Пятница', 'Суббота', 'Воскресенье'
            ];
        else 
            return [
                'Monday', 'Tuesday', 'Wednesday',
                'Thursday', 'Friday', 'Saturday', 'Sunday'
            ];
    }
    
}