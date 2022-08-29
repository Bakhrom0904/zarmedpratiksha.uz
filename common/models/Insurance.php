<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "insurance".
 *
 * @property int $id
 * @property string $img
 */
class Insurance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'insurance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'link'], 'required'],
            [['img', 'link'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'img' => Yii::t('backend', 'Img'),
            'link' => Yii::t('backend', 'Link'),
        ];
    }
}
