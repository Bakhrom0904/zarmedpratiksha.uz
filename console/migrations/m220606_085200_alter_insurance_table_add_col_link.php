<?php

use yii\db\Migration;

/**
 * Class m220606_085200_alter_insurance_table_add_col_link
 */
class m220606_085200_alter_insurance_table_add_col_link extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('insurance', 'link', 'string(120)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('insurance', 'link');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220606_085200_alter_insurance_table_add_col_link cannot be reverted.\n";

        return false;
    }
    */
}
