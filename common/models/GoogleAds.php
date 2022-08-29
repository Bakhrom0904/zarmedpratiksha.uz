<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "google_ads".
 *
 * @property int $id
 * @property string $url
 * @property string $content
 * @property int|null $status
 */
class GoogleAds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'google_ads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'content'], 'required'],
            [['content'], 'string'],
            [['status'], 'integer'],
            [['url'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'url' => Yii::t('backend', 'Url'),
            'content' => Yii::t('backend', 'Content'),
            'status' => Yii::t('backend', 'Status'),
        ];
    }
}
