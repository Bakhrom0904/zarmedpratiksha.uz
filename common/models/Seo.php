<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property int $id
 * @property string|null $page
 * @property string|null $desc
 * @property string|null $keyw
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page'], 'string', 'max' => 40],
            [['desc'], 'string', 'max' => 400],
            [['keyw'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'page' => Yii::t('backend', 'Page'),
            'desc' => Yii::t('backend', 'Desc'),
            'keyw' => Yii::t('backend', 'Keyw'),
        ];
    }
}
