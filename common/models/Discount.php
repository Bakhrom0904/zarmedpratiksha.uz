<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "discount".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $short_uz
 * @property string|null $short_ru
 * @property string|null $short_en
 * @property string|null $description_uz
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property string|null $foto
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Discount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

     public $imageFile;

    public static function tableName()
    {
        return 'discount';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'short_uz', 'short_ru', 'short_en', 'description_uz', 'description_ru', 'description_en'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['foto'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_en' => Yii::t('app', 'Title En'),
            'short_uz' => Yii::t('app', 'Short Uz'),
            'short_ru' => Yii::t('app', 'Short Ru'),
            'short_en' => Yii::t('app', 'Short En'),
            'description_uz' => Yii::t('app', 'Description Uz'),
            'description_ru' => Yii::t('app', 'Description Ru'),
            'description_en' => Yii::t('app', 'Description En'),
            'foto' => Yii::t('app', 'Foto'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function upload()
    {
        $this->foto=$this->imageFile->baseName .'.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend') . '/web/uploads/discount/' . $this->imageFile->baseName . '.' . $this->imageFile->extension,false);
            return true;
        } else {
            return false;
        }
    }
}
