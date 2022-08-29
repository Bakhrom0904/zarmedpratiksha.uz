<?php

namespace common\models;

use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property int $department_id
 * @property int|null $parent_id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 *
 * @property Department $department
 * @property DoctorService[] $doctorServices
 * @property Service $parent
 * @property Service[] $services
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'name_uz', 'name_ru', 'name_en', 'description_uz', 'description_ru', 'description_en'], 'required'],
            [['department_id', 'parent_id'], 'integer'],
            [['description_uz', 'description_ru', 'description_en'], 'string'],
            [['name_uz', 'name_ru', 'name_en'], 'string'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => Lx::t('backend', 'Parent'),
            'name_uz' => Lx::t('backend', 'Name (uzb.)'),
            'name_ru' => Lx::t('backend', 'Name (rus.)'),
            'name_en' => Lx::t('backend', 'Name (eng.)'),
            'description_uz' => Lx::t('backend', 'Description (uzb.)'),
            'description_ru' => Lx::t('backend', 'Description (rus.)'),
            'description_en' => Lx::t('backend', 'Description (eng.)'),
        ];
    }

    public function getName()
    {
        $lang = \Yii::$app->language;
        return $this->{"name_$lang"};
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
     * Gets query for [[DoctorServices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctors()
    {
        return $this->hasMany(Doctor::className(), ['id' => 'doctor_id'])->viaTable('doctor_service', ['service_id' => 'id']);
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Service::className(), ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['parent_id' => 'id']);
    }
}
