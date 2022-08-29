<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 *
 * @property Department[] $departments
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en'], 'required'],
            [['title_uz', 'title_ru', 'title_en'], 'string', 'max' => 200],
        ];
    }

    public function getTitle(){
        $lang = \Yii::$app->language;
        return $this->{"title_$lang"};
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title_uz' => Yii::t('backend', 'Title Uz'),
            'title_ru' => Yii::t('backend', 'Title Ru'),
            'title_en' => Yii::t('backend', 'Title En'),
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['branch_id' => 'id'])->orderBy(['order' => SORT_ASC]);
    }
}
