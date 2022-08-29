<?php

namespace common\models;

use Yii;
use lajax\translatemanager\helpers\Language as Lx;


/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $path
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string|null $created_at
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['path', 'description_uz', 'description_ru', 'description_en'], 'string'],
            [['description_uz', 'description_ru', 'description_en'], 'required'],
            [['created_at'], 'safe'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 60],
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

    public function getPublishedDate(){
        return date("F j, Y, G:i", strtotime($this->created_at));
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'path' => Lx::t('backend', 'Img'),
            'description_uz' => Lx::t('backend', 'Desctiption (uzb.)'),
            'description_ru' => Lx::t('backend', 'Description (rus.)'),
            'description_en' => Lx::t('backend', 'Description (eng.)'),
            'created_at' => Lx::t('backend', 'Created at'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
        ];
    }
}
