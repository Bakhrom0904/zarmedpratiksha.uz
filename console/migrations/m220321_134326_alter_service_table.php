<?php

use yii\db\Migration;

/**
 * Class m220321_134326_alter_service_table
 */
class m220321_134326_alter_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('service', 'name_uz', 'text');
        $this->alterColumn('service', 'name_ru', 'text');
        $this->alterColumn('service', 'name_en', 'text');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('service', 'name_uz', 'string(30)');
        $this->alterColumn('service', 'name_ru', 'string(30)');
        $this->alterColumn('service', 'name_en', 'string(30)');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220321_134326_alter_service_table cannot be reverted.\n";

        return false;
    }
    */
}
