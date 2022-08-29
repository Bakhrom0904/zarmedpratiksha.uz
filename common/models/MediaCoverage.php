<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;
use Yii;

/**
 * This is the model class for table "media_coverage".
 *
 * @property int $id
 * @property string $link
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 */
class MediaCoverage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'media_coverage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['link', 'title_uz', 'title_ru', 'title_en',  'img'], 'required'],
            [['link', 'img'], 'string'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 200],
            [['description_uz', 'description_ru', 'description_eb'], 'string'],
        ];
    }

    public function getTitle(){
        $lang = \Yii::$app->language;
        return $this->{"title_$lang"};
    }

    public function getDescription()
    {
        $lang = \Yii::$app->language;
        return $this->{"description_$lang"};
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' =>  Lx::t('backend', 'ID'),
            'link' =>  Lx::t('backend', 'Link'),
            'img' =>  Lx::t('backend', 'Img'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
            'description_uz' => Lx::t('backend', 'Description Uz'),
            'description_ru' => Lx::t('backend', 'Description Ru'),
            'description_en' => Lx::t('backend', 'Description En'),
        ];
    }
}
