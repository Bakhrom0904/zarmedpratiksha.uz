<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $slug
 * @property string|null $meta
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en'], 'required'],
            [['meta'], 'safe'],
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
            'id' => Lx::t('backend', 'ID'),
            'slug' => Lx::t('backend', 'Slug'),
            'meta' => Lx::t('backend', 'Meta'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
            'content_uz' => Lx::t('backend', 'Content Uz'),
            'content_ru' => Lx::t('backend', 'Content Ru'),
            'content_en' => Lx::t('backend', 'Content En'),
        ];
    }
}
