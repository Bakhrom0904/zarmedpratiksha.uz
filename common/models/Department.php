<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $img
 * @property int|null $order
 * @property int|null $branch_id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 *
 * @property Appointment[] $appointments
 * @property Branch $branch
 * @property Doctor[] $doctors
 * @property Service[] $services
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order', 'branch_id'], 'integer'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['img'], 'string', 'max' => 120],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 120],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
        ];
    }
    
    public function getDescription()
    {
        $lang = \Yii::$app->language;
        return $this->{"description_$lang"};
    }
    
    public function getName()
    {
        $lang = \Yii::$app->language;
        return $this->{"name_$lang"};
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'img' => Yii::t('backend', 'Img'),
            'order' => Yii::t('backend', 'Order'),
            'branch_id' => Yii::t('backend', 'Branch ID'),
            'name_uz' => Yii::t('backend', 'Name Uz'),
            'name_ru' => Yii::t('backend', 'Name Ru'),
            'name_en' => Yii::t('backend', 'Name En'),
            'description_uz' => Yii::t('backend', 'Description Uz'),
            'description_ru' => Yii::t('backend', 'Description Ru'),
            'description_en' => Yii::t('backend', 'Description En'),
        ];
    }

    /**
     * Gets query for [[Appointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointments()
    {
        return $this->hasMany(Appointment::className(), ['department_id' => 'id']);
    }

    /**
     * Gets query for [[Branch]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
    }

    /**
     * Gets query for [[Doctors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctors()
    {
        return $this->hasMany(Doctor::className(), ['department_id' => 'id']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['department_id' => 'id']);
    }
}
