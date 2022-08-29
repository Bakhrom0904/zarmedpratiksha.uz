<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property int|null $department_id
 * @property int|null $doctor_id
 * @property int|null $time_id
 * @property string|null $date
 * @property string|null $fullname
 * @property string|null $phone
 *
 * @property Department $department
 * @property Doctor $doctor
 * @property Time $time
 */
class Appointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'doctor_id', 'time_id'], 'integer'],
            [['date', 'status'], 'safe'],
            [['department_id', 'doctor_id', 'time_id', 'fullname', 'phone'], 'required'],
            [['fullname'], 'string', 'max' => 120],
            [['phone'], 'string', 'max' => 20],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Doctor::className(), 'targetAttribute' => ['doctor_id' => 'id']],
            [['time_id'], 'exist', 'skipOnError' => true, 'targetClass' => Time::className(), 'targetAttribute' => ['time_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'department_id' => Lx::t('backend', 'Department'),
            'doctor_id' => Lx::t('backend', 'Doctor'),
            'time_id' => Lx::t('backend', 'Time'),
            'date' => Lx::t('backend', 'Date'),
            'fullname' => Lx::t('backend', 'Fullname'),
            'phone' => Lx::t('backend', 'Phone'),
            'status' => Lx::t('backend', 'Status'),
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'department_id']);
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
     * Gets query for [[Time]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTime()
    {
        return $this->hasOne(Time::className(), ['id' => 'time_id']);
    }
}
