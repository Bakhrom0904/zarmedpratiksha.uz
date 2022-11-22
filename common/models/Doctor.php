<?php

namespace common\models;

use Yii;
use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "doctor".
 *
 * @property int $id
 * @property int $department_id
 * @property string|null $phone
 * @property string|null $date
 * @property string|null $img
 * @property string|null $experience
 * @property string|null $about_uz
 * @property string|null $about_ru
 * @property string|null $about_en
 * @property string|null $first_name_ru
 * @property string|null $last_name_ru
 * @property string|null $middle_name_ru
 * @property string|null $first_name_uz
 * @property string|null $last_name_uz
 * @property string|null $middle_name_uz
 * @property string|null $first_name_en
 * @property string|null $last_name_en
 * @property string|null $middle_name_en
 *
 * @property Department $department
 * @property DoctorService[] $doctorServices
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['department_id', 'first_name_ru', 'last_name_ru', 'first_name_uz', 'last_name_uz', 'first_name_en', 'last_name_en', 'about_uz', 'about_ru', 'about_en', 'img'], 'required'],
            [['department_id'], 'integer'],
            [['date', 'experience'], 'safe'],
            [['about_uz', 'about_ru', 'about_en'], 'string'],
            [['phone'], 'string', 'max' => 16],
            [['img'], 'string', 'max' => 120],
            [['first_name_ru', 'last_name_ru', 'first_name_uz', 'last_name_uz', 'first_name_en', 'last_name_en'], 'string', 'max' => 60],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'id']],
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
            'phone' => Lx::t('backend', 'Phone'),
            'date' => Lx::t('backend', 'Work days'),
            'img' => Lx::t('backend', 'Img'),
            'experience' => Lx::t('backend', 'Experience'),
            'about_uz' => Lx::t('backend', 'About myself (uzb.)'),
            'about_ru' => Lx::t('backend', 'About myself (rus.)'),
            'about_en' => Lx::t('backend', 'About myself (eng.)'),
            'first_name_ru' => Lx::t('backend', 'First name (rus.)'),
            'last_name_ru' => Lx::t('backend', 'Surname (rus.)'),
            'middle_name_ru' => Lx::t('backend', 'Middle name (rus.)'),
            'first_name_uz' => Lx::t('backend', 'First name (uzb.)'),
            'last_name_uz' => Lx::t('backend', 'Surname (uzb.)'),
            'middle_name_uz' => Lx::t('backend', 'Middle name (uzb.)'),
            'first_name_en' => Lx::t('backend', 'First name (eng.)'),
            'last_name_en' => Lx::t('backend', 'Surname (eng.)'),
            'middle_name_en' => Lx::t('backend', 'Middle name (eng.)'),
        ];
    }

    public function getAbout(){
        $lang = \Yii::$app->language;
        return $this->{"about_$lang"};
    }
    
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        $this->date = json_encode($this->date);
        return true;
    }
    
    public function afterFind(){
        $this->date = json_decode($this->date, true);
    }

    public function getTrimAbout(){
        $lang = \Yii::$app->language;
        return substr($this->{"about_$lang"}, 0, 200) . '...';
    }

    public function getFullname(){
        return $this->Lastname() . ' ' . $this->Firstname() . ' ' . $this->Middlename();
    }

    public function Firstname(){
        $lang = \Yii::$app->language;
        return $this->{"first_name_$lang"};
    }

    public function Lastname(){
        $lang = \Yii::$app->language;
        return $this->{"last_name_$lang"};
    }

    public function Middlename(){
        $lang = \Yii::$app->language;
        return $this->{"middle_name_$lang"};
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
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['id' => 'service_id'])->viaTable('doctor_service', ['doctor_id' => 'id']);
    }

    /**
     * Gets query for [[Appointment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointment()
    {
        return $this->hasMany(Appointment::className(), ['doctor_id' => 'id']);
    }
}
