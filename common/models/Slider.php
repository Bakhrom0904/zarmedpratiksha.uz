<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $img
 * @property string $status
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'title_uz', 'title_ru', 'title_en'], 'required'],
            [['status', 'title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en'], 'string'],
            [['img'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'img' => Lx::t('backend', 'Img'),
            'status' => Lx::t('backend', 'Status'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
            'description_uz' => Lx::t('backend', 'Description (uzb.)'),
            'description_ru' => Lx::t('backend', 'Description (rus.)'),
            'description_en' => Lx::t('backend', 'Description (eng.)'),
        ];
    }

    public function getTitle()
    {
        $lang = \Yii::$app->language;
        return $this->{"title_$lang"};
    }

    public function getDescription()
    {
        $lang = \Yii::$app->language;
        return $this->{"description_$lang"};
    }
}
