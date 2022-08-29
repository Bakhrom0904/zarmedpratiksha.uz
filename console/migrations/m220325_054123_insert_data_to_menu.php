<?php

use yii\db\Migration;

/**
 * Class m220325_054123_insert_data_to_menu
 */
class m220325_054123_insert_data_to_menu extends Migration
{
    protected $menu_items = [
        [null, 1, '/doctors', 'Shifokorlar', 'Врачи', 'Doctors'],
        [null, 2, '/departments', 'Bo\'limlar', 'Департаменты', 'Departments'],
        [null, 3, '/treatments', 'Muolajalar', 'Лечение', 'Treatments'],
        [null, 4, '/international-patients', 'Xalqaro bemorlar', 'Международные пациенты', 'International patients'],
        [null, 5, '/about', 'Biz haqimizda', 'О нас', 'About us'],
        [null, 6, '/contact', 'Bog\'lanish', 'Связаться', 'Contact'],
        [null, 7, '/search', 'Qidirish', 'Поиск', 'Search'],
    ];
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%menu}}', [
            'parent_id',
            'order',
            'route',
            'name_uz',
            'name_ru',
            'name_en',
        ], $this->menu_items);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220325_054123_insert_data_to_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220325_054123_insert_data_to_menu cannot be reverted.\n";

        return false;
    }
    */
}
