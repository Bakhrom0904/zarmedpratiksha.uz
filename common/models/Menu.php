<?php

namespace common\models;

use Yii;
use lajax\translatemanager\helpers\Language as Lx;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int|null $parent_id
 * @property int $order
 * @property string $route
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 *
 * @property Menu[] $menus
 * @property Menu $parent
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'order'], 'integer'],
            [['order', 'route'], 'required'],
            [['route'], 'string', 'max' => 30],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 60],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Lx::t('backend', 'ID'),
            'parent_id' => Lx::t('backend', 'Parent'),
            'order' => Lx::t('backend', 'Order'),
            'route' => Lx::t('backend', 'Route'),
            'name_uz' => Lx::t('backend', 'Name (uzb.)'),
            'name_ru' => Lx::t('backend', 'Name (rus.)'),
            'name_en' => Lx::t('backend', 'Name (eng.)'),
        ];
    }

    public function getName(){
        $lang = \Yii::$app->language;
        return $this->{"name_$lang"};
    }

    /**
     * Gets query for [[Menus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenus()
    {
        return $this->hasMany(Menu::className(), ['parent_id' => 'id']);
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Menu::className(), ['id' => 'parent_id']);
    }
}
