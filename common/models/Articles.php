<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $img
 * @property int|null $doctor_id
 * @property int|null $service_id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string|null $published_at
 *
 * @property Doctor $doctor
 * @property Service $service
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'title_uz', 'title_ru', 'title_en', 'description_uz', 'description_ru', 'description_en'], 'required'],
            [['doctor_id', 'service_id'], 'integer'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['published_at'], 'safe'],
            [['img'], 'string', 'max' => 120],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 200],
            [['doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Doctor::className(), 'targetAttribute' => ['doctor_id' => 'id']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'id']],
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
            'doctor_id' => Lx::t('backend', 'Doctor ID'),
            'service_id' => Lx::t('backend', 'Service ID'),
            'title_uz' => Lx::t('backend', 'Name (uzb.)'),
            'title_ru' => Lx::t('backend', 'Name (rus.)'),
            'title_en' => Lx::t('backend', 'Name (eng.)'),
            'description_uz' => Lx::t('backend', 'Description (uzb.)'),
            'description_ru' => Lx::t('backend', 'Description (rus.)'),
            'description_en' => Lx::t('backend', 'Description (eng.)'),
            'published_at' => Lx::t('backend', 'Published At'),
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
        return substr($this->{"description_$lang"}, 0, 200) . '...';
    }

    public function getPublishedDate()
    {
        return date('D, d M Y',strtotime($this->published_at));
    }

    /**
     * Gets query for [[Doctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctor::className(), ['id' => 'doctor_id']);
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'service_id']);
    }
}
