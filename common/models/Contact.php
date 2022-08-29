<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;
use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $phone
 * @property string|null $message
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'name', 'phone'], 'required'],
            [['message'], 'string'],
            [['email'], 'string', 'max' => 60],
            [['name'], 'string', 'max' => 120],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'email' => Lx::t('backend', 'Email'),
            'name' => Lx::t('backend', 'Name'),
            'phone' => Lx::t('backend', 'Phone'),
            'message' => Lx::t('backend', 'Message'),
        ];
    }
}
