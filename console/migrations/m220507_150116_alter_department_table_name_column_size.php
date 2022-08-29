<?php

use yii\db\Migration;

/**
 * Class m220507_150116_alter_department_table_name_column_size
 */
class m220507_150116_alter_department_table_name_column_size extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('department', 'name_uz', 'string(120)');
        $this->alterColumn('department', 'name_ru', 'string(120)');
        $this->alterColumn('department', 'name_en', 'string(120)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('department', 'name_uz', 'string(60)');
        $this->alterColumn('department', 'name_ru', 'string(60)');
        $this->alterColumn('department', 'name_en', 'string(60)');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220507_150116_alter_department_table_name_column_size cannot be reverted.\n";

        return false;
    }
    */
}
