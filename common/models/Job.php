<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;
use Yii;

/**
 * This is the model class for table "job".
 *
 * @property int $id
 * @property string $img
 * @property string $link
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string|null $published_at
 */
class Job extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'link', 'title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en'], 'required'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['published_at'], 'safe'],
            [['img'], 'string', 'max' => 120],
            [['link', 'title_uz', 'title_ru', 'title_en'], 'string', 'max' => 200],
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
            'link' => Lx::t('backend', 'Link'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
            'description_uz' => Lx::t('backend', 'Description (uzb.)'),
            'description_ru' => Lx::t('backend', 'Description (rus.))'),
            'description_en' => Lx::t('backend', 'Description (eng.)'),
            'published_at' => Lx::t('backend', 'Published At'),
        ];
    }

    public function getTitle() {
        $lang = \Yii::$app->language;
        return $this->{"title_$lang"};
    }

    public function getDescription() {
        $lang = \Yii::$app->language;
        return $this->{"description_$lang"};
    }

    public function getTrimDescription(){
        $lang = \Yii::$app->language;
        return $this->{"description_$lang"};
    }

    public function getPublishedDate(){
        
        return date("d-m-Y", strtotime($this->published_at));
    }
}
