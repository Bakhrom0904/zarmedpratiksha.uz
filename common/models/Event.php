<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $img
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string|null $published_at
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en'], 'required'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['published_at'], 'safe'],
            [['img'], 'string', 'max' => 120],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 200],
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

    public function getTrimDescription()
    {
        $lang = \Yii::$app->language;
        return substr($this->{"description_$lang"}, 0, 300) . '...';
    }

    public function getPublishedDate(){
        return date('D, d M Y', strtotime($this->published_at));
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'img' => Lx::t('backend', 'Img'),
            'title_uz' => Lx::t('backend', 'Title Uz'),
            'title_ru' => Lx::t('backend', 'Title Ru'),
            'title_en' => Lx::t('backend', 'Title En'),
            'description_uz' => Lx::t('backend', 'Description Uz'),
            'description_ru' => Lx::t('backend', 'Description Ru'),
            'description_en' => Lx::t('backend', 'Description En'),
            'published_at' => Lx::t('backend', 'Published At'),
        ];
    }
}
