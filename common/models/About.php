<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $slug
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en'], 'required'],
            [['title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en'], 'string'],
            [['slug'], 'string', 'max' => 200],
        ];
    }

    public function getTitle(){
        $lang = \Yii::$app->language;
        return $this->{"title_$lang"};
    }

    public function getContent(){
        $lang = \Yii::$app->language;
        return $this->{"content_$lang"};
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'slug' => Yii::t('backend', 'Slug'),
            'title_uz' => Yii::t('backend', 'Name Uz'),
            'title_ru' => Yii::t('backend', 'Name Ru'),
            'title_en' => Yii::t('backend', 'Name En'),
            'content_uz' => Yii::t('backend', 'Content Uz'),
            'content_ru' => Yii::t('backend', 'Content Ru'),
            'content_en' => Yii::t('backend', 'Content En'),
        ];
    }
}
