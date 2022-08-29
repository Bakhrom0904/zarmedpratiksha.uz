<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property string|null $icon
 * @property string $key
 * @property string $value
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['icon', 'key'], 'string', 'max' => 30],
            [['value'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'icon' => Lx::t('backend', 'Icon'),
            'key' => Lx::t('backend', 'Key'),
            'value' => Lx::t('backend', 'Value'),
        ];
    }
}
